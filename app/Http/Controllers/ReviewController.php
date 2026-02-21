<?php

namespace App\Http\Controllers;

use App\Destinations;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Destinations $destination)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        $existingReview = Review::where('user_id', auth()->id())
            ->where('destination_id', $destination->id)
            ->first();

        if ($existingReview) {
            $existingReview->update($validated);
            $message = 'Review updated successfully';
        } else {
            Review::create([
                'user_id' => auth()->id(),
                'destination_id' => $destination->id,
                'rating' => $validated['rating'],
                'comment' => $validated['comment'] ?? null,
            ]);
            $message = 'Review submitted successfully';
        }

        session()->flash('success', $message);

        return redirect()->back();
    }

    public function destroy(Review $review)
    {
        if ($review->user_id !== auth()->id() && ! auth()->user()->isAdmin()) {
            abort(403);
        }

        $review->delete();

        session()->flash('success', 'Review deleted successfully');

        return redirect()->back();
    }
}
