<?php

namespace App\Http\Controllers;

use App\DataTables\SparePartDataTable;
use App\Http\Requests\SparePartRequest;
use App\Models\SparePart;
use App\Models\VehicleMcategory;
use App\Models\VehicleScategory;
use App\Models\VehicleTcategory;
use App\Models\SupplierDetail;
use Illuminate\Http\Request;


class SparePartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SparePartDataTable $dataTable)
    {
        return $dataTable->render('sparePart.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $vehicleMcategories = VehicleMcategory::all();
        $vehicleScategories = VehicleScategory::all();
        $vehicleTcategories = VehicleTcategory::all();
        $supplierDetails = SupplierDetail::all();
        return view('sparePart.create', compact('vehicleMcategories', 'vehicleScategories', 'vehicleTcategories', 'supplierDetails'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->parent_id4);
        SparePart::create(['parent_id3' => $request->parent_id3, 'parent_id1' => $request->parent_id1, 'parent_id2' => $request->parent_id2, 'price' => $request->price,'parent_id4' => $request->parent_id4]);
        return redirect()->route('sparePart.index')->with('message', 'Workshop Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SparePart $sparePart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SparePart $sparePart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SparePart $sparePart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SparePart $sparePart)
    {
        //
    }
}
