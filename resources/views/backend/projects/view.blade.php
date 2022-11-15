@extends('layouts.backend.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">

         <div class="card card-header">
             <div class="row">
                 
                 <div class="col-md-6 float-left">
                    <a href="{{ route('admin.projects.index') }}" style="margin-right:10px;" class="btn btn-info btn-sm float-left" type="submit"><i class="fa fa-reply">&nbsp;</i>Back</a>

                 </div>
             </div>
         </div>

                <div class="card-body">
                    <div class="row">

                           <div class="col-md-8 float-right">
                               <div class="col-md-12 text-right">
                                   <h6  dir="rtl"><b class="color">Title:</b> <br>{!! $project->title !!}</h6>
                                   <h6  dir="rtl"><b class="color">Description:</b><p class="text-right">{!! $project->body !!}</p></h6>
                                   <hr>
                               </div>
      
                           </div>
                           <div class="col-md-4 float-left">
                       
                            <img src="{{ $project->image }}" class="img-fluid" alt="{{ $project->title }}">
                          
                           </div>
                    </div>
                 </div>
             </div>

         </div>

        </div>
    </div>

   

@endsection


@section('scripts')



@stop
