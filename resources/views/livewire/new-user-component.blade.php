<div>
   <div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>User Management</h4>
<h6>Add/Update User</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>User Name</label>
<input type="text">
</div>
<div class="form-group">
<label>Email</label>
<input type="text">
</div>
<div class="form-group">
<label>Password</label>
<div class="pass-group">
<input type="password" class=" pass-input">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Mobile</label>
<input type="text">
</div>
<div class="form-group">
<label>Role</label>
<select class="select">
<option>Select</option>
<option>Role</option>
<option>Role1</option>
</select>
</div>
<div class="form-group">
<label>Confirm Password</label>
<div class="pass-group">
<input type="password" class=" pass-inputs">
<span class="fas toggle-passworda fa-eye-slash"></span>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label> Profile Picture</label>
<div class="image-upload image-upload-new">
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
