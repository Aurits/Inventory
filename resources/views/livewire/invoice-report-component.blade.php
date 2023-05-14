<div>

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Invoice Report</h4>
                    <h6>Manage your Invoice Report</h6>
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
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="From Date" class="datetimepicker">
                                            <div class="addonset">
                                                <img src="{{asset('assets/img/icons/calendars.svg')}}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="To Date" class="datetimepicker">
                                            <div class="addonset">
                                                <img src="{{asset('assets/img/icons/calendars.svg')}}" alt="img">
                                            </div>
                                        </div>
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
                        <table class="table datanew">
                            <thead>
                                <tr>
                                   
                                    <th>Invoice number </th>
                                    <th>Customer name </th>
                                    <th>Due date</th>
                                    <th>Amount</th>
                                    <th>Paid</th>
                                    <th>Amount due</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($invoiceReports as $invoiceReport)
                                <tr>
                                  
                                    <td>{{$invoiceReport->invoiceNumber}}</td>
                                    <td>{{$invoiceReport->customerName}}</td>
                                    <td>{{$invoiceReport->DueDate}}</td>
                                    <td>{{$invoiceReport->amount}}</td>
                                    <td>{{$invoiceReport->paid}}</td>
                                    <td>{{$invoiceReport->amountDue}}</td>
                                    
                                    <td><span class="badges bg-lightgreen">{{$invoiceReport->status}}</span></td>
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