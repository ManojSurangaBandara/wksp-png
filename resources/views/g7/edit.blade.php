@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Workshop Indent </h1>
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

            <div class="card-tools">
                <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
            </div>
        </div>
    </div>
    <form role="form" method="POST" action="{{ route('g7.update',$g7->id) }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

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
                                                    value="{{$selectedMapData->organization}}">{{$selectedMapData->organization}}</option>
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
                            <label class="col-sm-3" for="reg_date">Registered Date</label>
                            <div class="col-sm-9">
                                <input type="text" name="reg_date"
                                       class="form-control   @error('est') is-invalid @enderror" id="reg_date"
                                       placeholder="Registered date" value="{{$g7->reg_date }}">
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
                                <textarea name="nature_service"
                                       class="form-control   @error('nature_service') is-invalid @enderror" id="nature_service"
                                       placeholder="Nature of Service" rows="5">{{$g7->nature_service }}</textarea>
                                @error('nature_service')
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
