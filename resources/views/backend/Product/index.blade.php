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
                    <li class="breadcrumb-item"><a href="">Product List</a>
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
                <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-list mr-2"></i>Product List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product-admin.create')}}"><i class="fa fa-plus mr-2"></i>Product Create</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead class="text-center">
                <tr>
                    <th style="width: 10%">SL</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Details</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($Product as $data)
                <tr style="background-color: #F5F5F5; text-align: center;">
                    <td>{{ $i++ }}</td>
                    <td>{{ $data -> price }}</td>
                    <td>{{ $data -> qty }}</td>
                     <td>{{ $data -> details }}</td>
                     <td>{{ $data -> start_date }}</td>
                     <td>{{ $data -> end_date }}</td>
                     <td>{{ $data -> brand->name }}</td>
                     <td>{{ $data -> category->name }}</td>
                      <td><img src="{{asset($data->image)}}" style="    width: 150px;"/></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-info btn-sm" href="{{ route('product-admin.edit', $data->id) }}"><i class="fa fa-lg fa-edit"></i></a> &nbsp;
                            
                            <form method="POST" action="{{ route('product-admin.destroy', $data->id) }}" class="d-inline">
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