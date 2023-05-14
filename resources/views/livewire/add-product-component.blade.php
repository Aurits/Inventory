<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Add</h4>
                    <h6>Create new product</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input wire:model="name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select wire:model="category" class="select form-control">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id}}">{{$category->CategoryName}}</option>
                                    @endforeach                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Brand</label>
                                <select wire:model="brand" class="select form-control">
                                    @foreach($brands as $brand)
                                    <option value="{{ $brand->id}}">{{$brand->BrandName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Unit</label>
                                <select wire:model="unit" class="select form-control">
                                    <option value="">Choose Unit</option>
                                    <option value="1">Unit-1</option>
                                    <option value="2">Unit-2</option>
                                    <option value="3">Unit-3</option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>SKU</label>
                                <input wire:model="SKU" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Price</label>
                                <input wire:model="price" type="text" class="form-control">
                            </div>
                        </div>
                       <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Main Store</label>
                                <input wire:model="mainStore" type="text" class="form-control">
                            </div>
                        </div>
                        
                        <!-- <div class="col-lg-12">
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
                            <a wire:click="createProduct" href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                            <a href="productlist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>