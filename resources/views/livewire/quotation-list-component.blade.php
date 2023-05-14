<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Quotation List</h4>
                    <h6>Manage your Quotations</h6>
                </div>
                <div class="page-btn">
                    <a href="addquotation.html" class="btn btn-added">
                        <img src="{{asset('assets/img/icons/plus.svg')}}" alt="img" class="me-2"> Add Quotation
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{asset('assets/img/icons/filter.svg')}}" alt="img">
                                    <span><img src="{{asset('assets/img/icons/closes.svg')}}" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{asset('assets/img/icons/search-white.svg')}}" alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{asset('assets/img/icons/pdf.svg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{asset('assets/img/icons/excel.svg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{asset('assets/img/icons/printer.svg')}}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Reference ">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option>Choose Customer</option>
                                            <option>Customer1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option>Choose Status</option>
                                            <option>Inprogress</option>
                                            <option>Complete</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                    <div class="form-group">
                                        <a class="btn btn-filters ms-auto"><img src="{{asset('assets/img/icons/search-whites.svg')}}" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                   
                                    <th>Product Name</th>
                                    <th>Reference</th>
                                    <th>Custmer Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Discount</th>
                                    <th>Decription</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach($quotations as $quotation)
                                  
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="{{asset('assets/img/product/product1.jpg')}}" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">{{$quotation->name}}</a>
                                    </td>
                                    <td>{{$quotation->References}}</td>

                                    <td>{{$quotation->customer_id}}</td>
                                    <td><span class="badges bg-lightgreen">{{$quotation->status}}</span></td>
                                    <td>{{$quotation->date}}</td>
                                    <td>{{$quotation->amount}}</td>
                                    <td>{{$quotation->discount}}</td>
                                    <td>{{$quotation->description}}</td>
                                    <td class="d-flex">
                                        <a class="me-3" href="editquotation.html">
                                            <img src="{{asset('assets/img/icons/edit.svg')}}" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="{{asset('assets/img/icons/delete.svg')}}" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>