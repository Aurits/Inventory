<div>
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Expenses LIST </h4>
<h6>Manage your purchases</h6>
</div>
<div class="page-btn">
<a href="createexpense.html" class="btn btn-added"><img src="{{asset('assets/img/icons/plus.svg')}}" class="me-2" alt="img">Add New Expense</a>
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
<a class="btn btn-searchset">
<img src="{{asset('assets/img/icons/search-white.svg')}}" alt="img">
</a>
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
<input type="text" class="datetimepicker cal-icon" placeholder="Choose Date">
<div class="addonset">
<img src="{{asset('assets/img/icons/calendars.svg')}}" alt="img">
</div>
</div>
</div>
</div>
<div class="col-lg-2 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="Enter Reference">
</div>
</div>
<div class="col-lg-2 col-sm-6 col-12">
<div class="form-group">
<select class="select">
<option>Choose Category</option>
<option>Computers</option>
</select>
</div>
</div>
<div class="col-lg-2 col-sm-6 col-12">
<div class="form-group">
<select class="select">
<option>Choose Status</option>
<option>Complete</option>
<option>Inprogress</option>
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
<th>
<label class="checkboxs">
<input type="checkbox" id="select-all">
<span class="checkmarks"></span>
</label>
</th>
<th>Category name</th>
<th>Reference</th>
<th>Date</th>
<th>Status</th>
<th>Amount</th>
<th>Description</th>
<th>Action</th>
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
<td>Employee Benefits</td>
<td>PT001</td>
<td>19 Nov 2022</td>
<td><span class="badges bg-lightgreen">Active</span></td>
<td>120</td>
<td>Employee Vehicle</td>
<td>
<a class="me-3" href="editexpense.html">
<img src="{{asset('assets/img/icons/edit.svg')}}" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="{{asset('assets/img/icons/delete.svg')}}" alt="img">
</a>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>
