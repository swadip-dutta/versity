@extends('backend.master')

@section('view_category')
    active
@endsection

@section('content')
    

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5 style="display: contents">Category Views</h5>
      <a href="{{ route('AddCategory') }}" style="float: right;"><i class="fa fa-plus"></i> Add</a>
    </div><!-- sl-page-title -->
    

    <div class="card pd-20 pd-sm-40 mg-t-50">
  
      <div class="table-responsive">
        <table class="table table-hover mg-b-0">
          <thead>
            <tr>
              <th ><input type="checkbox" id="CheakAll">SelectAll</th>
              
              <th>SL#</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <form action="" method="">
            @csrf
            @foreach($categories as $key => $item)
            
            <tr>
            <td><input type="checkbox" name="" value="{{ $item->id }}"></td>
              <td>
               {{ $categories->firstItem() + $key }}
              </td>
              <td>{{ $item->category_name }}</td>
              <td>{{ $item->slug ?? 'N/A'}}</td>
              <td>{{ $item->created_at->format('d-M-Y l')}}</td>
              <td>
                <a href="{{ route('EditCategory', $item->id) }}" class="btn btn-purple">Edit</a>
                <a href=""class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach

            {{-- <tr class="text-center">
            <td colspan="10"><button class="btn btn-outline-danger" style="cursor: pointer">Delete</button></td>
            </tr> --}}


          </form>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

  

  </div>



@endsection