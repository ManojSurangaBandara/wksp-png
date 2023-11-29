<?php

namespace App\Http\Controllers;

use App\DataTables\VehicleScategoryDataTable;
use App\Http\Requests\VehicleScategoryRequest;
use App\Models\VehicleScategory;
use App\Models\VehicleMcategory;
use Illuminate\Http\Request;

class VehicleScategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VehicleScategoryDataTable $dataTable)
    {
        return $dataTable->render('vehicleScategory.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

         $vehicleMcategories = VehicleMcategory::all();
         return view('vehicleScategory.create', compact('vehicleMcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        VehicleScategory::create(['name' => $request->name, 'parent_id1' => $request->parent_id1]);
        return redirect()->route('vehicleScategory.index')->with('message', 'Vehicle Model created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleScategory $vehicleScategory)
    {
        return view('vehicleScategory.show', compact('vehicleScategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleScategory $vehicleScategory)
    {
        $vehicleMcategories = VehicleMcategory::all()();
        return view('vehicleScategory.edit', compact('vehicleScategory', 'vehicleMcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VehicleScategoryRequest $request, VehicleScategory $vehicleScategory)
    {
        $vehicleScategory->update(['name' => $request->name , 'parent_id1' => $request->parent_id1]);
        return redirect()->route('vehicleScategory.index')->with('message', 'Vehicle Model update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleScategory $vehicleScategory)
    {
        $vehicleScategory->delete();
        return redirect()->route('vehicleScategory.index')
            ->with('message', 'Vehicle Model deleted successfully');
    }
}
