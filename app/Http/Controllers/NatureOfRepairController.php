<?php

namespace App\Http\Controllers;

use App\DataTables\NatureOfRepairDataTable;
use App\Http\Requests\NatureOfRepairRequest;
use App\Models\NatureOfRepair;
use Illuminate\Http\Request;

class NatureOfRepairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(NatureOfRepairDataTable $dataTable)
    {
        return $dataTable->render('natureOfRepair.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('natureOfRepair.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NatureOfRepairRequest $request)
    {
        NatureOfRepair::create(['name' => $request->name]);
        return redirect()->route('natureOfRepair.index')->with('message', 'Nature Of Repair created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NatureOfRepair $natureOfRepair)
    {
        return view('natureOfRepair.show', compact('natureOfRepair'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NatureOfRepair $natureOfRepair)
    {
        return view('natureOfRepair.edit', compact('natureOfRepair'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NatureOfRepairRequest $request, NatureOfRepair $natureOfRepair)
    {
        $natureOfRepair->update(['name' => $request->name]);
        return redirect()->route('natureOfRepair.index')->with('message', 'Nature Of Repair update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NatureOfRepair $natureOfRepair)
    {
        $natureOfRepair->delete();
        return redirect()->route('natureOfRepair.index')
            ->with('message', 'Nature Of Repair deleted successfully');
    }
}
