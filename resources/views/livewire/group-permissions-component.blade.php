<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Group Permissions</h4>
<h6>Manage Group Permissions</h6>
</div>
<div class="page-btn">
<a class="btn btn-added" href="createpermission.html"><img src="{{asset('assets/img/icons/plus.svg')}}" alt="img" class="me-1">Add Group Permission</a>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
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
<div class="table-responsive">
<table class="table  datanew">
<thead>
<tr>
<th>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</th>
<th>Role</th>
<th>description</th>
<th>Status</th>
<th class="text-end">Action</th>
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
<td>Admin</td>
<td>Owner</td>
<td>
<span class="badges bg-lightgreen">Active</span>
</td>
<td class="text-end">
<a class="me-3" href="editpermission.html">
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