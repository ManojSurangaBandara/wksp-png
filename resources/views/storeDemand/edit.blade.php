@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Job Type </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">Demand and Expence</li>
                            <li class="breadcrumb-item active">edit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Demand and Expence</div>
                    <div class="card-tools">
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
                    </div>
                </div>


                <form role="form" method="POST" action="{{ route('storeDemand.update',$storeDemand->id) }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                    <div class="form-group row">
                            <label class="col-sm-3" for="vehicle_no">Vehicle Number</label>
                            <div class="col-sm-9">
                                <input type="text" name="vehicle_no"
                                       class="form-control   @error('vehicle_no') is-invalid @enderror" id="vehicle_no"
                                       placeholder="Vehicle Number" value="{{ $storeDemand->vehicle_no }}">
                                @error('vehicle_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="section_no">Section Number</label>
                            <div class="col-sm-9">
                                <input type="text" name="section_no"
                                       class="form-control   @error('section_no') is-invalid @enderror" id="section_no"
                                       placeholder="Section Number" value="{{ $storeDemand->section_no }}">
                                @error('section_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="control_no">Control Number</label>
                            <div class="col-sm-9">
                                <input type="text" name="control_no"
                                       class="form-control   @error('control_no') is-invalid @enderror" id="control_no"
                                       placeholder="Control Number" value="{{ $storeDemand->control_no }}">
                                @error('control_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="receipt_no">Receipt Number</label>
                            <div class="col-sm-9">
                                <input type="text" name="receipt_no"
                                       class="form-control   @error('receipt_no') is-invalid @enderror" id="receipt_no"
                                       placeholder="Receipt Number" value="{{ $storeDemand->receipt_no }}">
                                @error('receipt_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="receipt_date">Receipt Date</label>
                            <div class="col-sm-9">
                               <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    </div>
                                    <input required datepicker datepicker-format="yyyy/mm/dd" type="text" id="receipt_date" name="receipt_date" value="{{ $storeDemand->receipt_date }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Receipt Date">
                                </div>
                                @error('receipt_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="group_workshop">Vehicle Group Workshop</label>
                            <div class="col-sm-9">
                                <input type="text" name="group_workshop"
                                       class="form-control   @error('group_workshop') is-invalid @enderror" id="group_workshop"
                                       placeholder="Vehicle Group Workshop" value="{{ $storeDemand->group_workshop }}">
                                @error('group_workshop')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="depot_workshop">Vehicle Depot Number</label>
                            <div class="col-sm-9">
                                <input type="text" name="depot_workshop"
                                       class="form-control   @error('depot_workshop') is-invalid @enderror" id="depot_workshop"
                                       placeholder="Vehicle Depot Number" value="{{ $storeDemand->depot_workshop }}">
                                @error('depot_workshop')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="order_no">Order Number</label>
                            <div class="col-sm-9">
                                <input type="text" name="order_no"
                                       class="form-control   @error('order_no') is-invalid @enderror" id="order_no"
                                       placeholder="Order Number" value="{{ $storeDemand->order_no }}">
                                @error('order_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="from_workshop">From Workshop or W/S Section</label>
                            <div class="col-sm-9">
                                <input type="text" name="from_workshop"
                                       class="form-control   @error('from_workshop') is-invalid @enderror" id="from_workshop"
                                       placeholder="From Workshop or W/S Section" value="{{ $storeDemand->from_workshop }}">
                                @error('from_workshop')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="passed_to">Vehicle Passed to</label>
                            <div class="col-sm-9">
                                <input type="text" name="passed_to"
                                       class="form-control   @error('passed_to') is-invalid @enderror" id="passed_to"
                                       placeholder="Vehicle Passed to" value="{{ $storeDemand->passed_to }}">
                                @error('passed_to')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="passed_date">Vehicle Passed Date</label>
                            <div class="col-sm-9">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input required datepicker datepicker-format="yyyy/mm/dd" type="text" id="passed_date" name="passed_date" value="{{ $storeDemand->passed_date }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Vehicle Passed Date">
                                </div>
                                @error('passed_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="part_no">Part Number</label>
                            <div class="col-sm-9">
                                <input type="text" name="part_no"
                                       class="form-control   @error('part_no') is-invalid @enderror" id="part_no"
                                       placeholder="Part Number" value="{{ $storeDemand->part_no }}">
                                @error('part_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="vehicle_desc">Vehicle Description</label>
                            <div class="col-sm-9">
                                <input type="text" name="vehicle_desc"
                                       class="form-control   @error('vehicle_desc') is-invalid @enderror" id="vehicle_desc"
                                       placeholder="Vehicle Description" value="{{ $storeDemand->vehicle_desc }}">
                                @error('vehicle_desc')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="quantity">Quantity</label>
                            <div class="col-sm-9">
                                <input type="text" name="quantity"
                                       class="form-control   @error('quantity') is-invalid @enderror" id="quantity"
                                       placeholder="Quantity" value="{{ $storeDemand->quantity }}">
                                @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit"
                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                            Submit
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('plugin/flowbite/flowbite.min.css') }}"/>
@stop

@section('third_party_scripts')
    <script src="{{ asset('plugin/flowbite/flowbite.js') }}"></script>
    <script src="{{ asset('plugin/flowbite/datepicker.js') }}"></script>
    <script src="{{ asset('plugin/jquery/jquery.js') }}"></script>
@stop
