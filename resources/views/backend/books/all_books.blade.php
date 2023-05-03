@extends('backend.master')

@section('all_book')
active
@endsection

@section('content')




    <div class="area-featured">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    <div class="new">
                        <h3 style="margin: 20px 0; color: rgba(104, 101, 101, 0.685)" >Class Books</h3>
                        <div class="responsive col-lg-10" style="text-align: center; margin-left: 70px">    
                            @foreach ($category_one as $all_books)
                            <div class="featured-im" style="padding: 1px 15px">
                                <a href="{{ $all_books->link }}"><img src="{{ asset('books/' . $all_books->created_at->format('Y/m/') . '/' . $all_books->thumbnail) }}" alt=""></a>
                                <div class="featured-cont">
                                    <h6 style="margin-left: -68px; font-family: sans-serif; font-size: 17px; font-style: italic; font-weight: 600; margin-top: 5px; text-transform: capitalize;"><a style="color: #5B93D3;" href="{{ $all_books->link }}">{{ Str::limit($all_books->title, 20, '..') }}</a></h6>
                                    <h6 style="margin-left: -140px; font-family: sans-serif; font-size: 11px; font-style: italic; font-weight: 600; margin-top: -5px;">Post By: {{ $all_books->user->name }}</h6>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>  
                </div>




                {{-- <div class="col-12" style="margin-top: 90px">
                   
                    <div class="new">
                        <h3 style="margin: 20px 0; color: rgba(104, 101, 101, 0.685)" >Class Two</h3>
                        <div class="responsive col-lg-10" style="text-align: center; margin-left: 70px">    
                            @foreach ($category_two as $all_class)
                            <div class="featured-im" style="padding: 1px 15px">
                                <a href="{{ $all_class->link }}"><img src="{{ asset('images/' . $all_class->created_at->format('Y/m/') . '/' . $all_class->thumbnail) }}" alt=""></a>
                                <div class="featured-cont">
                                    <h6 style="margin-left: -122px; font-family: sans-serif; font-size: 17px; font-style: italic; font-weight: 600; margin-top: 5px; text-transform: capitalize;"><a style="color: #5B93D3;" href="{{ $all_class->link }}">{{ $all_class->title }}</a></h6>
                                    <h6 style="margin-left: -140px; font-family: sans-serif; font-size: 11px; font-style: italic; font-weight: 600; margin-top: -5px;">Post By: {{ $all_books->user->name }}</h6>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>  
                </div> --}}




                {{-- <div class="col-12" style="margin-top: 90px">
                   
                    <div class="new">
                        <h3 style="margin: 20px 0; color: rgba(104, 101, 101, 0.685)" >Class Three</h3>
                        <div class="responsive col-lg-10" style="text-align: center; margin-left: 70px">    
                            @foreach ($category_three as $all_class)
                            <div class="featured-im" style="padding: 1px 15px">
                                <a href="{{ $all_class->link }}"><img src="{{ asset('images/' . $all_class->created_at->format('Y/m/') . '/' . $all_class->thumbnail) }}" alt=""></a>
                                <div class="featured-cont">
                                    <h6 style="margin-left: -122px; font-family: sans-serif; font-size: 17px; font-style: italic; font-weight: 600; margin-top: 5px; text-transform: capitalize;"><a style="color: #5B93D3;" href="{{ $all_class->link }}">{{ $all_class->title }}</a></h6>
                                    <h6 style="margin-left: -140px; font-family: sans-serif; font-size: 11px; font-style: italic; font-weight: 600; margin-top: -5px;">Post By: {{ $all_books->user->name }}</h6>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>  
                </div> --}}
            </div>       
        </div>
    </div>
  
   





@endsection
