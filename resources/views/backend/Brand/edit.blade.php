@extends('backend.dashboard')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><small class="ml-3 mr-3">Brand Edit</small><small></small></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <!-- <li class="breadcrumb-item"><a href="">Brand Edit</a> -->
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
        <a class="nav-link active" href="{!! route('brand.index') !!}"><i class="fa fa-list mr-2"></i>Brand List</a>
      </li>
    </ul>
  </div>
  <div class="card-body">

     <form method="POST" action="{{ route('brand.update',$data->id) }}" enctype="multipart/form-data">
      @csrf
      @method("put")
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Brand Name') }}</label>
            <div class="col-md-9">
              <input id="name" type="text" class="form-control" name="name" value="{{$data->name}}">
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group row">
            <label for="mketa_title" class="col-md-2 col-form-label text-md-right">{{ __('Meta Title') }}</label>
            <div class="col-md-9">
              <input id="mketa_title" type="text" class="form-control" name="mketa_title" value="{{$data->mketa_title}}" >
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group row">
            <label for="meta_key_word" class="col-md-3 col-form-label text-md-right">{{ __('Meta key word') }}</label>
            <div class="col-md-9">
              <input id="meta_key_word" type="text" class="form-control" name="meta_key_word" value="{{$data->meta_key_word}}">
             
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group row">
            <label for="details" class="col-md-3 col-form-label text-md-right">{{ __('Details') }}</label>
            <div class="col-md-9">
              <textarea class="form-control textarea" name="details" id="details" cols="30" rows="10"><?php echo $data->details ?></textarea>
              @error('details')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group row">
            <label for="meta_description" class="col-md-3 col-form-label text-md-right">{{ __('Meta Description') }}</label>
            <div class="col-md-9">
              <textarea class="form-control textarea" name="meta_description" id="meta_description" cols="30" rows="10"><?php echo $data->meta_description ?></textarea>
              @error('meta_description')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>

         <div class="col-md-6">
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