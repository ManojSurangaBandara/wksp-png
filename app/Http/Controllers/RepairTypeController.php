<?php

namespace App\Http\Controllers;

use App\DataTables\RepairTypeDataTable;
use App\Http\Requests\RepairTypeRequest;
use App\Models\RepairType;
use Illuminate\Http\Request;

class RepairTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RepairTypeDataTable $dataTable)
    {
        return $dataTable->render('repairType.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('repairType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RepairTypeRequest $request)
    {
        RepairType::create(['name' => $request->name]);
        return redirect()->route('repairType.index')->with('message', 'Repair Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(RepairType $repairType)
    {
        return view('repairType.show', compact('repairType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RepairType $repairType)
    {
        return view('repairType.edit', compact('repairType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RepairTypeRequest $request, RepairType $repairType)
    {
        $repairType->update(['name' => $request->name]);
        return redirect()->route('repairType.index')->with('message', 'Repair Type update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RepairType $repairType)
    {
        $repairType->delete();
        return redirect()->route('repairType.index')
            ->with('message', 'Repair Type deleted successfully');
    }
}
