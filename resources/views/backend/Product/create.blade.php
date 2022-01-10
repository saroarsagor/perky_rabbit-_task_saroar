@extends('backend.dashboard')
@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<style type="text/css">
.hide{
display:none;
}
</style>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><small class="ml-3 mr-3">Product Create</small><small></small></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
         <!--  <li class="breadcrumb-item"><a href="">Brand create</a> -->
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
        <a class="nav-link active" href="{!! route('product-admin.index') !!}"><i class="fa fa-list mr-2"></i>Product List</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('product-admin.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-6">


          <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label text-md-right">Brand</label>
            <div class="col-md-9">
              <select class="form-control" id="brand_id" name="brand_id" required>
                <option value="Select" selected>Select</option>
                @foreach($Brands as $Brand)
                <option value="{{ $Brand->id }}">{{ $Brand->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

         

           <div class="form-group row">
            <label for="price" class="col-md-3 col-form-label text-md-right">{{ __('Price') }}</label>
            <div class="col-md-9">
              <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
              @error('price')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="qty" class="col-md-3 col-form-label text-md-right">{{ __('Qty') }}</label>
            <div class="col-md-9">
              <input id="qty" type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" value="{{ old('qty') }}" required autocomplete="qty" autofocus>
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
              <select class="form-control" id="categoryName" name="category_id" required>
                <option value="Select" selected>Select</option>
                @foreach($Categorys as $Category)
                <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                @endforeach
              </select>
            </div>
          </div>


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


        <div class="col-md-6">

           <div class="form-group row">
            <label for="details" class="col-md-3 col-form-label text-md-right">{{ __('Details ') }}</label>
            <div class="col-md-9">
              <textarea class="form-control" rows="5" name="details"></textarea>
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
              <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" required autocomplete="start_date" autofocus>
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
              <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') }}" required autocomplete="end_date" autofocus>
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
        <div class="col-md-9 text-md-right">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      
    </form>
    
    <div class="clearfix"></div>
  </div>
</div>
</div>

<!-- category subcategory dropdown -->
<script>
    $("#categoryName").change(function(){
        var categoryId = $(this).val();
        var url = "{{ route('category-sub-dropdown') }}";
        if(categoryId != ''){
            /*$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });*/
            $.ajax({
                type: 'post',
                url: url,
                data: {
                  "_token": "{{ csrf_token() }}",
                  categoryId: categoryId
                },
                success: function (data) {
                    console.log(data);

                    $("#subCategoryName").empty();
                    $("#subCategoryName").append('<option>Select Sub Category</option>');
                    $.each(data, function(key,value){
                            $("#subCategoryName").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }
            });
        }else{
            $('#subCategoryName').html('');
        }
    });

</script>


@endsection