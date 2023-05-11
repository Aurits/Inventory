<div>
    
    <div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Places Management</h4>
<h6>Add/Update Places</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>State Name</label>
<input type="text" wire:model="stateName">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Country</label>
<select wire:model="country">
@foreach($countries as $country)
<option value="{{ $country->id}}">{{$country->countryName}}</option>
@endforeach
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Status</label>
<textarea class="form-control" wire:model="status"></textarea>
</div>
</div>
 @if(Session::has('message'))
 <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
@endif
<div class="col-lg-12">
<a href="javascript:void(0);" wire:click="createState" class="btn btn-submit me-2">Submit</a>
<a href="statelist.html" class="btn btn-cancel">Cancel</a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
