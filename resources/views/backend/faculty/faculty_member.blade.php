@can('view user')
@extends('backend.master')
@section('name')
    
@endsection

@section('content')
<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5 style="display: contents">FACULTY MEMBERS</h5>
    </div><!-- sl-page-title -->
    

    <div class="card pd-20 pd-sm-40 mg-t-50">
  
      <div class="table-responsive">
        <table class="table table-hover mg-b-0">
          <thead>
            <tr>
              
              <th>SL#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          
            @foreach($member as $key => $item)
            
            <tr>
              <td>
               {{ $member->firstItem() + $key }}
              </td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->role->name }}</td>
              <td>{{ $item->created_at->format('d-M-Y l')}}</td>
              <td>
                <a href="{{ route('UserEdit', $item->id) }}" class="btn btn-purple">Edit</a>
                <a style="cursor: pointer; color: #fff;" data-href="{{ route('UserDelete', $item->id) }}"class="btn btn-danger btn_delete">Delete</a>
              </td>
            </tr>
            @endforeach

            {{-- <tr class="text-center">
            <td colspan="10"><button class="btn btn-outline-danger" style="cursor: pointer">Delete</button></td>
            </tr> --}}


         
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

  

  </div>

@endsection
@endcan



<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$(document).ready(function(){


$('.btn_delete').click(function(){



  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
    
  if (result.isConfirmed) {
    window.location.href = $(this).data('href');



    // Swal.fire(
    //   'Deleted!',
    //   'Your file has been deleted.',
    //   'success'
    // )
  }
})




})

});

</script>   
