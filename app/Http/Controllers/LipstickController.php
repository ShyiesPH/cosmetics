<?php

namespace App\Http\Controllers;

use App\Models\Lipstick;
use App\Models\LipstickCategory;
use Illuminate\Http\Request;

class LipstickController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lipsticks = Lipstick::all();
        $LipstickCategory = LipstickCategory::all();

        return view('lipsticks.index', compact('lipsticks', 'LipstickCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lipstickCategories = LipstickCategory::all();
        return view('lipsticks.create', compact('lipstickCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'lipstick_category_id' => 'required',
        ]);

        Lipstick::create($request->all());

        return redirect()->route('lipsticks.index')
            ->with('success', 'Lipstick created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lipstick $lipstick)
    {
        return view('lipsticks.show', compact('lipstick'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lipstick $lipstick)
    {
        $lipstickCategories = LipstickCategory::all();
        return view('lipsticks.edit', compact('lipstick', 'lipstickCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lipstick $lipstick)
    {
        $request->validate([
            'brand' => 'required',
            'lipstick_category_id' => 'required',
        ]);

        $lipstick->update($request->all());

        return redirect()->route('lipsticks.index')
            ->with('success', 'Lipstick updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lipstick $lipstick)
    {
        $lipstick->delete();

        return redirect()->route('lipsticks.index')
            ->with('success', 'Lipstick deleted successfully');
    }
}
