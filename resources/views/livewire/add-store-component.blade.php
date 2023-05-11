<div>
   
   <div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Store Management</h4>
<h6>Add/Update Store</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Store Name</label>
<input type="text" wire:model="storeName">
</div>
</div>
 <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Store Location</label>
                                <select wire:model="StoreLocation">
@foreach($states as $state)
<option value="{{ $state->id}}">{{$state->stateName}}</option>
@endforeach
                                </select>
                            </div>
                        </div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Status</label>

<input type="text" wire:model="status">

</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Phone</label>
<input type="text" wire:model="phone">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Email</label>
<input type="text" wire:model="email">
</div>
</div>
<!-- <div class="col-lg-12">
<div class="form-group">
<label> Store Image</label>
<div class="image-upload">
<input type="file">
<div class="image-uploads">
<img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
<h4>Drag and drop a file to upload</h4>
</div>
</div>
</div>
</div> -->

 @if(Session::has('message'))
 <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
 @endif

<div class="col-lg-12">
<a href="javascript:void(0);" wire:click="createStore" class="btn btn-submit ">Submit</a>
<a href="storelist.html" class="btn btn-cancel">Cancel</a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
