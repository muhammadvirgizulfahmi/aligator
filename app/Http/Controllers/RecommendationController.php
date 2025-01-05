<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recommendation;

class RecommendationController extends Controller
{
    public function store(Request $request)
{
    // Validate the incoming request
    $validated = $request->validate([
        'id_anak' => 'required|exists:anak,id', // Ensure the id_anak exists in the Anak table
        'recommendation' => 'required|string',
    ]);

    // Create the recommendation
    Recommendation::create($validated);

    return redirect()->back();
}

}
