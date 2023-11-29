@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> {{ $jobCard->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">{{ $jobCard->name }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">View Job Card</div>
                    <div class="card-tools">
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-3" for="title_name">Job ID:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->job_id}}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="title_name">Vehicle Received Date:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->received_date}}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="title_name">Assueme Date Count:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->job_date_count}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">Ward Number:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->wd_no}}</span>
                        </div>
                    </div>

					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">"In" Inspect Date:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->in_inspect_date}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">Work Start Date:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->work_start_date}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">Work End Date:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->work_end_date}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">Mileage:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->mileage}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">Delivery Date:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->delivery_date}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">Repair Required:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->repair_req}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">"Out" Inspect Date:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->out_inspect_date}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">Stores Required:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->store_req}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">Voucher Serial Number:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->voucher_serial_no}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">Product Request Date:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->date_req}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="title_name">Product Received Date:</label>
                        <div class="col-sm-9">
                            <span>{{$jobCard->date_rev}}</span>
                        </div>
                    </div>

				</div>
            </div>

        </div>
    </div>
@endsection

@section('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('plugin/flowbite/flowbite.min.css') }}"/>
@stop

@section('third_party_scripts')
    <script src="{{ asset('plugin/flowbite/flowbite.js') }}"></script>
@stop
