@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New Spare-Parts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">Spare-Parts</li>
                            <li class="breadcrumb-item active">New</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Spare-Parts</div>
                    <div class="card-tools">
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
                    </div>
                </div>

                <form role="form" method="POST" action="{{ route('sparePart.store') }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                    <div class="form-group row">
                            <label class="col-sm-3" for="parent_id1">Vehicle Parts Main Category:</label>
                            <div class="col-sm-9">
                                <select required name="parent_id1" id="parent_id1"
                                        class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Choose a Relevant Vehicle Parts Main Category</option>
                                    @foreach($vehicleMcategories as $mcategory)
                                        <option
                                            @selected($mcategory->id == old('parent_id1')) value="{{$mcategory->id}}">{{$mcategory->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent_id1')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="parent_id2">Vehicle Parts Sub Category:</label>
                            <div class="col-sm-9">
                                <select required name="parent_id2" id="parent_id2"
                                        class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Choose a Relevant Vehicle Parts Sub Category</option>
                                    @foreach($vehicleScategories as $scategory)
                                        <option
                                            @selected($scategory->id == old('parent_id2')) value="{{$scategory->id}}">{{$scategory->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent_id2')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="parent_id3">Vehicle Parts Third Category:</label>
                            <div class="col-sm-9">
                                <select required name="parent_id3" id="parent_id3"
                                        class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Choose a Relevant Vehicle Parts Third Category</option>
                                    @foreach($vehicleTcategories as $tcategory)
                                        <option
                                            @selected($tcategory->id == old('parent_id3')) value="{{$tcategory->id}}">{{$tcategory->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent_id3')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-3" for="parent_id4">Supplier Details:</label>
                            <div class="col-sm-9">
                                <select required name="parent_id4" id="parent_id4"
                                        class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Supplier Details</option>
                                    @foreach($supplierDetails as $sdetail)
                                        <option
                                            @selected($sdetail->id == old('parent_id4')) value="{{$sdetail->id}}">{{$sdetail->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent_id3')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="price">Price</label>
                            <div class="col-sm-9">
                                <input type="text" name="price"
                                       class="form-control   @error('price') is-invalid @enderror" id="price"
                                       placeholder="Price" value="{{ old('price') }}">
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
