<div>
    
    <div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Purchase Report</h4>
<h6>Manage your Purchase Report</h6>
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
<div class="col-lg-2 col-sm-6 col-12">
<div class="form-group">
<select class="select">
<option>Choose Suppliers</option>
<option>Suppliers</option>
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
<table class="table datanew">
<thead>
<tr>
<th>
<label class="checkboxs">
<input type="checkbox" id="select-all">
<span class="checkmarks"></span>
</label>
</th>
<th>Product Name</th>
<th>Purchased amount</th>
<th>Purchased QTY</th>
<th>Instock qty</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a class="product-img">
<img src="{{asset('assets/img/product/product1.jpg')}}" alt="product">
</a>
<a href="javascript:void(0);">Macbook pro</a>
</td>
<td>38698.00</td>
<td>1248</td>
<td>1356</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>

</div>
</div>

<div class="searchpart">
<div class="searchcontent">
<div class="searchhead">
<h3>Search </h3>
<a id="closesearch"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
</div>
<div class="searchcontents">
<div class="searchparts">
<input type="text" placeholder="search here">
<a class="btn btn-searchs">Search</a>
</div>
<div class="recentsearch">
<h2>Recent Search</h2>
<ul>
<li>
<h6><i class="fa fa-search me-2"></i> Settings</h6>
</li>
<li>
<h6><i class="fa fa-search me-2"></i> Report</h6>
</li>
<li>
<h6><i class="fa fa-search me-2"></i> Invoice</h6>
</li>
<li>
<h6><i class="fa fa-search me-2"></i> Sales</h6>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
