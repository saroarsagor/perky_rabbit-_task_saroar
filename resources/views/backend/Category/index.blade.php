@extends('backend.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><small class="ml-3 mr-3">Dashboard</small><small></small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Categories List</a>
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
                <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-list mr-2"></i>Category List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('category.create')}}"><i class="fa fa-plus mr-2"></i>Category Create</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead class="text-center">
                <tr>
                    <th style="width: 10%">SL</th>
                    <th>Name</th>
                    <th>Meta Title</th>
                    <th>Meta key word</th>
                    <th>Details</th>
                    <th>Meta Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($AllData as $data)
                <tr style="background-color: #F5F5F5; text-align: center;">
                    <td>{{ $i++ }}</td>
                    <td>{{ $data -> name }}</td>
                    <td>{{ $data -> mketa_title }}</td>
                    <td>{{ $data -> meta_key_word }}</td>
                    <td>{{ $data -> details }}</td>
                    <td>{{ $data -> meta_description }}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-info btn-sm" href="{{ route('category.edit', $data->id) }}"><i class="fa fa-lg fa-edit"></i></a> &nbsp;
                            
                            <form method="POST" action="{{ route('category.destroy', $data->id) }}" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm delete-confirm"> <i class="fa fa-lg fa-trash"></i></button>
                            </form>
                            
                        </div>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="clearfix"></div>
    </div>
</div>
</div>
@endsection