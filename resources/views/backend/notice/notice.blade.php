@extends('backend.master')

@section('name')

@endsection

@section('content')
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5 style="display: contents">ALL NOTICE</h5>
        </div><!-- sl-page-title -->


        <div class="card pd-20 pd-sm-40 mg-t-50">

            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <thead>
                        <tr>

                            <th>SL#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Thumbnail</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($notice as $key => $item)

                            <tr>
                                <td>
                                    {{ $notice->firstItem() + $key }}
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->category->category_name }}</td>
                                <td>{{ Str::limit($item->description, 50, '...') }}</td>
                                <td>{{ Str::limit($item->link, 50, '...') }}</td>

                                <td> <img src="{{ asset('images/' . $item->thumbnail) }}" alt="{{ $item->thumbnail }}">
                                </td>
                                <td>{{ $item->created_at->format('d-M-Y l') }}</td>
                                <td>
                                    <a href="{{ route('EditNotice', $item->id) }}" class="btn btn-purple">Edit</a>
                                    <a style="cursor: pointer; color: #fff;"
                                        data-href="{{ route('UserDelete', $item->id) }}"
                                        class="btn btn-danger btn_delete">Delete</a>
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
