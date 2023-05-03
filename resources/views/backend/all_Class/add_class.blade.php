@extends('backend.master')

@section('add_class')
    active
@endsection

@section('content')
    

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Add Class</h5>
    </div><!-- sl-page-title -->
  
    <div class="row row-sm mg-t-20">
      <div class="col-xl-10 m-auto">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
          <form action="{{ route('StoreClasses') }}" method="post" enctype="multipart/form-data">
            @csrf
           
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Title: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="title" class="form-control" placeholder="Enter Class Title">
              </div>
            </div><!-- row -->
  
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Summary: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <textarea name="summary" id="summary" class="col-sm-12 mg-t-10 mg-sm-t-0"></textarea>
              </div>
            </div>
            <!-- row -->
            
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user() }}">
            {{-- <input type="hidden" name="slug" value="{{ $slug }}"> --}}

            <div class="row mg-t-20">
              <label for="brand_id" class="col-sm-4 form-control-label">Category: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <select name="category_id" id="category_id" class="form-control">
                  @foreach ($category as $category)
                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                  @endforeach
  
                </select>
              </div>
            </div>
  
            <!-- row -->
           
  
            
  
         
             
  
             {{-- Description --}}
  
             <div class="row mg-t-20">
              <label for="description" class="col-sm-4 form-control-label">Description: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea name="description" id="description" class="col-sm-12 mg-t-10 mg-sm-t-0"></textarea>
              </div>
            </div>



            {{-- Link --}}
  
            <div class="row mg-t-20">
                <label for="link" class="col-sm-4 form-control-label">Link: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="link" class="form-control" placeholder="Enter Class Link">
                </div>
              </div>
  
  
            <div class="row">
              <label class="col-sm-4 form-control-label">Class Thumbnail: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="file" name="thumbnail" class="form-control" placeholder="Enter Class Thumbnail">
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