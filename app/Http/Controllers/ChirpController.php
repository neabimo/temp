<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirps = Chirp::with('user')
            ->latest()
            ->take(50)  // Limit to 50 most recent chirps
            ->get();

        return view('home', ['chirps' => $chirps]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => [
                'required',
                'string',
                'max:255',
                Rule::unique('chirps')->where(function ($query) use ($user) {
                    return $query->where('user_id', $user->id);
                })
            ],
        ]);
    
        \App\Models\Chirp::create([
            'message' => $validated['message'],
            'user_id' => null,
        ]);
    
        return redirect('/bootcamp')->with('success', 'chirp posted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        // We'll add authorization in lesson 11
        return view('chirps.edit', compact('chirp'));
    }
    
    public function update(Request $request, Chirp $chirp)
    {
        // Validate
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
    
        // Update
        $chirp->update($validated);
    
        return redirect('/bootcamp')->with('success', 'Chirp updated!');
    }
    
    public function destroy(Chirp $chirp)
    {
        $chirp->delete();
    
        return redirect('/bootcamp')->with('success', 'Chirp deleted!');
    }
}
