@extends('backend.dashboard')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><small class="ml-3 mr-3">Brand create</small><small></small></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <!-- <li class="breadcrumb-item"><a href="">Brand create</a> -->
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
    <form method="POST" action="{{ route('brand.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Brand Name') }}</label>
            <div class="col-md-9">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
            <label for="meta_description" class="col-md-3 col-form-label text-md-right">{{ __('Meta Description') }}</label>
            <div class="col-md-9">
              <textarea class="form-control textarea" name="meta_description" id="meta_description"></textarea>
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
            <label for="meta_key_word" class="col-md-3 col-form-label text-md-right">{{ __('Meta key word') }}</label>
            <div class="col-md-9">
              <input id="meta_key_word" type="text" class="form-control @error('meta_key_word') is-invalid @enderror" name="meta_key_word" value="{{ old('meta_key_word') }}" required autocomplete="name" autofocus>
              @error('meta_key_word')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group row">
            <label for="details" class="col-md-3 col-form-label text-md-right">{{ __('Details') }}</label>
            <div class="col-md-9">
              <textarea class="form-control textarea" name="details" id="details"></textarea>
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
            <label for="mketa_title" class="col-md-3 col-form-label text-md-right">{{ __('Meta Title') }}</label>
            <div class="col-md-9">
              <input id="mketa_title" type="text" class="form-control @error('mketa_title') is-invalid @enderror" name="mketa_title" value="{{ old('mketa_title') }}" required autocomplete="name" autofocus>
              @error('mketa_title')
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
              <input id="image" type="file" class="form-control" name="image" value="">
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
        <label for="name" class="col-form-label text-md-right"></label>
        <div class="col-md-12 text-md-right">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      
    </form>
    
    <div class="clearfix"></div>
  </div>
</div>
</div>
@endsection