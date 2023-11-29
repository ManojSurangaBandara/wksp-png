<?php

namespace App\Http\Controllers;

use App\DataTables\VehicleTcategoryDataTable;
use App\Http\Requests\VehicleTcategoryRequest;
use App\Models\VehicleTcategory;
use App\Models\VehicleMcategory;
use App\Models\VehicleScategory;
use Illuminate\Http\Request;

class VehicleTcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VehicleTcategoryDataTable $dataTable)
    {
        return $dataTable->render('vehicleTcategory.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

         $vehicleMcategories = VehicleMcategory::all();
         $vehicleScategories = VehicleScategory::all();
         return view('vehicleTcategory.create', compact('vehicleMcategories', 'vehicleScategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->parent_id2);
        VehicleTcategory::create(['name' => $request->name, 'parent_id1' => $request->parent_id1, 'parent_id2' => $request->parent_id2]);
        return redirect()->route('vehicleTcategory.index')->with('message', 'Vehicle Model created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleTcategory $vehicleTcategory)
    {
        return view('vehicleTcategory.show', compact('vehicleTcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleTcategory $vehicleTcategory)
    {
        $vehicleMcategories = VehicleMcategory::all()();
        $vehicleScategories = VehicleScategory::all()();
        return view('vehicleTcategory.edit', compact('vehicleTcategory', 'vehicleMcategories', 'vehicleScategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VehicleTcategoryRequest $request, VehicleTcategory $vehicleTcategory)
    {
        $vehicleTcategory->update(['name' => $request->name , 'parent_id1' => $request->parent_id1]);
        return redirect()->route('vehicleTcategory.index')->with('message', 'Vehicle Model update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleTcategory $vehicleTcategory)
    {
        $vehicleTcategory->delete();
        return redirect()->route('vehicleTcategory.index')
            ->with('message', 'Vehicle Model deleted successfully');
    }
}
