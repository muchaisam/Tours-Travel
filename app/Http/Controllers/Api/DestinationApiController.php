<?php

namespace App\Http\Controllers\Api;

use App\Destinations;
use App\Http\Controllers\Controller;
use App\Http\Resources\DestinationCollection;
use App\Http\Resources\DestinationResource;
use App\Services\SearchService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DestinationApiController extends Controller
{
    protected SearchService $searchService;

    public function __construct(SearchService $searchService)
    {
        $this->searchService = $searchService;
    }

    /**
     * List all destinations with filtering and pagination.
     */
    public function index(Request $request): DestinationCollection
    {
        $query = $this->searchService->getFiltered([
            'category_id' => $request->input('category'),
            'tags' => $request->input('tags'),
            'search' => $request->input('search'),
            'sort_by' => $request->input('sort_by', 'published_at'),
            'sort_order' => $request->input('sort_order', 'desc'),
        ]);

        $destinations = $query->with(['category', 'tags'])
            ->published()
            ->paginate($request->input('per_page', 10));

        return new DestinationCollection($destinations);
    }

    /**
     * Get a single destination with its details.
     */
    public function show(Destinations $destination): DestinationResource
    {
        $destination->load(['category', 'tags', 'reviews.user']);

        return new DestinationResource($destination);
    }

    /**
     * Get featured destinations.
     */
    public function featured(Request $request): JsonResponse
    {
        $limit = $request->input('limit', 6);
        $destinations = Destinations::published()
            ->recent($limit)
            ->with(['category', 'tags'])
            ->get();

        return response()->json([
            'data' => DestinationResource::collection($destinations),
        ]);
    }

    /**
     * Search destinations.
     */
    public function search(Request $request): JsonResponse
    {
        $request->validate([
            'q' => 'required|string|min:2',
        ]);

        $destinations = $this->searchService->searchDestinations(
            $request->input('q'),
            $request->input('limit', 10)
        );

        return response()->json([
            'data' => DestinationResource::collection($destinations),
            'query' => $request->input('q'),
        ]);
    }
}
