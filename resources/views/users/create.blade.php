@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New User </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">User</li>
                            <li class="breadcrumb-item active">New</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add User</div>
                    <div class="card-tools">
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
                    </div>
                </div>


                <form role="form" method="POST" action="{{ route('users.store') }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-3" for="name">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name"
                                       class="form-control   @error('name') is-invalid @enderror" id="name"
                                       placeholder="Name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3" for="username">User name</label>
                            <div class="col-sm-9">
                                <input type="text" name="username"
                                       class="form-control   @error('username') is-invalid @enderror" id="username"
                                       placeholder="username" value="{{ old('username') }}">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3" for="email">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email"
                                       class="form-control   @error('email') is-invalid @enderror" id="email"
                                       placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3" for="regi_id">Regiment</label>
                            <div class="col-sm-9">
                                <select required name="regi_id" id="regi_id"
                                        class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($regiments as $regiment)
                                        <option
                                            @selected($regiment->id == old('regi_id')) value="{{$regiment->id}}">{{$regiment->name}}</option>
                                    @endforeach
                                </select>
                                @error('regi_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3" for="unit_id">Unit</label>
                            <div class="col-sm-9">
                                <select required name="unit_id" id="unit_id"
                                        class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Choose a Unit</option>
                                    @foreach($units as $unit)
                                        <option
                                            @selected($unit->id == old('unit_id')) value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                                @error('unit_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3" for="password">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password"
                                       class="form-control   @error('password') is-invalid @enderror" id="password"
                                       placeholder="Password" value="{{ old('password') }}">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3" for="password">Confirm Password:</label>
                            <div class="col-sm-9">
                                <input type="password" name="confirm-password"
                                       class="form-control   @error('confirm-password') is-invalid @enderror"
                                       id="confirm-password"
                                       placeholder="Password" value="{{ old('confirm-password') }}">
                                @error('confirm-password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3" for="roles">Role</label>
                            <div class="col-sm-9">
                                <select required multiple name="roles" id="roles"
                                        class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($roles as $role)
                                        @if($role == 'Super Admin' || $role == 'Mess Admin')
                                            )
                                            @can('super-admin')
                                                <option value="{{$role}}">{{$role}}</option>
                                            @endcan
                                        @else
                                            <option value="{{$role}}">{{$role}}</option>
                                        @endif
                                    @endforeach
                                </select>

                                @error('roles')
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
    <script src="{{ asset('plugin/jquery/jquery.js') }}"></script>

    <script>

        $('#regi_id').change(function () {
            var regiment_id = $('#regi_id').val();

            $.ajax({
                url: '{{ route('ajax.getUnit') }}',
                type: 'get',
                data: {
                    'regiment_id': regiment_id,
                    '_token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $('#unit_id option').remove();
                    $.each(response, function (key, value) {
                        $('#unit_id').append(new Option(value.name, value.id));
                    });
                }
            });
        })
        $('#regi_id').ready(function () {
            var regiment_id = $('#regi_id').val();

            $.ajax({
                url: '{{ route('ajax.getUnit') }}',
                type: 'get',
                data: {
                    'regiment_id': regiment_id,
                    '_token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $('#unit_id option').remove();
                    $.each(response, function (key, value) {
                        $('#unit_id').append(new Option(value.name, value.id));
                    });
                }
            });
        })
    </script>

@stop
