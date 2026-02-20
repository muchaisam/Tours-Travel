<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\JsonResponse;

class CategoryApiController extends Controller
{
    /**
     * List all categories.
     */
    public function index(): JsonResponse
    {
        $categories = Category::withCount('destinations')->get();

        return response()->json([
            'data' => CategoryResource::collection($categories),
        ]);
    }

    /**
     * Get a single category with its destinations.
     */
    public function show(Category $category): JsonResponse
    {
        $category->loadCount('destinations');

        return response()->json([
            'data' => new CategoryResource($category),
        ]);
    }
}
