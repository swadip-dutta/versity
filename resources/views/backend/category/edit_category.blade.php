@extends('backend.master')

@section('edit_category')
    active
@endsection

@section('content')
    

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Edit Category</h5>
    </div><!-- sl-page-title -->
  
    <div class="row row-sm mg-t-20">
      <div class="col-xl-10 m-auto">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
          <form action="{{ route('UpdateCategory') }}" method="post">
            @csrf
           
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Category Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="category_name" value="{{ $category_edit->category_name }}" class="form-control" placeholder="Enter Category Name">
              </div>
            </div><!-- row -->
  
            <input type="hidden" name="category_id" value="{{ $category_edit->id }}" class="form-control">
  
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Slug: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="slug" value="{{ $category_edit->slug }}" class="form-control" placeholder="Enter Slug">
              </div>
            </div>
            <!-- row -->
  
            
            <div class="form-layout-footer mg-t-30 text-center">
              <button class="btn btn-info mg-r-5">Save</button>
            </div><!-- form-layout-footer -->
          </form>
        </div><!-- card -->
      </div><!-- col-6 -->
    </div><!-- row -->
  
  
  </div><!-- sl-pagebody -->

@endsection