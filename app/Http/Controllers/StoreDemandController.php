<?php

namespace App\Http\Controllers;


use App\Models\StoreDemand;
use App\Models\G7;
use Illuminate\Http\Request;
use App\DataTables\StoreDemandDataTable;


class StoreDemandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StoreDemandDataTable $DataTable)
    {
        return $DataTable->render('storeDemand.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $g7_s = G7::all();
        return view('storeDemand.create', compact('g7_s'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        StoreDemand::create(['army_no' => $request->army_no, 'section_no' => $request->section_no, 'control_no' => $request->control_no,  'receipt_no' => $request->receipt_no, 'receipt_date' => $request->receipt_date, 'group_workshop' => $request->group_workshop, 'depot_workshop' => $request->depot_workshop, 'order_no' => $request->order_no, 'from_workshop' => $request->from_workshop,  'passed_to' => $request->passed_to,  'passed_date' => $request->passed_date,  'part_no' => $request->part_no,  'vote_no' => $request->vote_no,'vehicle_desc' => $request->vehicle_desc,  'quantity' => $request->quantity]);
        return redirect()->route('storeDemand.index')->with('message', 'Store and Demand created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(StoreDemand $storeDemand)
    {
        return view('storeDemand.show', compact('storeDemand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StoreDemand $storeDemand)
    {
        $g7_s = G7::all();
        return view('storeDemand.edit', compact('storeDemand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StoreDemand $storeDemand)
    {
        $storeDemand->update(['army_no' => $request->army_no, 'section_no' => $request->section_no, 'control_no' => $request->control_no,  'receipt_no' => $request->receipt_no, 'receipt_date' => $request->receipt_date, 'group_workshop' => $request->group_workshop, 'depot_workshop' => $request->depot_workshop, 'order_no' => $request->order_no, 'from_workshop' => $request->from_workshop,  'passed_to' => $request->passed_to,  'passed_date' => $request->passed_date,  'part_no' => $request->part_no,  'vote_no' => $request->vote_no,'vehicle_desc' => $request->vehicle_desc,  'quantity' => $request->quantity]);
        return redirect()->route('storeDemand.index')->with('message', 'Job Card updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StoreDemand $storeDemand)
    {
        $storeDemand->delete();
        return redirect()->route('storeDemand.index')
            ->with('message', 'Store Demand deleted successfully');
    }
}
