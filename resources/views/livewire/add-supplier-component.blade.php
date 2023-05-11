<div>
    
    <div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Supplier Management</h4>
<h6>Add/Update Customer</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Supplier Name</label>
<input type="text">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Email</label>
<input type="text">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Phone</label>
<input type="text">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Choose Country</label>
<select class="select">
<option>Choose Country</option>
<option>India</option>
<option>USA</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>City</label>
<select class="select">
<option>Choose City</option>
<option>City 1</option>
<option>City 2</option>
</select>
</div>
</div>
<div class="col-lg-9 col-12">
<div class="form-group">
<label>Address</label>
<input type="text">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control"></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label> Avatar</label>
<div class="image-upload">
<input type="file">
<div class="image-uploads">
<img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
<h4>Drag and drop a file to upload</h4>
</div>
</div>
</div>
</div>

                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
<div class="col-lg-12">
<a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
