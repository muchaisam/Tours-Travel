<?php

namespace App;

use Database\Factories\DestinationsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Destinations extends Model
{
    use HasFactory, SoftDeletes;

    protected static function newFactory()
    {
        return DestinationsFactory::new();
    }

    protected $fillable = [
        'title', 'description', 'content', 'image', 'published_at', 'category_id', 'pricing',
        'duration', 'group_size', 'tour_type',
    ];

    /**
     * Get numeric price extracted from the pricing string.
     */
    public function getPriceAttribute(): int
    {
        return (int) preg_replace('/[^\d]/', '', $this->pricing ?? '0');
    }

    /**
     * Get the full image URL, handling both storage and public paths.
     */
    public function getImageUrlAttribute(): string
    {
        if (! $this->image) {
            return asset('images/destination-2.jpg');
        }

        // If image starts with 'images/', it's in the public directory
        if (str_starts_with($this->image, 'images/')) {
            return asset($this->image);
        }

        // Otherwise it's in storage
        return asset('storage/'.$this->image);
    }

    protected $casts = [
        'published_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * delete image from storage
     *
     * @return void
     */
    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * check if post has a tag
     */
    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }

    /**
     * Scope for published destinations.
     */
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /**
     * Scope for recent destinations.
     */
    public function scopeRecent($query, $limit = 10)
    {
        return $query->orderBy('published_at', 'desc')->limit($limit);
    }

    /**
     * Scope for destinations by category.
     */
    public function scopeInCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    /**
     * Scope for destinations with specific tags.
     */
    public function scopeWithTags($query, array $tagIds)
    {
        return $query->whereHas('tags', function ($q) use ($tagIds) {
            $q->whereIn('tags.id', $tagIds);
        });
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'destination_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'destination_id');
    }

    public function getAverageRatingAttribute(): ?float
    {
        try {
            if ($this->relationLoaded('reviews')) {
                return $this->reviews->avg('rating');
            }

            return $this->reviews()->avg('rating');
        } catch (\Exception $e) {
            return null;
        }
    }

    public function getReviewsCountAttribute(): int
    {
        try {
            if ($this->relationLoaded('reviews')) {
                return $this->reviews->count();
            }

            return $this->reviews()->count();
        } catch (\Exception $e) {
            return 0;
        }
    }
}
