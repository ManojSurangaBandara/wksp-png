<?php

namespace App\Http\Controllers;

use App\Models\JobCard;
use App\Models\G7;
use App\Models\VehicleTcategory;
use App\Models\NatureOfRepair;
use App\Models\Spareparts;
use Illuminate\Http\Request;
use App\DataTables\JobCardDataTable;

class JobCardController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(JobCardDataTable $DataTable)
    {


        return $DataTable

        ->render('jobCard.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $g7_s = G7::all();
        $vehicle_tcategories = VehicleTcategory::all();
        $nature_of_repairs = NatureOfRepair::all();
        return view('jobCard.create', compact('g7_s', 'nature_of_repairs', 'vehicle_tcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        //JobCard::create($request->all());
        JobCard::create(['job_id' => $request->job_id,
            'received_date' => $request->received_date,
            'nature_of_repair' => $request->nature_of_repair,
            'repairs_req' => $request->repairs_req,
            'job_date_count' => $request->job_date_count,
            'wd_no' => $request->wd_no,
            'in_inspect_date' => $request->in_inspect_date,
            'work_start_date' => $request->work_start_date,
            'work_end_date' => $request->work_end_date,
            'mileage' => $request->mileage,
            'delivery_date' => $request->delivery_date,
            'repair_req' => $request->repair_req,
            'out_inspect_date' => $request->out_inspect_date,
            'store_req' => $request->store_req,
            'voucher_serial_no' => $request->voucher_serial_no,
            'date_req' => $request->date_req,
            'date_rev' => $request->date_rev]);



        $jobId = JobCard::select('id')
        ->orderBy('id','desc')
            ->limit(1)
            ->value('id');

//        dd($jobId[0]);

//foreach( $codes as $index => $code ) {
//    echo '<option value="' . $code . '">' . $names[$index] . '</option>';
// }


        foreach($request->name as $index => $name)
        {
            Spareparts::create([
                'name' => $name,
                'qty' => $request->qty[$index],
                'job_id' =>$jobId,
                //'price' => $request->price[$index],
            ]);
        }



       // dd('done');

        return redirect()->route('jobCard.index')->with('message', 'Job Card reated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobCard $jobCard)
    {

        return view('jobCard.show', [
            'jobCard' => $jobCard,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobCard $jobCard)
    {
        $g7_s = G7::all();
        $vehicle_tcategories = VehicleTcategory::all();
        return view('jobCard.edit', compact('jobCard', 'vehicle_tcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobCard $jobCard)
    {
        $jobCard->update(['job_id' => $request->job_id, 'received_date' => $request->received_date, 'job_date_count' => $request->job_date_count, 'wd_no' => $request->wd_no, 'in_inspect_date' => $request->in_inspect_date, 'work_start_date' => $request->work_start_date, 'work_end_date' => $request->work_end_date, 'mileage' => $request->mileage, 'delivery_date' => $request->delivery_date, 'repair_req' => $request->repair_req, 'out_inspect_date' => $request->out_inspect_date, 'store_req' => $request->store_req, 'voucher_serial_no' => $request->voucher_serial_no, 'date_req' => $request->date_req, 'date_rev' => $request->date_rev]);
        return redirect()->route('jobCard.index')->with('message', 'Job Card Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobCard $jobCard)
    {
        $jobCard->delete();
        return redirect()->route('jobCard.index')
            ->with('message', 'Job Card deleted successfully');
    }
}
