@extends('layouts.backend.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">

         <div class="card card-header">
             <div class="row">
                 
                 <div class="col-md-6 float-left">
                    <a href="{{ route('admin.contacts.index') }}" style="margin-right:10px;" class="btn btn-info btn-sm float-left" type="submit"><i class="fa fa-reply">&nbsp;</i>Back</a>
                    
                        <button class="btn btn-danger btn-sm float-left"  onclick="handleDelete({{ $contact->id }})"><span class="fa fa-send"></span> Inactive</button>

                 </div>
             </div>
         </div>

                <div class="card-body">
                    <div class="row">

                           <div class="col-md-12float-right">
                               <div class="col-md-12 text-right">
                                   <h6  dir="rtl"><b class="color">Title:</b> <br>{!! $contact->title !!}</h6>
                                   <h6  dir="rtl"><b class="color">Email:</b><p class="text-right">{!! $contact->body !!}</p></h6>
                                   <h6  dir="rtl"><b class="color">Subject:</b><p class="text-right">{!! $contact->body !!}</p></h6>
                                   <h6  dir="rtl"><b class="color">Description:</b><p class="text-right">{!! $contact->body !!}</p></h6>
                                   <hr>
                               </div>
      
                           </div>
                    </div>
                 </div>
             </div>

         </div>

        </div>
    </div>


       <!-- Delete Modal -->
<div class="modal fade modal-danger" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-left" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="" method="POST" id="deleteMessage">
                @csrf
                @method('PUT')
                <div class="modal-body">
                  <p class="text-left">
                    Do you want to delete post?
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-danger">Yes, delete</button> 
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button> 
                </div>
              </form>
  
          </div>
        </div>
      </div>

@endsection


@section('scripts')


<script>



function handleDelete(id) {
    //console.log('star.', id)
    var form = document.getElementById('deleteMessage')
    form.action = '/admin/contacts/' + id
    $('#delete').modal('show')
}

</script>

@stop
