<?php

namespace App\Http\Controllers;
use App\Models\G7;
use App\Models\RepairType;
use App\Models\NatureOfRepair;
use App\Models\JobType;
use App\DataTables\TechnicalDetailDataTable;
use App\Models\TechnicalDetail;
use Illuminate\Http\Request;
use App\Http\Requests\TechnicalDetailRequest;

class TechnicalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TechnicalDetailDataTable $DataTable)
    {
        return $DataTable->render('technicalDetail.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $g7_s = G7::all();
        $repair_types = RepairType::all();
        $nature_of_repairs = NatureOfRepair::all();
        $job_types = JobType::all();
        return view('technicalDetail.create', compact('g7_s', 'nature_of_repairs', 'repair_types', 'job_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TechnicalDetailRequest $request)
    {
        //dd('$request->repair_type');
        TechnicalDetail::create((['job_id' => $request->job_id , 'repair_type' => $request->repair_type, 'job_type' => $request->job_type, 'nature_of_repair' => $request->nature_of_repair, 'spare_part' => $request->spare_part, 'ex_item' => $request->ex_item]));
        return redirect()->route('technicalDetail.index')->with('message', 'Job Card created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(TechnicalDetail $technicalDetail)
    {
        // dd($this->job_id);
        return view('technicalDetail.show', compact('technicalDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TechnicalDetail $technicalDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TechnicalDetail $technicalDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TechnicalDetail $technicalDetail)
    {
        //
    }
}
