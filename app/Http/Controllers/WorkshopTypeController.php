<?php

namespace App\Http\Controllers;

use App\DataTables\WorkshopTypeDataTable;
use App\Http\Requests\WorkshopTypeRequest;
use App\Models\WorkshopType;
use Illuminate\Http\Request;

class WorkshopTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(WorkshopTypeDataTable $dataTable)
    {
        return $dataTable->render('workshopType.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('workshopType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkshopTypeRequest $request)
    {
        WorkshopType::create(['name' => $request->name]);
        return redirect()->route('workshopType.index')->with('message', 'Workshop Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkshopType $workshopType)
    {
        return view('workshopType.show', compact('workshopType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkshopType $workshopType)
    {
        return view('workshopType.edit', compact('workshopType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkshopTypeRequest $request, WorkshopType $workshopType)
    {
        $workshopType->update(['name' => $request->name]);
        return redirect()->route('workshopType.index')->with('message', 'Workshop Type update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkshopType $workshopType)
    {
        $workshopType->delete();
        return redirect()->route('workshopType.index')
            ->with('message', 'Workshop Type deleted successfully');
    }
}
