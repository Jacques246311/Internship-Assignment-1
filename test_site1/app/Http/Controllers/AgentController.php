<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AgentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function addAgent(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
        ]);

        $agent = Agent::create($validatedData);

        return response()->json(['success' => true, 'agent' => $agent], 201);
    }

    public function getAgents(): JsonResponse
    {
        $agents = Agent::all(['name', 'created_at', 'age'])
            ->map(function ($agent) {
                $agent['created_at'] = Carbon::parse($agent['created_at'])->toDateString();
                $agent['age'] = (int) $agent['age']; // Cast 'age' to integer
                return $agent;
            });

        return response()->json($agents);
    }
    public function editAgent(Request $request, $id): JsonResponse
    {
        $validatedData = $request->validate([
            'age' => 'required|integer',
        ]);

        $agent = Agent::find($id);

        if (!$agent) {
            return response()->json(['error' => 'Agent not found'], 404);
        }

        $agent->update(['age' => $validatedData['age']]);

        return response()->json(['success' => true, 'agent' => $agent]);
    }
    public function deleteAgent($id): JsonResponse
    {
        $agent = Agent::find($id);

        if (!$agent) {
            return response()->json(['error' => 'Agent not found'], 404);
        }

        $agent->delete();

        return response()->json(['success' => true]);
    }

}


