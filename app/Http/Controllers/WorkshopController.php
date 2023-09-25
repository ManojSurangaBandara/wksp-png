<?php

namespace App\Http\Controllers;

use App\DataTables\WorkshopDataTable;
use App\Http\Requests\WorkshopRequest;
use App\Models\SlemeBattalion;
use App\Models\Workshop;
use App\Models\WorkshopType;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(WorkshopDataTable $dataTable)
    {

        return $dataTable->render('workshop.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $workshopTypes = WorkshopType::all();
        $slemeBattalions = SlemeBattalion::all();
        return view('workshop.create', compact('workshopTypes', 'slemeBattalions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkshopRequest $request)
    {
        Workshop::create(['name' => $request->name, 'location' => $request->location, 'type_id' => $request->type_id, 'battalion_id' => $request->battalion_id]);
        return redirect()->route('workshop.index')->with('message', 'Workshop Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Workshop $workshop)
    {
        return view('workshop.show', compact('workshop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workshop $workshop)
    {
        $workshopTypes = WorkshopType::all();
        $slemeBattalions = SlemeBattalion::all();
        return view('workshop.edit', compact('workshop', 'workshopTypes', 'slemeBattalions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkshopRequest $request, Workshop $workshop)
    {
        $workshop->update(['name' => $request->name, 'location' => $request->location, 'type_id' => $request->type_id, 'battalion_id' => $request->battalion_id]);
        return redirect()->route('workshop.index')->with('message', 'Workshop update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workshop $workshop)
    {
        $workshop->delete();
        return redirect()->route('workshop.index')
            ->with('message', 'Workshop deleted successfully');
    }
}
