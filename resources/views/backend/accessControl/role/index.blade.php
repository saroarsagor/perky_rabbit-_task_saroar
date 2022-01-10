@extends('backend.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><small class="ml-3 mr-3">Role</small><small></small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Role List</a>
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
                <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-list mr-2"></i>Role List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('roles.create')}}"><i class="fa fa-plus mr-2"></i>Role Create</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Guard Name</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($roles as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name}}</td>
                    <td>{{ $row->guard_name}}</td>
                    <td>
                      
                        <div class="btn-group">
                            <a class="btn btn-info btn-sm" href="{{ route('roles.edit', $row->id) }}">
                                <i class="fa fa-lg fa-edit"></i>
                            </a> &nbsp;
                            <form method="POST" action="{{ route('roles.destroy',$row->id)}}"
                                class="d-inline">
                                @csrf
                                @method('delete')
                                <button data-name="{{ $row->name }}" type="submit"
                                class="btn btn-danger btn-sm delete-confirm">
                                <i class="fa fa-lg fa-trash"></i>
                                </button>
                            </form>
                        </div>
                        
                    </td>
                </tr>
                @endforeach
            </table>
            
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection