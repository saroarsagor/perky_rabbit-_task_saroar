@extends('backend.dashboard')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><small class="ml-3 mr-3">Role</small><small></small></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Role create</a>
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
        <a class="nav-link active" href="{!! route('roles.index') !!}"><i class="fa fa-list mr-2"></i>Role List</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    
    <form id="jquery-val-form" action="{{route('roles.store')}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label class="control-label">Name</label>
          <input class="form-control" name="name" type="text" placeholder="Enter Role Name" required>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <strong>Permission:</strong><br><br>
          <div class="row">
            @foreach($permission as $value)
            <div class="col-xs-12 col-sm-3 col-md-3">
              <div class="form-group">
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button type="reset" class="btn btn-secondary">Cancel</button>
      </div>
    </form>
    
    <div class="clearfix"></div>
  </div>
</div>
</div>
@endsection