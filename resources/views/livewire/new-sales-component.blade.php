<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Sale</h4>
                    <h6>Add your new sale</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Customer</label>
                                <div class="row">
                                    <div class="col-lg-10 col-sm-10 col-10">
                                        <select class="select" wire:model="customer">
                                    @foreach($customers as $customer)
                                    <option value="{{ $customer->id}}">{{$customer->user_id}}</option>
                                    @endforeach
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product</label>
                                <select class="select" wire:model="productid">
                                     @foreach($products as $product)
                                    <option value="{{ $product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Store</label>
                                <select class="select" wire:model="store">
                                     @foreach($stores as $store)
                                    <option value="{{ $store->id}}">{{$store->storeName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Date</label>
                                <div class="input-groupicon">
                                    <input type="date" placeholder="Choose Date" 
                                        wire:model="date">
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Reference</label>
                                <input type="text" wire:model="reference">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Total</label>
                                <input type="text" wire:model="total">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Payment</label>
                                <input type="text" wire:model="payment">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" wire:model="quantity">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Biller</label>
                                <input type="text" wire:model="biller">
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
                            <a href="javascript:void(0);" wire:click="createSale" class="btn btn-submit me-2">Submit</a>
                            <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>