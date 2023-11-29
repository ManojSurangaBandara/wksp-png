@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> {{ $storeDemand->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">{{ $storeDemand->name }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">View Store and Demand</div>
                    <div class="card-tools">
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-3" for="vehicle_no">Vehicle Number:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->vehicle_no}}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="section_no">Section Number:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->section_no}}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="control_no">Control Number:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->control_no}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="receipt_no">Receipt Number:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->receipt_no}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="receipt_date">Receipt Date:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->receipt_date}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="group_workshop">Vehicle Group Workshop:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->group_workshop}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="depot_workshop">Vehicle Depot Number:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->depot_workshop}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="order_no">Order Number:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->order_no}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="from_workshop">From Workshop or W/S Section:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->from_workshop}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="passed_to">Vehicle Passed to:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->passed_to}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="passed_date">Vehicle Passed Date:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->passed_date}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="part_no">Part Number:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->part_no}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="vehicle_desc">Vehicle Description:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->vehicle_desc}}</span>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-3" for="Quantity">Quantity:</label>
                        <div class="col-sm-9">
                            <span>{{$storeDemand->quantity}}</span>
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
