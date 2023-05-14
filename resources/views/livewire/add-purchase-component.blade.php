<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Purchase Add</h4>
                    <h6>Add/Update Purchase</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <div class="row">
                                    <div class="col-lg-10 col-sm-10 col-10">
                                        <select class="select" wire:model="supplierName">
                                    @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id}}">{{$supplier->supplierName}}</option>
                                    @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                        <div class="add-icon">
                                            <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/plus1.svg')}}" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Purchase Date </label>
                                <div class="input-groupicon">
                                    <input type="date" placeholder="DD-MM-YYYY" wire:model="date">
                                    <div class="addonset">
                                        <img src="{{asset('assets/img/icons/calendars.svg')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <select class="select" wire:model="productName">
                                    @foreach($products as $product)
                                    <option value="{{ $product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Reference No.</label>
                                <input type="text" wire:model="References">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Store</label>
                                <select class="select" wire:model="store">
                                    @foreach($stores as $store)
                                    <option value="{{ $store->id}}">{{$store->storeName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    <div class="row">
                        
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" wire:model="qty">
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select" wire:model="status">
                                    <option>Choose Status</option>
                                    <option>Completed</option>
                                    <option>Inprogress</option>
                                </select>
                            </div>
                        </div>
                        
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <div class="col-lg-12">
                            <a href="javascript:void(0);" wire:click="createPurchase" class="btn btn-submit me-2">Submit</a>
                            <a href="purchaselist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>