@extends('layouts.backend.app')

@section('content')


    <div class="card-body">
 
        <form action="{{ route('admin.posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(isset($post))
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
                                <label for="" class="col-sm-2 col-form-label">Title</label>
                                    <input type="text" class="form-control  @if ($errors->has('title'))   is-invalid @endif" name="title" id="title"  value="{{ isset($post) ? $post->title : old('title')}}">
                                    @if ($errors->has('title'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('title') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group  row">

                                <div class="col-md-10">
                                <label for="" class="col-sm-2 col-form-label">Description</label>
                                <textarea name="body" class="form-control @if ($errors->has('body'))   is-invalid @endif" id="js-ckeditor" cols="30"  rows="10"  >{{isset($post) ? $post->body : old('body')}}</textarea>
                                @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('body') }}
                                </div>
                                @endif

                                </div>
                            </div>
                  <br>
 
                  @if (isset($post))
                  <div class="form-group row">
                      <div class="col-sm-10">
                    <label  class="col-sm-2 control-label" for=""></label>
                      <img src="{{ asset($post->image) }}" alt="" height="50px" width="150px"  srcset="">
                    </div>
                  </div>
        
                  @endif
        
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <label  class="col-sm-2 control-label" for="image">Image</label>
                          <input type="file" class="form-control" name="image" id="image" />
                          <p style="color:red; !important; top:2px;">Recommended size: 600x200 pixles</p>
                          </div>
                    </div>
               
               
                    <div class="form-group row">
                        <label  class="col-sm-1 control-label" for="status">Published?   </label>
                        <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status1" value="1" {{ ($post->status=="1")? "checked" : "" }} >
                                  <label class="form-check-label" for="status1">
                                    Active
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status2" value="0" {{ ($post->status=="0")? "checked" : "" }}>
                                  <label class="form-check-label" for="status2">
                                    Inactive
                                  </label>
                                </div>
                              </div>
                 
        
                      </div>

                <div class="form-group row mb-2">
                    <div class="col-sm-10">
                    <label  class="col-sm-2 control-label" for="published_at">Published At</label>
                        <input type="text" class="form-control" name="published_at" id="published_at" 
                        value="{{isset($post) ? $post->published_at : old('published_at')}} ">
                    </div>
              </div>
         <br>
               <div class="form-group row">
                   <div class="col-sm-10">
                    <button class="btn btn-lg btn-success">
                        {{ isset($post) ? 'Update' : 'Save'}}
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