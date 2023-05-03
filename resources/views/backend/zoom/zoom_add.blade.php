@extends('backend.master')
@section('zoom')
    active
@endsection
@section('content')
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Add Zoom Class</h5>
        </div><!-- sl-page-title -->
        <div class="row row-sm mg-t-20">
            <div class="col-xl-10 m-auto">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <form action="{{ route('ZoomPost') }}" target="_blank" method="post">
                        @csrf
                        <div class="row">
                            <label for="topic" class="col-sm-4 form-control-label">Topic name: <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" id="topic" name="topic" class="form-control"
                                    placeholder="Enter Category name" required>
                            </div>
                        </div>


                        <div class="row">
                            <label for="category_id" class="col-sm-4 form-control-label">Select Class Category: <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-20">
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($category as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="row mg-t-20">
                            <label for="start_date" class="col-sm-4 form-control-label">Select Date: <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input name="start_date" type="date" id="start_date" class="form-control" required>
                            </div>

                            <label for="start_time" class="col-sm-4 form-control-label mg-t-20">Start Time: <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-20">
                                <select name="start_time" id="start_time" required>
                                    <?php for($i = 0; $i < 24; $i++): ?>
                                    <option name="start_time" id="start_time" value="<?= $i . ':00' ?>">
                                        <?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?>
                                    </option>
                                    <?php endfor ?>
                                </select>
                                @php
                                    session_start();
                                    
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        $_SESSION['topic'] = $_POST['topic'];
                                        $_SESSION['start_date'] = $_POST['start_date'];
                                        $_SESSION['start_time'] = $_POST['start_time'];
                                    }
                                @endphp
                            </div>
                        </div>
                        <div class="form-layout-footer mg-t-30 text-center">
                            <button class="btn btn-info mg-r-5">Save</button>
                        </div><!-- form-layout-footer -->
                    </form>
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row -->
    </div><!-- sl-pagebody -->
@endsection
