@extends('layouts.backend.app')

@section('content')

    <div class="card-body">
 
        <form action="{{ isset($user) ? route('admin.users.update', $user->id) : route('admin.users.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            @if(isset($user))
            @method('PUT')
            @endif

            <div class="modal-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                <div class="accordion" id="accordionExample">
                <div class="card">

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group  row mb-2">

                                <div class="col-md-10">
                                <label for="" class="col-sm-2 col-form-label">Name</label>
                                    <input type="text" class="form-control  @if ($errors->has('name'))   is-invalid @endif" name="name" id="name"
                                      value="{{ isset($user) ? $user->name : old('name')}}">
                                    @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group  row mb-2">

                                <div class="col-md-10">
                                <label for="" class="col-sm-2 col-form-label">Email</label>
                                    <input type="email" class="form-control  @if ($errors->has('email'))   is-invalid @endif" name="email" 
                                    id="email"  value="{{ isset($user) ? $user->email : old('email')}}">
                                    @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
 
                    

                  <br>
 
   
                <div class="form-group row mb-2">
                    <div class="col-sm-10">
                        <label class="form-label">Make admin?</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="{{ isset($user) && $user->role === 'is_admin'? $user->role : 'is_admin' }}"
                             id="role" name="role" @if(isset($user) && $user->role === 'is_admin') checked @endif >
                            <label class="form-check-label" for="role"></label>
                        </div>
                    </div>
                </div>

               <div class="form-group row">
                   <div class="col-sm-10">
                    <button class="btn btn-lg btn-success">
                        {{ isset($user) ? 'Update' : 'Save'}}
                    </button>
               </div>
            </div>
            </div>

        </div>


            </div>
        </form>

    </div>


@endsection


@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@stop

@section('scripts')
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
 --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>

 flatpickr('#published_at', {

enableTime: true,

enableSecond: true

})

 CKEDITOR.replace( 'js-ckeditor' );

</script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

@stop


@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@stop

@section('scripts')
<script src="{{ asset('backend/js/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('backend/js/plugins/dropzone/min/dropzone.min.js') }}"></script>

<script>
     flatpickr('#published_at', {
    
    enableTime: true,
    
    enableSecond: true
    
    })
    
     CKEDITOR.replace( 'js-ckeditor' );
    
    </script>

@endsection