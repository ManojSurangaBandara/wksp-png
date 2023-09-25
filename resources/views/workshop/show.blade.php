@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> {{ $workshop->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">{{ $workshop->name }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">View Workshop</div>
                    <div class="card-tools">
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-3" for="title_name">Name</label>
                        <div class="col-sm-9">
                            <span>{{$workshop->name}}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3" for="title_name">Location</label>
                        <div class="col-sm-9">
                            <span>{{$workshop->location}}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3" for="title_name">Workshop type</label>
                        <div class="col-sm-9">
                            <span>{{$workshop->type->name}}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3" for="title_name">Name</label>
                        <div class="col-sm-9">
                            <span>{{$workshop->name}}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3" for="title_name">SLEME Battalion</label>
                        <div class="col-sm-9">
                            <span>{{$workshop->battalion->name}}</span>
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
