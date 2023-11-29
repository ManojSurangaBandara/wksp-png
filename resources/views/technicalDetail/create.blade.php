@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New Repair Type </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">Technical Details</li>
                            <li class="breadcrumb-item active">New</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Technical Details</div>
                    <div class="card-tools">
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
                    </div>
                </div>

                <form role="form" method="POST" action="{{ route('technicalDetail.store') }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">

                    <div class="form-group row">
                            <label class="col-sm-3" for="job_id">Job Number:</label>
                            <div class="col-sm-9">
                                    <select required name="job_id" id="job_id"
                                            class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected value="">Select Job Number</option>
                                        @foreach($g7_s as $g7)
                                            <option
                                                @selected($g7->id == old('g7')) value="{{$g7->job_id}}">{{$g7->job_id}}</option>
                                        @endforeach
                                    </select>
                                    @error('make')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="repair_type">Repair Type</label>
                            <div class="col-sm-9">
                                    <select required name="repair_type" id="repair_type"
                                            class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected value="">Select Repair Type</option>
                                        @foreach($repair_types as $repair_type)
                                            <option
                                                @selected($repair_type->id == old('repair_type')) value="{{$repair_type->name}}">{{$repair_type->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="repair_type">Job Type</label>
                            <div class="col-sm-9">
                                    <select required name="job_type" id="job_type"
                                            class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected value="">Select Job Type</option>
                                        @foreach($job_types as $job_type)
                                            <option
                                                @selected($repair_type->id == old('job_type')) value="{{$job_type->name}}">{{$job_type->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="nature_of_repair">Nature of the Repair</label>
                            <div class="col-sm-9">
                                    <select required name="nature_of_repair" id="nature_of_repair"
                                            class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected value="">Select Nature of the Repair</option>
                                        @foreach($nature_of_repairs as $nature_of_repair)
                                            <option
                                                @selected($nature_of_repair->id == old('nature_of_repair')) value="{{$nature_of_repair->id}}">{{$nature_of_repair->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('nature_of_repair')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="spare_part">Spare Parts Details</label>
                            <div class="col-sm-9">
                                <textarea name="spare_part" class="form-control   @error('spare_part') is-invalid @enderror" id="spare_part"
                                          placeholder="Spare Parts" rows="5"></textarea>
                                @error('spare_part')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="ex_item">Expendable Item Details </label>
                            <div class="col-sm-9">
                                <textarea name="ex_item" class="form-control   @error('ex_item') is-invalid @enderror" id="ex_item"
                                       placeholder="Spare Parts" value="{{ old('ex_item') }}" rows="5"></textarea>
                                @error('ex_item')
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
@stop
