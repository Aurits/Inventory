<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>ADD Transfer</h4>
                    <h6>Transfer your stocks to one store another store.</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Date </label>
                                <div class="input-groupicon">
                                    <input type="date" placeholder="DD-MM-YYYY"wire:model="date">
                                    <div class="addonset">
                                        <img src="{{ asset('assets/img/icons/calendars.svg')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>References </label>
                                <div class="input-groupicon">
                                    <input type="text" wire:model="reference">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>From</label>
                                <select class="select" wire:model="from">
                                    <option>Choose</option>
                                    @foreach($stores as $store)
                                    <option value="{{ $store->id}}">{{$store->storeName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>To</label>
                                <select class="select" wire:model="to">
                                    <option>Choose</option>
                                    @foreach($stores as $store)
                                    <option value="{{ $store->id}}">{{$store->storeName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                 <select class="select" wire:model=productName>
                                    <option>Choose</option>
                                    @foreach($products as $product)
                                    <option value="{{ $product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>                   
                    <div class="row">

                         <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" wire:model="quantity">
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
                            <a href="javascript:void(0);" wire:click="createTransfer" class="btn btn-submit me-2">Submit</a>
                            <a href="transferlist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>