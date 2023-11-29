<?php

namespace App\Http\Controllers;

use App\DataTables\VehicleMcategoryDataTable;
use App\Http\Requests\VehicleMcategoryRequest;
use App\Models\VehicleMcategory;


class VehicleMcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VehicleMcategoryDataTable $dataTable)
    {
        return $dataTable->render('vehicleMcategory.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicleMcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VehicleMcategoryRequest $request)
    {
        VehicleMcategory::create(['name'=>$request->name]);
        return redirect()->route('vehicleMcategory.index')->with('message', 'Vehicle Main Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleMcategory $vehicleMcategory)
    {
        return view('vehicleMcategory.show', compact('vehicleMcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleMcategory $vehicleMcategory)
    {
        return view('vehicleMcategory.edit', compact('vehicleMcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VehicleMcategoryRequest $request, VehicleMcategory $vehicleMcategory)
    {
        $vehicleMcategory->update(['name' => $request->name]);
        return redirect()->route('vehicleMcategory.index')->with('message', 'Vehicle Main Category update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleMcategory $vehicleMcategory)
    {
        $vehicleMcategory->delete();
        return redirect()->route('vehicleMcategory.index')
        ->with('message', 'Vehicle Main Category deleted successfully');
    }
}
