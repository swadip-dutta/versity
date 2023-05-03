@extends('backend.master')
@section('home')
    active
@endsection



@section('name')

@endsection


@section('content')


    <div class="sl-pagebody">
        <div class="slider_in">

            @foreach ($notice as $item)

                <div class="bannar_slider text-center">
                    <div class="bannar_img" style="background:url('/images/backend.jpg'); height: 350px;">
                        <div class="for_btn" style="display: inline-block; margin-top: 32px">
                            <h1 style="text-transform: capitalize; color: rgba(255, 255, 255, 0.7); margin-top: 5px;">
                                {{ $item->title }}</h1>
                            <h2 style="color: #495057;">{{ $item->category->category_name }}</h2>

                            <p style="color: #fff; margin: 0 40px;">{{ Str::limit($item->description, 600, '...') }}</p>
                            <a style="margin-top: 30px; overflow: hidden;" class="btn btn-info"
                                href="{{ $item->link }}">Download pdf</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>




        <div style="display: block; margin-bottom: 29px;" class="row row-sm text-center">
            <h3 style="color: #495057">Latest Exam Shedules:</h3>
        </div>

        <div class="row row-sm">

            @foreach ($all_exam_class as $item)


                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-primary">
                        <span class="">Exam Type:</span>
          <h6 style=" font-size: 12px; margin-top: -18px;
                            margin-left: 84px;" class="tx-white">{{ $item->title }}</h6>
                            <div class="d-flex justify-content-between align-items-center mg-b-10">

                                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white"><img
                                        style="border-radius: 50%; border: 2px solid #fff;"
                                        src="{{ asset('Pro_images/' . $item->user_id . '/' . $item->user->images) }}"
                                        alt="{{ $item->user_id }}"></h6>

                                <h6 style="margin-top: -50px;">{{ $item->user->name }}</h6>
                            </div><!-- card-header -->
                            <div style="margin-top: -22px;" class="d-flex align-items-center justify-content-between">
                                <h6
                                    style="margin-top: -58px; margin-left: 103px; font-size: 13px; background-color: #5B93D3;">
                                    {{ $item->user->designation }}</h6>
                            </div><!-- card-body -->
                            <div style="margin-top: -22px;" class="text-right">
                                <a style="color: #fff;" href="{{ $item->youtube_link }}">Youtube Link</a>
                            </div>
                    </div><!-- card -->
                </div>
            @endforeach
        </div>



        <div style="display: block; margin: 29px; 0" class="row row-sm text-center">
            <h3 style="color: #495057">Latest Classes:</h3>
        </div>
        <div class="row row-sm" style="margin-left: 0px; margin-right: -20px;">
            @foreach ($all_class as $all_class)
                <div class="col-lg-4 featured-im" style="padding-left: 0">
                    <a href="{{ $all_class->link }}"><img
                            src="{{ asset('images/' . $all_class->created_at->format('Y/m/') . '/' . $all_class->thumbnail) }}"
                            alt=""></a>
                    <div class="featured-cont">
                        <h6
                            style="font-family: sans-serif; font-size: 17px; font-style: italic; font-weight: 600; margin-top: 5px; text-transform: capitalize;">
                            <a style="color: #5B93D3;" href="{{ $all_class->link }}">{{ $all_class->title }}</a>
                        </h6>
                        <h6
                            style="font-family: sans-serif; font-size: 11px; font-style: italic; font-weight: 600; margin-top: -5px;">
                            Post By: {{ $all_class->user->name }}</h6>
                    </div>
                </div>
            @endforeach
        </div>




        <div style="display: block; margin: 29px; 0" class="row row-sm text-center">
            <h3 style="color: #495057">Latest Books:</h3>
        </div>
        <div class="row row-sm">



            @foreach ($all_books as $all_books)
                <div class="col-lg-4 text-center">
                    <a href="{{ $all_books->link }}"><img
                            src="{{ asset('books/' . $all_books->created_at->format('Y/m/') . '/' . $all_books->thumbnail) }}"
                            alt=""></a>
                    <div class="featured-cont">
                        <h6
                            style="font-family: sans-serif; font-size: 17px; font-style: italic; font-weight: 600; margin-top: 5px; text-transform: capitalize;">
                            <a style="color: #5B93D3;"
                                href="{{ $all_books->link }}">{{ Str::limit($all_books->title, 20, '..') }}</a>
                        </h6>
                        <h6
                            style="font-family: sans-serif; font-size: 11px; font-style: italic; font-weight: 600; margin-top: -5px;">
                            Post By: {{ $all_books->user->name }}</h6>
                    </div>
                </div>
            @endforeach


        </div><!-- col-8 -->



    </div><!-- row -->

    </div><!-- sl-pagebody -->

@endsection
