@extends('frontend.master')

@section('name')
    
@endsection

@section('content')
    
<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Create <span class="tx-info tx-normal">Account</span></div>
      <div class="tx-center mg-b-60"></div>

 <form method="POST" action="{{ route('register') }}">
    @csrf

      <div class="form-group">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your username">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
      </div><!-- form-group -->
      <div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your Email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
      </div>



      <div class="form-group">
          <h6 style="font-size: 14px; font-weight: 400;">Please Select Your Role</h6>

          

            <select class="form-control" name="role_name" id="role_name" onchange="getSelectValue();">
                @foreach (App\role::whereIn('id', [3, 4])->get() as $role)

                
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
               

                
                

                @endforeach

                {{-- <input type="hidden" name="role_name" value="{{ $rvalue }}"> --}}
                
            </select>

        </div>

        <div class="form-group">
            <input id="designation" type="text" class="form-control" name="designation" placeholder="Enter your Designation If You are a Teacher">
        </div>



          {{-- <ul>
              <li name="role_name" value="admin" style="list-style: none; display: inline-flex; margin-left: -40px;"><input style="margin-right: 4px;" id="role_name" type="radio" class="form-control" value="admin" name="role_name">Admin</li>
              <li name="role_name" value="editor" style="list-style: none; display: inline-flex; "><input style="margin-right: 4px; margin-left: 8px;" id="role_name" type="radio" class="form-control" value="editor" name="role_name">Editor</li>
              <li name="role_name" value="teacher" style="list-style: none; display: inline-flex; "><input style="margin-right: 4px; margin-left: 8px;" id="role_name" type="radio" class="form-control" value="teacher" name="role_name">Teacher</li>
              <li name="role_name" value="student" style="list-style: none; display: inline-flex; "><input style="margin-right: 4px; margin-left: 8px;" id="role_name" type="radio" class="form-control" value="student" name="role_name">Student</li>
          </ul>              --}}
        
      


      {{-- <div class="form-group">
        <input id="role_name" type="text" class="form-control @error('role_name') is-invalid @enderror" name="role_name" value="{{ old('role_name') }}" placeholder="Enter your username">
        @error('role_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
      </div><!-- form-group --> --}}








      <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your Password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
      </div><!-- form-group -->

      <div class="form-group">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter your Conform Password">
      </div><!-- form-group -->

     
      <div class="form-group tx-12"></div>
      <button type="submit" class="btn btn-info btn-block">Sign Up</button>
 </form>
      <div class="mg-t-40 tx-center">Already have an account? <a href="{{ url('/login') }}" class="tx-info">Sign In</a></div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

@endsection

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        function getSelectValue()
        {
            var selectedValue = document.getElementById("role_name").value;
            alert(selectedValue);
        }
        getSelectValue();
        
        
    });


    });

</script>





{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
