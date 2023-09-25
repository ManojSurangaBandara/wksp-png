<?php

namespace App\Http\Controllers;

use App\DataTables\SlemeBattalionDataTable;
use App\Http\Requests\SlemeBattalionRequest;
use App\Models\SlemeBattalion;
use Illuminate\Http\Request;

class SlemeBattalionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SlemeBattalionDataTable $dataTable)
    {
        return $dataTable->render('slemeBattalion.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slemeBattalion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SlemeBattalionRequest $request)
    {
        SlemeBattalion::create(['name' => $request->name]);
        return redirect()->route('slemeBattalion.index')->with('message', 'SLEME Battalion created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SlemeBattalion $slemeBattalion)
    {
        return view('slemeBattalion.show', compact('slemeBattalion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SlemeBattalion $slemeBattalion)
    {
        return view('slemeBattalion.edit', compact('slemeBattalion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SlemeBattalionRequest $request, SlemeBattalion $slemeBattalion)
    {
        $slemeBattalion->update(['name' => $request->name]);
        return redirect()->route('slemeBattalion.index')->with('message', 'SLEME Battalion update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SlemeBattalion $slemeBattalion)
    {
        $slemeBattalion->delete();
        return redirect()->route('slemeBattalion.index')
            ->with('message', 'SLEME Battalion deleted successfully');
    }
}
