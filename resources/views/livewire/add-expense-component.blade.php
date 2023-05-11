<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Expense Add</h4>
                    <h6>Add/Update Expenses</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Expense Category</label>
                                <select wire:model="category">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id}}">{{$category->CategoryName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Expense Date </label>
                                <div class="input-groupicon">
                                    <input type="date" placeholder="Choose Date" 
                                        wire:model="date">
                                    <div class="addonset">
                                        <!-- <img src="{{asset('assets/img/icons/calendars.svg')}}" alt="img"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Amount</label>
                                <div class="input-groupicon">
                                    <input type="text" wire:model="amount">
                                    <div class="addonset">
                                        <img src="{{asset('assets/img/icons/dollar.svg')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Reference No.</label>
                                <input type="text" wire:model="reference">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>status</label>
                                <input type="text" wire:model="status">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea wire:model="description" class="form-control"></textarea>
                            </div>
                        </div>

                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <div class="col-lg-12">
                            <a href="javascript:void(0);" wire:click="createExpense"
                                class="btn btn-submit me-2">Submit</a>
                            <a href="expenselist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>