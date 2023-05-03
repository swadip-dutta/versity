@extends('backend.master')

@section('role')
    active
@endsection


@section('content')
    
<div class="sl-pagebody">


    <!-- col-6 -->
    <div class="col-xl-12 mg-t-25 mg-xl-t-0">
      <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
        <h4>Permission To {{ $user->name }}</h4>
        <h6>As A {{ $user->getRoleNames() }}</h6>

        <form action="{{ route('PermissionUpdateToUser') }}" method="post">
          @csrf
          
          <input type="hidden" name="user_id" value="{{ $user->id }}">
        <div class="row row-xs">
          <label class="col-sm-4 form-control-label"><span class="tx-danger"></span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            
              @foreach ($permission as $permission)
                  <li style="list-style: none">
                    
                    <input type="checkbox" name="permission[]" value="{{ $permission->name }}" {{ $user->hasPermissionTo($permission->name) ? "checked" : '' }}>{{ $permission->name }}
                    
                  </li>
              @endforeach
         
          </div>
        </div><!-- row -->
       
      
       
        <!-- row -->
        
            <div class="form-layout-footer mg-t-30 text-center" style="margin-left: -227px">
              <button type="submit" class="btn btn-info">Assign</button>
            </div>
         
      </form>
      </div><!-- card -->
    </div><!-- col-6 -->
  </div>

  </div>

@endsection