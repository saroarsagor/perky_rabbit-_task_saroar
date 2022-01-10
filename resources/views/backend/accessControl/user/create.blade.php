@extends('backend.dashboard')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><small class="ml-3 mr-3">Users</small><small></small></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Users create</a>
        </li>
      </ol>
    </div>
  </div>
</div>
</div>
<!-- /.content-header -->
<div class="content">
<div class="clearfix"></div>
<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
      <li class="nav-item">
        <a class="nav-link active" href="{!! route('users.index') !!}"><i class="fa fa-list mr-2"></i>Users List</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    
    
    <form id="jquery-val-form" action="{{ route('users.index') }}" method="post">
      @csrf
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
              <label class="control-label">Name</label>
              <input class="form-control" name="name" type="text" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email</label>
              <input class="form-control" name="email" type="text" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input class="form-control" name="password" type="password"
              placeholder="Enter password" required>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
              <label class="control-label">Confirm Password</label>
              <input class="form-control" name="password_confirmation" type="password"
              placeholder="Enter password_confirmation" required>
            </div>
            
            
            <div class="form-group">
              <label for="selectRole">Select Role</label>
              <select name="roles" class="form-control select2" id="selectRole" required="">
                <option value="">Select Role</option>
                @foreach ($roles as $result)
                <option value="{{ $result->name }}">{{ $result->name }}</option>
                @endforeach
              </select>
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please select your country</div>
            </div>
            
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
      </div>
    </form>
    
    <div class="clearfix"></div>
  </div>
</div>
</div>
@endsection