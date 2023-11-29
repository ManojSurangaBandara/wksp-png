@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New Job Card</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">Job Card</li>
                            <li class="breadcrumb-item active">New</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add New Job</div>
                    <div class="card-tools">
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
                    </div>
                </div>

                <form role="form" method="POST" action="{{ route('jobCard.store') }}"
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
                            <label class="col-sm-3" for="received_date">Vehicle Received Date:</label>
                            <div class="col-sm-9">
                               <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    </div>
                                    <input required datepicker datepicker-format="yyyy/mm/dd" type="text" id="received_date" name="received_date" value="{{ old('received_date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Received Date">
                                </div>
                                @error('received_date')
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
                                                @selected($nature_of_repair->id == old('nature_of_repair')) value="{{$nature_of_repair->name}}">{{$nature_of_repair->name}}</option>
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
                            <label class="col-sm-3" for="nature_of_repair">Nature of the Repair</label>
                            <div class="col-sm-9">
                                    <select required name="nature_of_repair" id="nature_of_repair"
                                            class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected value="">Select Nature of the Repair</option>
                                        @foreach($nature_of_repairs as $nature_of_repair)
                                            <option
                                                @selected($nature_of_repair->id == old('nature_of_repair')) value="{{$nature_of_repair->name}}">{{$nature_of_repair->name}}</option>
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
                            <label class="col-sm-3" for="repairs_req">Repairs Required</label>
                            <div class="col-sm-9">
                                <textarea name="repairs_req" class="form-control   @error('repairs_req') is-invalid @enderror" id="repairs_req"
                                       placeholder="Nature of Service" value="{{ old('repairs_req') }}" rows="5"></textarea>
                                @error('repairs_req')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Spare Parts Required</label>

                            <div class="col-sm-9">
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>

                                        <th style="text-align: center"><a href="#" class="btn btn-success addRow">+</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>
                                        <select required name="name[]" id="name"
                                        class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Choose a Relevant Vehicle Parts</option>
                                    @foreach($vehicle_tcategories as $tcategory)
                                        <option
                                            @selected($tcategory->id == old('parent_id3')) value="{{$tcategory->name}}">{{$tcategory->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent_id3')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
                                    <td><input type="text" name="qty[]" class="form-control" id="qty"/></td>

                                    <td style="text-align: center"><a href="#" class="btn btn-danger">-</a></td>
                                    </tr>
                                </tbody>
                                </table>
                                @error('spare_parts_req')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3" for="job_date_count">Assueme Date Count:</label>
                            <div class="col-sm-9">
                                <input type="text" name="job_date_count"
                                       class="form-control   @error('job_date_count') is-invalid @enderror" id="job_date_count"
                                       placeholder="Assueme Date Count" value="{{ old('job_date_count') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="wd_no">Ward Number:</label>
                            <div class="col-sm-9">
                                <input type="text" name="wd_no"
                                       class="form-control   @error('wd_no') is-invalid @enderror" id="wd_no"
                                       placeholder="Ward Number" value="{{ old('wd_no') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="in_inspect_date">"In" Inspect Date:</label>
                            <div class="col-sm-9">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input required datepicker datepicker-format="yyyy/mm/dd" type="text" id="in_inspect_date" name="in_inspect_date" value="{{ old('in_inspect_date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="In Inspect Date">
                                </div>
                                @error('in_inspect_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="work_start_date">Work Start Date:</label>
                            <div class="col-sm-9">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input required datepicker datepicker-format="yyyy/mm/dd" type="text" id="work_start_date" name="work_start_date" value="{{ old('work_start_date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Work Start Date">
                                </div>
                                @error('work_start_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="work_end_date">Work End Date:</label>
                            <div class="col-sm-9">
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input required datepicker datepicker-format="yyyy/mm/dd" type="text" id="work_end_date" name="work_end_date" value="{{ old('work_end_date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Work End Date">
                                </div>
                                @error('work_end_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="mileage">Mileage:</label>
                            <div class="col-sm-9">
                                <input type="text" name="mileage"
                                       class="form-control   @error('mileage') is-invalid @enderror" id="mileage"
                                       placeholder="Mileage" value="{{ old('mileage') }}">
                                @error('mileage')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="delivery_date">Delivery Date:</label>
                            <div class="col-sm-9">
                                <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input required datepicker datepicker-format="yyyy/mm/dd" type="text" id="delivery_date" name="delivery_date" value="{{ old('delivery_date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Delivery Date">
                            </div>
                                @error('delivery_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="repair_req">Repair Required:</label>
                            <div class="col-sm-9">
                                <input type="text" name="repair_req"
                                       class="form-control   @error('repair_req') is-invalid @enderror" id="repair_req"
                                       placeholder="Repair Required" value="{{ old('repair_req') }}">
                                @error('repair_req')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="out_inspect_date">"Out" Inspect Date:</label>
                            <div class="col-sm-9">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input required datepicker datepicker-format="yyyy/mm/dd" type="text" id="out_inspect_date" name="out_inspect_date" value="{{ old('out_inspect_date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Out Inspect Date">
                            </div>
                                @error('out_inspect_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="store_req">Stores Required:</label>
                            <div class="col-sm-9">
                                <input type="text" name="store_req"
                                       class="form-control   @error('store_req') is-invalid @enderror" id="store_req"
                                       placeholder="Stores Required" value="{{ old('store_req') }}">
                                @error('store_req')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="voucher_serial_no">Voucher Serial Number:</label>
                            <div class="col-sm-9">
                                <input type="text" name="voucher_serial_no"
                                       class="form-control   @error('voucher_serial_no') is-invalid @enderror" id="voucher_serial_no"
                                       placeholder="Voucher Serial Number" value="{{ old('voucher_serial_no') }}">
                                @error('voucher_serial_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="date_req">Product Request Date:</label>
                            <div class="col-sm-9">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input required datepicker datepicker-format="yyyy/mm/dd" type="text" id="date_req" name="date_req" value="{{ old('date_req') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Product Request Date">
                            </div>
                                @error('date_req')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="date_rev">Product Received Date:</label>
                            <div class="col-sm-9">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input required datepicker datepicker-format="yyyy/mm/dd" type="text" id="date_rev" name="date_rev" value="{{ old('date_rev') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Product Received Date">
                            </div>
                                @error('date_rev')
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


    <script type="text/javascript">
$('.addRow').on('click', function(){
            addRow();
        });
            function addRow(){
                var tr='<tr>'+
                    '<td width="75%"><select required name="name[]" id="name" class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><option selected value="">Choose a Relevant Vehicle Parts</option>@foreach($vehicle_tcategories as $tcategory)<option @selected($tcategory->id == old('parent_id3')) value="{{$tcategory->id}}">{{$tcategory->name}}</option>@endforeach</select>@error('parent_id3')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror</td>'+
                    '<td><input type="text" name="qty[]" class="form-control"/></td>'+
                    '<td style="text-align: center"><a href="#" class="btn btn-danger remove">-</a></td>'+
                    '</tr>';
                $('tbody').append(tr);
            };

        $('tbody').on('click', '.remove', function(){
            $(this).parent().parent().remove();
        });
    </script>
@endsection

@section('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('plugin/flowbite/flowbite.min.css') }}"/>
@stop

@section('third_party_scripts')
    <script src="{{ asset('plugin/flowbite/flowbite.js') }}"></script>
    <script src="{{ asset('plugin/flowbite/datepicker.js') }}"></script>
    <script src="{{ asset('plugin/jquery/jquery.js') }}"></script>
@stop
