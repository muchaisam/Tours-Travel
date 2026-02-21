<?php

namespace App\Services;

use App\Destinations;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class SearchService
{
    /**
     * Search destinations by keyword.
     */
    public function searchDestinations(string $keyword, int $limit = 10): Collection
    {
        return Destinations::query()
            ->where('title', 'like', "%{$keyword}%")
            ->orWhere('description', 'like', "%{$keyword}%")
            ->orWhere('content', 'like', "%{$keyword}%")
            ->limit($limit)
            ->get();
    }

    /**
     * Filter destinations by category.
     */
    public function filterByCategory(int $categoryId): Collection
    {
        return Destinations::where('category_id', $categoryId)->get();
    }

    /**
     * Filter destinations by tags.
     */
    public function filterByTags(array $tagIds): Collection
    {
        return Destinations::whereHas('tags', function (Builder $query) use ($tagIds) {
            $query->whereIn('tags.id', $tagIds);
        })->get();
    }

    /**
     * Get featured/popular destinations.
     */
    public function getFeatured(int $limit = 6): Collection
    {
        return Destinations::latest('published_at')
            ->limit($limit)
            ->get();
    }

    /**
     * Get destinations with filters.
     */
    public function getFiltered(array $filters = []): Builder
    {
        $query = Destinations::query();

        if (! empty($filters['category_id'])) {
            $query->where('category_id', $filters['category_id']);
        }

        if (! empty($filters['tags'])) {
            $query->whereHas('tags', function (Builder $q) use ($filters) {
                $q->whereIn('tags.id', $filters['tags']);
            });
        }

        if (! empty($filters['search'])) {
            $keyword = $filters['search'];
            $query->where(function (Builder $q) use ($keyword) {
                $q->where('title', 'like', "%{$keyword}%")
                    ->orWhere('description', 'like', "%{$keyword}%");
            });
        }

        $sortBy = $filters['sort_by'] ?? 'published_at';
        $sortOrder = $filters['sort_order'] ?? 'desc';
        $query->orderBy($sortBy, $sortOrder);

        return $query;
    }
}
