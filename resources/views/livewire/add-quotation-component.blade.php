<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Quotation Add</h4>
                    <h6>Add/Update Quotation</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Customer Name</label>
                                <div class="row">
                                    <div class="col-lg-10 col-sm-10 col-10">
                                        <select class="select" wire:model="customerName">
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}">
                                            {{ $customer->customer_id }}
                                        </option>
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
                                <label>Quotation Date </label>
                                <div class="input-groupicon">
                                    <input type="date" placeholder="DD-MM-YYYY" wire:model="date">
                                    <div class="addonset">
                                        <img src="{{asset('assets/img/icons/calendars.svg')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Reference No.</label>
                                <input type="text" wire:model="reference">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <div class="input-groupicon">
                                    <select class="select" wire:model="productName">
                                    @foreach($products as $product)
                                    <option value="{{ $product->id}}">{{$product->name}}</option>
                                    @endforeach
                                        </select>
                                    <div class="addonset">
                                        <img src="{{asset('assets/img/icons/scanners.svg')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Discount</label>
                                <input type="text" wire:model="discount">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" wire:model="amount">
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
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" wire:model="description"></textarea>
                            </div>
                        </div>

                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <div class="col-lg-12">
                            <a href="javascript:void(0);" wire:click="createQuotation" class="btn btn-submit me-2">Submit</a>
                            <a href="quotationList.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>