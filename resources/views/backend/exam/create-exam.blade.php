@extends('backend.master')

@section('create_exam')
    active
@endsection

@section('content')
    

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Create Exam</h5>
    </div><!-- sl-page-title -->

    <div style="margin: -55px 86px 0px 0px;" class="form-layout-footer mg-t-30 text-right">
      <a href="https://docs.google.com/forms?usp=mkt_forms"><button style="margin-left: 1px;" class="btn btn-info mg-r-5">Create Form</button></a>
    </div><!-- form-layout-footer -->
  
    <div class="row row-sm mg-t-20">
      <div class="col-xl-10 m-auto">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
          <form action="{{ route('PostExam') }}" method="post" enctype="multipart/form-data">
            @csrf
           
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Title: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="title" class="form-control" placeholder="Enter Exam Title" required>
              </div>
            </div>
            <!-- row -->
  
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Description: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <textarea name="description" id="description" class="col-sm-12 mg-t-10 mg-sm-t-0" required></textarea>
              </div>
            </div>
            <!-- row -->
            
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user() }}">
            <input type="hidden" id="role_id" name="role_id" value="{{ Auth::user()->role_name }}">
            {{-- <input type="hidden" name="slug" value="{{ $slug }}"> --}}

            <div class="row mg-t-20">
              <label for="brand_id" class="col-sm-4 form-control-label">Class: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <select name="category_id" id="category_id" class="form-control">
                  @foreach ($category as $category)
                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                  @endforeach
  
                </select>
              </div>
            </div>
  
            <!-- row -->
    
             {{-- Youtube --}}
  
             <div class="row mg-t-20">
              <label for="youtube_link" class="col-sm-4 form-control-label">Youtube Link: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="youtube_link" id="youtube_link" class="form-control" placeholder="Enter Link If Have">
              </div>
            </div>



            {{-- Link --}}
  
            <div class="row mg-t-20">
                <label for="exam_link" class="col-sm-4 form-control-label">Exam Link: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="exam_link" id="exam_link" class="form-control" placeholder="Enter Exam Link" required>
                </div>
              </div>



              <div class="row mg-t-20">
                <label for="google_class_join_code" class="col-sm-4 form-control-label">Google Class Code: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="google_class_join_code" id="google_class_join_code" class="form-control" placeholder="Enter Google Class Join Code" required>
                </div>
              </div>
  
  
              <div class="form-layout-footer mg-t-30 text-left">
                
              </div><!-- form-layout-footer -->
           
  
  
            <div class="form-layout-footer mg-t-30 text-center">
              <button class="btn btn-info mg-r-5">Save</button>
            </div><!-- form-layout-footer -->
          </form>
          
          
        </div><!-- card -->
      </div><!-- col-6 -->
    </div><!-- row -->
  
  
  </div><!-- sl-pagebody -->


@endsection


<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$(document).ready(function(){


  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

@if(session('exam'))
  Toast.fire({
  icon: 'success',
  title: '{{ session('exam') }}'
});
@endif

});

</script>   