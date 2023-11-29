@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New Workshop Indent </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">Workshop Indent</li>
                            <li class="breadcrumb-item active">New</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="card-header">
            <div class="card-title">Add Workshop Indent</div>
            <div class="card-tools">
                <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
            </div>
        </div>
    </div>
    <form role="form" method="POST" action="{{ route('g7.store') }}"
          enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="card">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="input-group">
                            <input type="text"
                                   class="form-control form-control-lg border-top-0 border-right-0 border-left-0"
                                   name="vehicle_no" placeholder="Enter Army Vehicle Number" id="vehicle_no">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-lg btn-default" id='search'>
                                    <i class="fa fa-search"></i>
                                </button>
                                @error('vehicle_no')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <img src="{{ asset('/images/loading.gif') }}" id="loading-indicator"
                                     style="display: none"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="make">Vehicle Makes:</label>
                                <input disabled readonly type="text" name="make"
                                       class="border-top-0 border-right-0 border-left-0" id="make" placeholder="Makes">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="made">Vehicle Made:</label>
                                <input disabled readonly type="text" name="made"
                                       class="border-top-0 border-right-0 border-left-0" id="made" placeholder="Made">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="engine_no">Engine Number:</label>
                                <input disabled readonly type="text" name="engine_no"
                                       class="border-top-0 border-right-0 border-left-0" id="engine_no"
                                       placeholder="Engine Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="chassis_no">Chassis Number:</label>
                                <input disabled readonly type="text" name="chassis_no"
                                       class="border-top-0 border-right-0 border-left-0" id="chassis_no"
                                       placeholder="Chassis Number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="civil_no">Civil Number:</label>
                                <input disabled readonly type="text" name="civil_no"
                                       class="border-top-0 border-right-0 border-left-0" id="civil_no"
                                       placeholder="Civil Number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="t5_location">T5 Location:</label>
                                <input disabled readonly type="text" name="t5_location"
                                       class="border-top-0 border-right-0 border-left-0" id="t5_location"
                                       placeholder="T5 Location">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="part_x_no">Part X Number:</label>
                                <input disabled readonly type="text" name="part_x_no"
                                       class="border-top-0 border-right-0 border-left-0" id="part_x_no"
                                       placeholder="Part X Number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="part_x_location">Part X Location:</label>
                                <input disabled readonly type="text" name="part_x_location"
                                       class="border-top-0 border-right-0 border-left-0" id="part_x_location"
                                       placeholder="Part X Location">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="part_x_date">Part X Date:</label>
                                <input disabled readonly type="text" name="part_x_date"
                                       class="border-top-0 border-right-0 border-left-0" id="part_x_date"
                                       placeholder="Part X Date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="load_capacity">Load Capacity:</label>
                                <input disabled readonly type="text" name="load_capacity"
                                       class="border-top-0 border-right-0 border-left-0" id="load_capacity"
                                       placeholder="Load Capacity">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="gross_weight">Gross Weight:</label>
                                <input disabled readonly type="text" name="gross_weight"
                                       class="border-top-0 border-right-0 border-left-0" id="gross_weight"
                                       placeholder="Gross Weight">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="tare_weight">Tare Weight:</label>
                                <input disabled readonly type="text" name="tare_weight"
                                       class="border-top-0 border-right-0 border-left-0" id="tare_weight"
                                       placeholder="Tare Weight">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="seating_capacity">Seating Capacity:</label>
                                <input disabled readonly type="text" name="seating_capacity"
                                       class="border-top-0 border-right-0 border-left-0" id="seating_capacity"
                                       placeholder="Seating Capacity">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class='form-group'>
                                <label class="text-success" for="vehicle_color">Vehicle Color:</label>
                                <input disabled readonly type="text" name="vehicle_color"
                                       class="border-top-0 border-right-0 border-left-0" id="vehicle_color"
                                       placeholder="Vehicle Color">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-1" for="army_no">Vehicle Number:</label>
                <div class="col-sm-2">
                    <input type="text" name="army_no" class="form-control   @error('army_no') is-invalid @enderror"
                           id="army_no" placeholder="Vehicle Number" value="{{ old('army_no') }}">
                    @error('army_no')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <label class="col-sm-1" for="vehicle_value">Value of the Vehicle:</label>
                <div class="col-sm-2">
                    <input type="text" name="vehicle_value"
                           class="form-control   @error('vehicle_value') is-invalid @enderror" id="vehicle_value"
                           placeholder="Rs." value="{{ old('vehicle_value') }}">
                    @error('vehicle_value')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                    @enderror
                </div>
                <label class="col-sm-1" for="t_repair_cost">Total Repair Cost:</label>
                <div class="col-sm-2">
                    <input type="text" name="t_repair_cost"
                           class="form-control   @error('t_repair_cost') is-invalid @enderror" id="t_repair_cost"
                           placeholder="Rs." value="{{ old('t_repair_cost') }}">
                    @error('t_repair_cost')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                    @enderror
                </div>
                <label class="col-sm-1" for="location">User Location</label>
                <div class="col-sm-2">
                @foreach($userWorkshops as $user)
                    <input type="text" name="location"
                           class="form-control   @error('location') is-invalid @enderror" id="location"
                            value="{{$user->name}}">
                           @endforeach
                    @error('t_repair_cost')
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
                            <label class="col-sm-3" for="job_type">Job Type</label>
                            <div class="col-sm-9">
                                    <select required name="job_type" id="job_type"
                                            class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected value="">Select Workshop</option>
                                        @foreach($job_types as $job_type)
                                            <option
                                                @selected($job_type->id == old('job_type')) value="{{$job_type->name}}">{{$job_type->name}}</option>
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
                            <label class="col-sm-3" for="organization">Vehicle Authority:</label>
                            <div class="col-sm-9">
                                <div class="form-group mb-3">
                                    <input type="hidden" id="org_text" name="org_text"
                                        value="{{isset($selectedMapData[0]->organization)?$selectedMapData[0]->organization:''}}">
                                    <div class="dropdown">
                                        <select id="organization" name="organization"
                                        class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @if(isset($selectedMapData))
                                                <option
                                                    value="{{$selectedMapData[0]->organization}}">{{$selectedMapData[0]->organization}}</option>
                                            @else
                                                <option value="">Select Organization</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                @error('organization')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
            <div class="form-group row">
                <label class="col-sm-3" for="reg_date">Registered Date:</label>
                <div class="col-sm-9">
                    <div class="relative">
                        <div
                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true"
                                 class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                 fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input required datepicker datepicker-format="yyyy/mm/dd" type="text"
                               id="reg_date" name="reg_date"
                               value="{{ old('reg_date') }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Select Registered Date">
                    </div>
                    @error('reg_date')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
        
		<div class="form-group row">
			<div class="col-md-3">
				<label for="incharge" class="form-label">Vehicle Responsible Officer:</label>
			</div>
			{{--live search--}}
                <div class="col-md-3">
                    <input type="text" id="live_search_in_charge" class="form-control">
                </div>
                <div class="col-sm-6">
                    <input type="text" id="live_search_result_in_charge" name="live_search_result_in_charge" class="form-control">
                    <input type="hidden" id="live_search_result_in_charge_e_no" class="form-control">
                </div>            
            </div>
        
            <div class="form-group row">
                            <label class="col-sm-3" for="nature_service">Nature of Service:</label>
                            <div class="col-sm-9">
                                <textarea name="nature_service" class="form-control   @error('nature_service') is-invalid @enderror" id="nature_service"
                                       placeholder="Nature of Service" value="{{ old('nature_service') }}" rows="5"></textarea>
                                @error('nature_service')
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

    <style>
        #loading-indicator {
            position: absolute;
            top: -50px;
        }


    </style>

@stop

@section('third_party_scripts')

    <script src="{{ asset('plugin/jquery/jquery.js') }}"></script>
    <script src="{{ asset('plugin/flowbite/flowbite.js') }}"></script>
    <script src="{{ asset('plugin/flowbite/datepicker.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script>
            $(document).ready(function () {
                //VEHI NO
                $('#search').click(function () {
                    var vehicle_no = $('#vehicle_no').val();
                    $('#loading-indicator').show();
                    $.ajax({

                        url: '{{ route('ajax.getVehiclebyId') }}',
                        type: 'get',
                        dataType: 'json',
                        data: {
                            'search': vehicle_no,
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            $('#loading-indicator').hide();
                            alert('Suscess')
                            console.log(data)
                            //return('dd');
                            //alert('succes')
                            $('#army_no').val(data.data[0].army_no);
                            $('#make').val(data.data[0].vehicle_make_data.name);
                            $('#made').val(data.data[0].vehicle_model_data.name);
                            $('#engine_no').val(data.data[0].engine_no);
                            $('#chassis_no').val(data.data[0].chassis_no);
                            $('#civil_no').val(data.data[0].civil_no);
                            $('#t5_location').val(data.data[0].t5_location);
                            $('#part_x_no').val(data.data[0].part_x_no);
                            $('#part_x_location').val(data.data[0].part_x_location);
                            $('#gross_weight').val(data.data[0].gross_weight);
                            $('#load_capacity').val(data.data[0].load_capacity);
                            $('#tare_weight').val(data.data[0].tare_weight);
                            $('#part_x_date').val(data.data[0].part_x_date);
                            $('#seating_capacity').val(data.data[0].seating_capacity);
                            $('#vehicle_color').val(data.data[0].vehicle_color_data.name);
                            // $('#number').val(data[0].service_no);civil_no
                            // $('#name').val(data[0].name);
                            // $('#rank_id').val(data[0].rank);
                        },
                        error: function (e) {
                            console.log(e)
                        }
                    });
                }),
                //GET ESTB
                $.ajax({
                    url: 'https://str.army.lk/api/get_establishments/',
                    // url: 'https://172.16.60.51/beta/api/get_establishments/',
                    // url: 'https://172.16.60.51/beta/api/get_establishments/?&str-token=1189d8dde195a36a9c4a721a390a74e6',
                    method: 'GET',
                    cache: false,
                    async: false,
                    dataType: 'json',
                    data: {
                        "str-token": "1189d8dde195a36a9c4a721a390a74e6"
                    },
                    success: function (data) {

                        var organizationArray = [];
                        $.each(data, function (id, name) {

                        organizationArray.push({id: name.name, text: name.name});
                        });

                        //$('#incharge').append(newOption).trigger('change');
                        $('#organization').select2({
                            data: organizationArray
                        });
                    },
                    error: function (e) {

                        // console.log(e)
                    }
                });

                $(document).on('keyup', '#live_search_in_charge', function (e) {


                    get_str_details(this.value, function (data) {


                        try {
                            $('#live_search_result_in_charge').val(data[0].rank + ' ' + data[0].name + ' ' + data[0].unit + ' - ' + data[0].service_no);
                            $('#live_search_result_in_charge_e_no').val(data[0].e_no);
                        } catch (err) {

                            $('#live_search_result_in_charge').val('');
                        }

                    });

                });
                $(document).on('click', '#add_to_in_charge_list', function (e) {

                    if ($('#live_search_result_in_charge').val()) {
                        var data = {
                            id: $('#live_search_result_in_charge_e_no').val(),
                            text: $('#live_search_result_in_charge').val(),
                        };

                        if (inchargeArrayNew.includes(data.id)) {

                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: 'Officer ' + data.text + ' Already Added to the List!',
                            });

                        } else {

                            inchargeArrayNew = [];

                            var newOption = new Option(data.text, data.id, false, false);
                            $('#incharge').append(newOption).trigger('change');
                            inchargeArrayNew.push(data.id);
                            $('#incharge').val(inchargeArrayNew).trigger('change');
                        }
                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'No Record to Add!',
                        });
                    }

                })



            })


            function get_str_details(searchValue, callback) {

                $.ajax({
                    url: 'https://str.army.lk/api/get_person/',
                    method: 'POST',
                    cache: false,
                    dataType: 'json',
                    data: {
                        "str-token": "86f3d9556e7baae05cece42c81873ad5",
                        "service_no": searchValue,
                    },
                    success: function (data) {

                        callback(data);

                    },
                    error: function (e) {

                    }
                });
            }


    </script>

@stop
