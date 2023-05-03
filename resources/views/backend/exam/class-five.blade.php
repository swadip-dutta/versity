@extends('backend.master')

@section('examFV')
    active
@endsection

@section('content')

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Class Five Exam</h5>
    </div><!-- sl-page-title -->


<div class="row row-sm">


  @foreach ($class_five as $item)
      

    <div class="col-sm-6 col-xl-3">
      <div class="card pd-20 bg-primary">
        <span class="">Exam Type:</span>
        <h6 style="font-size: 12px; margin-top: -18px; margin-left: 84px;" class="tx-white">{{ $item->title }}</h6>
        <div class="d-flex justify-content-between align-items-center mg-b-10">
          
          <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white"><img style="border-radius: 50%; border: 2px solid #fff;" src="{{ asset('Pro_images/'. $item->user_id.'/'.$item->user->images) }}" alt="{{ $item->user_id }}"></h6>
          
          <h6 style="margin-top: -50px;">{{ $item->user->name }}</h6>
        </div><!-- card-header -->
        <div style="margin-top: -22px;" class="d-flex align-items-center justify-content-between">
          <h6 style="margin-top: -58px; margin-left: 103px; font-size: 13px; background-color: #5B93D3;">{{ $item->user->designation }}</h6>
        </div><!-- card-body -->
        <div style="margin-top: -22px;" class="text-right">
         <a style="color: #fff;" href="{{ $item->youtube_link }}">Youtube Link</a>  
        </div>
        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
          <div style="margin-top: -12px;">
            <span class="tx-11 tx-white-6">Google join Code</span>
            <h6 style="font-size: 12px;" class="tx-white mg-b-0">{{ $item->google_class_join_code }}</h6>
          </div>
          <div>
            <span style="display: block;" class="tx-11 tx-white-6">Exam Link</span>
            <a style="font-size: 12px; margin-top: -5px;" href="{{ $item->exam_link }}" class="tx-white mg-b-0">Click Here</a>
          </div>
        </div><!-- -->
      </div><!-- card -->
    </div>
    @endforeach



</div>
</div>
@endsection