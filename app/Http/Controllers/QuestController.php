<?php

namespace App\Http\Controllers;

use App\Models\Quest;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quests = Quest::all();
        return view('quests.index', compact('quests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable',
            'status'      => 'required|in:pending,in_progress,completed,failed',
            'priority'    => 'required|in:low,medium,high,urgent',
        ]);

        Quest::create($validated);

        return redirect()->route('quests.index')->with('success', 'Quest created successfully');
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
    public function edit(Quest $quest)
    {
        return view('quests.edit', compact('quest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quest $quest)
    {
        $validated = $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable',
            'status'      => 'required|in:pending,in_progress,completed,failed',
            'priority'    => 'required|in:low,medium,high,urgent',
        ]);

        $quest->update($validated);

        return redirect()->route('quests.index')->with('success', 'Quest updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
