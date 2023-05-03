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
<input type="text" placeholder="DD-MM-YYYY" class="datetimepicker">
<div class="addonset">
<img src="{{ asset('assets/img/icons/calendars.svg')}}" alt="img">
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>From</label>
<select class="select">
<option>Choose</option>
<option>Store 1</option>
<option>Store 2</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>To</label>
<select class="select">
<option>Choose</option>
<option>Store 1</option>
<option>Store 2</option>
</select>
</div>
</div>
<div class="col-lg-12 col-sm-6 col-12">
<div class="form-group">
<label>Product Name</label>
<div class="input-groupicon">
<input type="text" placeholder="Scan/Search Product by code and select...">
<div class="addonset">
<img src="{{ asset('assets/img/icons/scanners.svg')}}" alt="img">
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="table-responsive ">
<table class="table">
<thead>
<tr>
<th>Product Name</th>
<th>QTY</th>
<th>Price</th>
<th>Stock	</th>
<th>Discount</th>
<th>Tax </th>
<th>Total Cost ($)</th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="bor-b1">
<td class="productimgname">
<a class="product-img">
<img src="{{ asset('assets/img/product/product7.jpg')}}" alt="product">
</a>
<a href="javascript:void(0);">Apple Earpods</a>
</td>
<td>
<div class="input-group form-group mb-0">
<a class="scanner-set input-group-text">
<img src="{{ asset('assets/img/icons/plus1.svg')}}" alt="img">
</a>
<input type="text" value="1" class="calc-no">
<a class="scanner-set input-group-text">
<img src="{{ asset('assets/img/icons/minus.svg')}}" alt="img">
</a>
</div>
</td>
<td>1500.00</td>
<td>50.00</td>
<td>0.00</td>
<td>0.00</td>
<td>1500.00</td>
<td>
<a href="javascript:void(0);" class="delete-set"><img src="{{ asset('assets/img/icons/delete.svg')}}" alt="svg"></a>
</td>
</tr>
 </tbody>
</table>
</div>
</div>
<div class="row">
<div class="col-lg-12 float-md-right">
<div class="total-order">
<ul>
<li>
<h4>Order Tax</h4>
<h5>$ 0.00 (0.00%)</h5>
</li>
<li>
<h4>Discount	</h4>
<h5>$ 0.00</h5>
</li>
<li>
<h4>Shipping</h4>
<h5>$ 0.00</h5>
</li>
<li class="total">
<h4>Grand Total</h4>
<h5>$ 0.00</h5>
</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Order Tax</label>
<input type="text">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Discount</label>
<input type="text">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Shipping</label>
<input type="text">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Status</label>
<select class="select">
<option>Choose Status</option>
<option>Completed</option>
<option>Inprogress</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control"></textarea>
</div>
</div>
<div class="col-lg-12">
<a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
<a href="transferlist.html" class="btn btn-cancel">Cancel</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
