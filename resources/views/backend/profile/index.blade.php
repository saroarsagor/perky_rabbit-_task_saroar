@extends('backend.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><small class="ml-3 mr-3">Profile</small><small></small></h1>
            </div>
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">City List</a>
                </li> -->
            </ol>
        </div>
    </div>
</div>
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="{{asset($data->logo)}}"
                        alt="Logo">
                    </div>
                    <h3 class="profile-username text-center">{{ $data->name}}</h3>
                    <p class="text-muted text-center">{{ $data->address}}</p>
                </div>
            </div>
            
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About</h3>
                </div>
                <div class="card-body">
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                    <p class="text-muted">{{ $data->area}}</p>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Change Password</a></li>
                        <li class="nav-item"><a class="nav-link" href="#logo" data-toggle="tab">Change Logo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#businessInfo" data-toggle="tab">Update Business Info</a></li>
                    </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- profile -->
                            <div class="active tab-pane" id="profile">
                                 <form class="form-horizontal">
                                
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->name}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->email}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->mobile}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Business Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->business_name}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">City</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->city}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Area</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->area}}" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Mobile2</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->mobile2}}" disabled>
                                        </div>
                                    </div>    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Business Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->business_email}}" disabled>
                                        </div>
                                    </div>    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->facebook}}" disabled>
                                        </div>
                                    </div>    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Instagram</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->instagram}}" disabled>
                                        </div>
                                    </div>  

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Twiter</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->twiter}}" disabled>
                                        </div>
                                    </div>     
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">LinkedIn</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" value="{{ $data->linkdin}}" disabled>
                                        </div>
                                    </div>    

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Cover Letter</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""><?php echo $data->cover_letter ?></textarea>
                                        </div>
                                    </div>      
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""><?php echo $data->address ?></textarea>
                                        </div>
                                    </div>     
                                   
                                    
                                </form>
                            </div>
                           <!--  password -->
                            <div class="tab-pane" id="password">
                                <form class="form-horizontal" method="POST" action="{{ route('chnage-password') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Confirmation Password</label>
                                        <div class="col-sm-10">
                                            <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password_confirmation">
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--logo-->
                            <div class="tab-pane" id="logo">
                                <div class="timeline timeline-inverse">
                                     <form class="form-horizontal" method="POST" action="{{ route('chnage-logo') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                                        <div class="col-sm-10">
                                            <input id="logo" type="file" class="form-control" name="logo" required>
                                            
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                    
                                </div>
                            </div>
                            <!-- .business Info update-->
                            <div class="tab-pane" id="businessInfo">
                                <form class="form-horizontal" method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data">
                                 @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" value="{{ $data->name}}">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="mobile" value="{{ $data->mobile}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Business Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="business_name" value="{{ $data->business_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">City</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="city" value="{{ $data->city}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Area</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="area" value="{{ $data->area}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Business Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="mobile2" value="{{ $data->mobile2}}">
                                        </div>
                                    </div>    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Business Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="business_email" value="{{ $data->business_email}}">
                                        </div>
                                    </div>    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="facebook" value="{{ $data->facebook}}">
                                        </div>
                                    </div>    
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Instagram</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="instagram" value="{{ $data->instagram}}">
                                        </div>
                                    </div>  

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Twiter</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="twiter" value="{{ $data->twiter}}">
                                        </div>
                                    </div>     
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">LinkedIn</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="linkdin" value="{{ $data->linkdin}}">
                                        </div>
                                    </div>    

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Cover Letter</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="cover_letter"><?php echo $data->cover_letter ?></textarea>
                                        </div>
                                    </div>      
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="address"><?php echo $data->address ?></textarea>
                                        </div>
                                    </div>     
                                   <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection