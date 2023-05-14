<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Brand ADD</h4>
                    <h6>Create new Brand</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input wire:model="brandName" type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea wire:model="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12">
                            <div class="form-group">
                                <label> Product Image</label>
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
                            <a wire:click="createBrand" href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                            <a href="brandlist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>