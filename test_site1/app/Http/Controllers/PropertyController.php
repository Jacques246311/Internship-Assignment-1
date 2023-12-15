<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */


    public function addProperty(Request $request): JsonResponse
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            // Add more fields as needed
        ]);

        // Create a new property
        $property = Property::create($validatedData);

        return response()->json(['success' => true, 'property' => $property], 201);
    }


}
