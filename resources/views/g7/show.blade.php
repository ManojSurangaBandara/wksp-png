@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> {{ $g7->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">{{ $g7->name }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">View Workshop Indent</div>
                    <div class="card-tools">
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
                    </div>
                </div>
                <div class="card-body">
                <div class="form-group row">
                        <label class="col-sm-3" for="army_no">Job Referance No:</label>
                        <div class="col-sm-9">
                            <span>{{$g7->job_id}}</span>
                        </div>
                    </div>
                <div class="form-group row">
                        <label class="col-sm-3" for="army_no">Repair Type:</label>
                        <div class="col-sm-9">
                            <span>{{$g7->repair_type}}</span>
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-3" for="army_no">Job Type:</label>
                        <div class="col-sm-9">
                            <span>{{$g7->job_type}}</span>
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-3" for="army_no">Vehicle Number:</label>
                        <div class="col-sm-9">
                            <span>{{$g7->army_no}}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="organization">Vehicle Authority:</label>
                        <div class="col-sm-9">
                            <span>{{$g7->organization}}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="title_name">Registered Date</label>
                        <div class="col-sm-9">
                            <span>{{$g7->reg_date}}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="vehicle_value">Vehicle Value:</label>
                        <div class="col-sm-9">
                            <span>{{$g7->vehicle_value}}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3" for="live_search_result_in_charge">Vehicle Responsible Officer:</label>
                        <div class="col-sm-9">
                            <span>{{$g7->live_search_result_in_charge}}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="nature_service">Nature of Service:</label>
                        <div class="col-sm-9">
                            <span>{{$g7->nature_service}}</span>
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
