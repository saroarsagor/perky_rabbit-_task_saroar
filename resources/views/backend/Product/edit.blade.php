@extends('backend.dashboard')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><small class="ml-3 mr-3">Dashboard</small><small></small></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Brand Edit</a>
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
        <a class="nav-link active" href="{!! route('product-admin.index') !!}"><i class="fa fa-list mr-2"></i>Brand List</a>
      </li>
    </ul>
  </div>
  <div class="card-body">

     <form method="POST" action="{{ route('product-admin.update',$data->id) }}" enctype="multipart/form-data">
      @csrf
      @method("put")

      <div class="row">
        <div class="col-md-6">
      
          <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label text-md-right">Brand</label>
            <div class="col-md-9">
              <select class="form-control" id="brand_id" name="brand_id">
                <option value="Select" selected>Select</option>
                @foreach($Brands as $Brand)
                <option value="{{ $Brand->id }}" {{$Brand->id == $data->brand_id ? 'selected' : ''}}>{{ $Brand->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

         

           <div class="form-group row">
            <label for="price" class="col-md-3 col-form-label text-md-right">{{ __('Price') }}</label>
            <div class="col-md-9">
              <input id="price" type="number" class="form-control" name="price" value="{{$data->price }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="qty" class="col-md-3 col-form-label text-md-right">{{ __('Qty') }}</label>
            <div class="col-md-9">
              <input id="qty" type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" value="{{ $data->qty }}" autocomplete="qty" autofocus>
              @error('qty')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label text-md-right">Category</label>
            <div class="col-md-9">
              <select class="form-control" id="categoryName" name="category_id">
                <option value="Select" selected>Select</option>
                @foreach($Categorys as $Category)
                <option value="{{ $Category->id }}" {{$Category->id == $data->category_id ? 'selected' : ''}}>{{ $Category->name }}</option>
                @endforeach
              </select>
            </div>
          </div>


          <div class="form-group row">
            <label for="image" class="col-md-3 col-form-label text-md-right">{{ __('Image') }}</label>
            <div class="col-md-9">
              <input id="image" type="file" class="form-control" name="image" value="{{$data->image}}">
              @error('image')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          
          
        </div>


        <div class="col-md-6">

           <div class="form-group row">
            <label for="details" class="col-md-3 col-form-label text-md-right">{{ __('Details ') }}</label>
            <div class="col-md-9">
              <textarea class="form-control" rows="5" name="details" value="{{$data->details}}">{{$data->details}}</textarea>
              @error('details')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>


          <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label text-md-right">Start date</label>
            <div class="col-md-9">
              <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ $data->start_date }}" autocomplete="start_date" autofocus>
              @error('start_date')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label text-md-right">End date</label>
            <div class="col-md-9">
              <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ $data->end_date }}" autocomplete="end_date" autofocus>
              @error('end_date')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

        </div>
      </div>
      <div class="form-group row">
        <label for="name" class="col-md-3 col-form-label text-md-right"></label>
        <div class="col-md-9">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
      
    </form>
    
    <div class="clearfix"></div>
  </div>
</div>
</div>
@endsection