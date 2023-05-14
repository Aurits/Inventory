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
                                <label>Country Name</label>
                                <input wire:model="countryName" type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Region</label>
                                <input wire:model="regionName" type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Status</label>
                                <textarea wire:model="status" class="form-control"></textarea>
                            </div>

                        </div>
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <div class="col-lg-12">
                            <a wire:click="newCountry" href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                            <a href="countrieslist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>