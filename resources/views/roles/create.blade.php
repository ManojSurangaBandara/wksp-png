@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New District </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">Roles</li>
                            <li class="breadcrumb-item active">New</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Role</div>
                    <div class="card-tools">
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">Back</a>
                    </div>
                </div>

                <form role="form" method="POST" action="{{ route('roles.store') }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-3" for="name">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name"
                                       class="form-control   @error('name') is-invalid @enderror"
                                       id="name"
                                       placeholder="Name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3" for="permission">Permission</label>
                            <div class="col-sm-9">
                                <div class="row mb-2 text-maroon"><label>Super Admin</label></div>
                                <div>
                                    @foreach($permission as $value)
                                        @if($value->name == 'super-admin')
                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                                {{ $value->name }}</label>
                                            <br/>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="row mb-2 text-maroon"><label>User Management Module</label></div>
                                <div>
                                    @foreach($permission as $value)
                                        @if($value->name == 'user-management' || $value->name == 'role-management')
                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                                {{ $value->name }}</label>
                                            <br/>
                                        @endif
                                    @endforeach
                                </div>

                                <div class="row mb-2 text-maroon"><label>Reports Management Module</label></div>
                                <div>
                                    @foreach($permission as $value)
                                        @if($value->name == 'reports-management')
                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                                {{ $value->name }}</label>
                                            <br/>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="row mb-2 text-maroon"><label>Master Data Module</label></div>
                                <div>
                                    @foreach($permission as $value)
                                        @if($value->name == 'regiment-management')
                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                                {{ $value->name }}</label>
                                            <br/>
                                        @endif
                                    @endforeach
                                </div>
                                @error('permission')
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
