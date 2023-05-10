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
                                <select wire:model="category_id" class="select form-control">
                                    <option value="">Choose Category</option>
                                    <option value="1">Computers</option>
                                    <!-- Add more options -->
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Brand</label>
                                <select wire:model="brand_id" class="select form-control">
                                    <option value="">Choose Brand</option>
                                    <option value="1">Brand</option>
                                    <!-- Add more options -->
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Unit</label>
                                <select wire:model="unit" class="select form-control">
                                    <option value="">Choose Unit</option>
                                    <option value="1">Unit</option>
                                    <!-- Add more options -->
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
                                <select wire:model="mainStore_id" class="select form-control">
                                    <option value="">Choose Main Store</option>
                                    <option value="1">Main Store 1</option>
                                    <!-- Add more options -->
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Store 2</label>
                                <select wire:model="store2_id" class="select form-control">
                                    <option value="">Choose Store 2</option>
                                    <option value="1">Store 2</option>
                                    <!-- Add more options -->
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Store 3</label>
                                    <select wire:model="store3_id" class="select form-control">
                                    <option value="">Choose Store 3</option>
                                    <option value="1">Store 3</option>
                                    <!-- Add more options -->
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
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
                        </div>
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

