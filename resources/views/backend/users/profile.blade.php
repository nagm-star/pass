@extends('layouts.backend.app')

@section('content')

    <div class="card-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="modal-body">
            <form action="{{ route('admin.user.profile.update', $user->id) }}"
                method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                @if (isset($user))
                    @method('PUT')
                @endif

                <div class="accordion" id="accordionExample">
                    <div class="card">

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group  row mb-2">

                                    <div class="col-md-8">
                                        <label for="" class="col-sm-2 col-form-label">Name</label>
                                        <input type="text"
                                            class="form-control  @if ($errors->has('name')) is-invalid @endif"
                                            name="name" id="name"
                                            value="{{ isset($user) ? $user->name : old('name') }}">
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group  row mb-2">

                                    <div class="col-md-8">
                                        <label for="" class="col-sm-2 col-form-label">Email</label>
                                        <input type="email"
                                            class="form-control  @if ($errors->has('email')) is-invalid @endif"
                                            name="email" id="email"
                                            value="{{ isset($user) ? $user->email : old('email') }}">
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8">
                                       <label  class="col-sm-2 control-label" for="password">password</label>
                                    <input type="password" id="password" name="password" class="form-control  @if ($errors->has('password'))   is-invalid @endif" >
                                    @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                    @endif
                                   </div>
                                    @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8">
                                       <label  class="col-sm-2 control-label" for="password-confirm">Confirm Password</label>
                                    <input type="password" id="password-confirm" name="password_confirmation" class="form-control" >
                                    @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                    @endif
                                   </div>
                    
                                </div>

                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <button class="btn btn-lg btn-success">
                                            {{ isset($user) ? 'Update' : 'Save' }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
            </form>

        </div>


    @endsection
