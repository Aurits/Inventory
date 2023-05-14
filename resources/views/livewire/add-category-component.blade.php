<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Add Category</h4>
                    <h6>Create new product Category</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input wire:model="categoryName" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Code</label>
                                <input wire:model="categoryCode" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea wire:model="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <!--  <div class="col-lg-12">
                            <div class="form-group">
                                <label>Product Image</label>
                                <div class="image-upload">
                                    <input wire:model="image" type="file">
                                    <div class="image-uploads">
                                        <img src="{{ asset('assets/img/icons/upload.svg')}}" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <div class="col-lg-12">
                            <a wire:click="createCategory" href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                            <a href="categorylist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>