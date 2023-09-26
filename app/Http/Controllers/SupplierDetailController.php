<?php

namespace App\Http\Controllers;

use App\DataTables\SupplierDetailDataTable;
use App\Http\Requests\SupplierDetailRequest;
use App\Models\SupplierDetail;
use Illuminate\Http\Request;

class SupplierDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SupplierDetailDataTable $dataTable)
    {
        return $dataTable->render('supplierDetail.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplierDetail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplierDetailRequest $request)
    {
        SupplierDetail::create(['name' => $request->name,'address' => $request->address,'contact_detail' => $request->contact_detail]);
        return redirect()->route('supplierDetail.index')->with('message', 'Supplier Detail created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SupplierDetail $supplierDetail)
    {
        return view('supplierDetail.show', compact('supplierDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupplierDetail $supplierDetail)
    {
        return view('supplierDetail.edit', compact('supplierDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplierDetailRequest $request, SupplierDetail $supplierDetail)
    {
        $supplierDetail->update(['name' => $request->name,'address' => $request->address,'contact_detail' => $request->contact_detail]);
        return redirect()->route('supplierDetail.index')->with('message', 'Supplier Detail update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupplierDetail $supplierDetail)
    {
        $supplierDetail->delete();
        return redirect()->route('supplierDetail.index')
            ->with('message', 'Supplier Detail deleted successfully');
    }
}
