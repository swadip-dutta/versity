@extends('backend.master')
@section('zoom')
    active
@endsection
@section('content')
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5 style="display: contents">Zoom Views</h5>
            <?php
            if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                ?>
            <a href="{{ route('ZoomAdd') }}" style="float: right;"><i class="fa fa-plus"></i> Add</a>
            <?php
            }
            ?>

        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40 mg-t-50">

            <?php 
            if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3 || Auth::user()->category_id == 1) {        
            ?>
            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <h3>Class One</h3>
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Topic Name</th>
                            <th>Start Date</th>
                            <th>Start Time</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="" method="">
                            @csrf
                            @foreach ($zoom_one as $key => $item)
                                <tr>
                                    <td>{{ $zoom_one->firstItem() + $key }}</td>
                                    <td>{{ $item->topic }}</td>
                                    <td>{{ $item->start_date ?? 'N/A' }}</td>
                                    <td>{{ $item->start_time ?? 'N/A' }}</td>
                                    <td>{{ $item->password ?? 'N/A' }}</td>
                                    <td>
                                        <?php
                                        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                                            ?>
                                        <a style="margin-left: -60px;" href="{{ $item->start_url }}"
                                            class="btn btn-purple">Start</a>
                                        <?php
                                        }
                                        ?>
                                        <a href="{{ $item->join_url }}" class="btn btn-purple">Join</a>
                                        <?php
                                        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                                            ?>
                                        <a href="{{ route('ZoomDelete', $item->id) }}" class="btn btn-danger">Delete</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            @endforeach
                        </form>
                    </tbody>
                </table>

            </div>
            <?php
            }
            ?>

            <?php 
            if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3 || Auth::user()->category_id == 2) {        
            ?>
            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <h3>Class Two</h3>
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Topic Name</th>
                            <th>Start Date</th>
                            <th>Start Time</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="" method="">
                            @csrf
                            @foreach ($zoom_two as $key => $item)
                                <tr>
                                    <td>{{ $zoom_two->firstItem() + $key }}</td>
                                    <td>{{ $item->topic }}</td>
                                    <td>{{ $item->start_date ?? 'N/A' }}</td>
                                    <td>{{ $item->start_time ?? 'N/A' }}</td>
                                    <td>{{ $item->password ?? 'N/A' }}</td>
                                    <td>
                                        <?php
                                        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                                            ?>
                                        <a style="margin-left: -60px;" href="{{ $item->start_url }}"
                                            class="btn btn-purple">Start</a>
                                        <?php
                                        }
                                        ?>
                                        <a href="{{ $item->join_url }}" class="btn btn-purple">Join</a>
                                        <?php
                                        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                                            ?>
                                        <a href="{{ route('ZoomDelete', $item->id) }}" class="btn btn-danger">Delete</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            @endforeach
                        </form>
                    </tbody>
                </table>

            </div>
            <?php
            }
            ?>

            <?php 
            if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3 || Auth::user()->category_id == 3) {        
            ?>
            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <h3>Class Three</h3>
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Topic Name</th>
                            <th>Start Date</th>
                            <th>Start Time</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="" method="">
                            @csrf
                            @foreach ($zoom_three as $key => $item)
                                <tr>
                                    <td>{{ $zoom_three->firstItem() + $key }}</td>
                                    <td>{{ $item->topic }}</td>
                                    <td>{{ $item->start_date ?? 'N/A' }}</td>
                                    <td>{{ $item->start_time ?? 'N/A' }}</td>
                                    <td>{{ $item->password ?? 'N/A' }}</td>
                                    <td>
                                        <?php
                                        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                                            ?>
                                        <a style="margin-left: -60px;" href="{{ $item->start_url }}"
                                            class="btn btn-purple">Start</a>
                                        <?php
                                        }
                                        ?>
                                        <a href="{{ $item->join_url }}" class="btn btn-purple">Join</a>
                                        <?php
                                        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                                            ?>
                                        <a href="{{ route('ZoomDelete', $item->id) }}" class="btn btn-danger">Delete</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            @endforeach
                        </form>
                    </tbody>
                </table>

            </div>
            <?php
            }
            ?>


            <?php 
            if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3 || Auth::user()->category_id == 4) {        
            ?>
            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <h3>Class Four</h3>
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Topic Name</th>
                            <th>Start Date</th>
                            <th>Start Time</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="" method="">
                            @csrf
                            @foreach ($zoom_four as $key => $item)
                                <tr>
                                    <td>{{ $zoom_four->firstItem() + $key }}</td>
                                    <td>{{ $item->topic }}</td>
                                    <td>{{ $item->start_date ?? 'N/A' }}</td>
                                    <td>{{ $item->start_time ?? 'N/A' }}</td>
                                    <td>{{ $item->password ?? 'N/A' }}</td>
                                    <td>
                                        <?php
                                        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                                            ?>
                                        <a style="margin-left: -60px;" href="{{ $item->start_url }}"
                                            class="btn btn-purple">Start</a>
                                        <?php
                                        }
                                        ?>
                                        <a href="{{ $item->join_url }}" class="btn btn-purple">Join</a>
                                        <?php
                                        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                                            ?>
                                        <a href="{{ route('ZoomDelete', $item->id) }}" class="btn btn-danger">Delete</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            @endforeach
                        </form>
                    </tbody>
                </table>

            </div>
            <?php
            }
            ?>


            <?php 
            if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3 || Auth::user()->category_id == 5) {        
            ?>
            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <h3>Class Five</h3>
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Topic Name</th>
                            <th>Start Date</th>
                            <th>Start Time</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="" method="">
                            @csrf
                            @foreach ($zoom_five as $key => $item)
                                <tr>
                                    <td>{{ $zoom_five->firstItem() + $key }}</td>
                                    <td>{{ $item->topic }}</td>
                                    <td>{{ $item->start_date ?? 'N/A' }}</td>
                                    <td>{{ $item->start_time ?? 'N/A' }}</td>
                                    <td>{{ $item->password ?? 'N/A' }}</td>
                                    <td>
                                        <?php
                                        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                                            ?>
                                        <a style="margin-left: -60px;" href="{{ $item->start_url }}"
                                            class="btn btn-purple">Start</a>
                                        <?php
                                        }
                                        ?>
                                        <a href="{{ $item->join_url }}" class="btn btn-purple">Join</a>
                                        <?php
                                        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
                                            ?>
                                        <a href="{{ route('ZoomDelete', $item->id) }}" class="btn btn-danger">Delete</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            @endforeach
                        </form>
                    </tbody>
                </table>

            </div>
            <?php
            }
            ?>
        </div>
    </div>
@endsection
