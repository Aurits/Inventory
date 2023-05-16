<x-app-layout>

    <div>
  
    @auth

      @if(Auth::user()->utype =='USR')

       <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inventory Management System') }}
        </h2>
      </x-slot>

      <div class="page-wrapper">
            <div class="content">
                <div class="row">
                  
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash1">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash2.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
                                <h6>Total Sales Due</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash2">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash3.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
                                <h6>Total Sale Amount</h6>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das1">
                            <div class="dash-counts">
                                <h4>100</h4>
                                <h5>Suppliers</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das2">
                            <div class="dash-counts">
                                <h4>100</h4>
                                <h5>Purchase Invoice</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file-text"></i>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row">


                    <div class="card-body">
                        <h4 class="card-title">Products</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                       
                                        <th>Product Name</th>
                                        <th>Product SKU</th>
                                         <th>Price</th>
                                        <th>Brand Name</th>
                                         <th>Main Store</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     
                                    @foreach ($latestProducts as $product)
                                    <tr>
                                        
                                        <td><a>{{ $product->name}}</a></td>
                                        <td class="productimgname">
                                            
                                            <a href="">{{ $product->SKU}}</a>
                                        </td>
                                        <td>{{ $product->price}}</td>
                                        <td>{{ $product->Brand_id}}</td>
                                        <td>{{ $product->MainStore}}</td>
                                    </tr>
                                    @endforeach
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                  


                </div>
                <div class="card mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Expired Products</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                        
                                        <th>Product Name</th>
                                        <th>Product SKU</th>
                                        <th>Price</th>
                                        <th>Brand</th>
                                        <th>QTY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach ($latestProducts as $product)
                                    <tr>
                                        
                                        <td><a href="javascript:void(0);">{{ $product->name}}</a></td>
                                        <td class="productimgname">
                                            
                                            <a href="">{{ $product->SKU}}</a>
                                        </td>
                                        <td>{{ $product->price}}</td>
                                        <td>{{ $product->Brand_id}}</td>
                                        <td>{{ $product->MainStore}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
      @endif

      @if(Auth::user()->utype =='SUP')
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inventory Management System') }}
        </h2>
      </x-slot>

     <div class="page-wrapper">
            <div class="content">
                <div class="row">
                   
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash1">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash2.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
                                <h6>Total Sales Due</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash2">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash3.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
                                <h6>Total Sale Amount</h6>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das2">
                            <div class="dash-counts">
                                <h4>100</h4>
                                <h5>Purchase Invoice</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file-text"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das3">
                            <div class="dash-counts">
                                <h4>105</h4>
                                <h5>Sales Invoice</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">


                    <div class="card-body">
                        <h4 class="card-title">Products</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                       
                                        <th>Product Name</th>
                                        <th>Product SKU</th>
                                         <th>Price</th>
                                        <th>Brand Name</th>
                                         <th>Main Store</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     
                                    @foreach ($latestProducts as $product)
                                    <tr>
                                        
                                        <td><a>{{ $product->name}}</a></td>
                                        <td class="productimgname">
                                            
                                            <a href="">{{ $product->SKU}}</a>
                                        </td>
                                        <td>{{ $product->price}}</td>
                                        <td>{{ $product->Brand_id}}</td>
                                        <td>{{ $product->MainStore}}</td>
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

      @endif



      @if(Auth::user()->utype =='ADM')
         <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inventory Management System') }}
        </h2>
    </x-slot>

       <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash1.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="{{ $cpurchases}}">{{ $cpurchases}}</span></h5>
                                <h6>Total Purchase Due</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash1">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash2.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="{{ $csales}}">{{ $csales}}</span></h5>
                                <h6>Total Sales Due</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash2">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash3.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="{{ $cproducts}}">{{ $cproducts}}</span></h5>
                                <h6>Total Product Amount</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash3">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash4.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="{{ $cusers}}">{{ $cusers}}</span></h5>
                                <h6>Total Users</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count">
                            <div class="dash-counts">
                                <h4>{{ $ccustomers}}</h4>
                                <h5>Customers</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das1">
                            <div class="dash-counts">
                                <h4>{{ $csuppliers}}</h4>
                                <h5>Suppliers</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das2">
                            <div class="dash-counts">
                                <h4>{{ $cstores}}</h4>
                                <h5>Stores</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file-text"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das3">
                            <div class="dash-counts">
                                <h4>{{ $ccountries}}</h4>
                                <h5>Countries</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Purchase & Sales</h5>
                                <div class="graph-sets">
                                    <ul>
                                        <li>
                                            <span>Sales</span>
                                        </li>
                                        <li>
                                            <span>Purchase</span>
                                        </li>
                                    </ul>
                                    <div class="dropdown">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            2022 <img src="assets/img/icons/dropdown.svg" alt="img" class="ms-2">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="sales_charts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Recent Users</h4>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="dropset">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="{{ route('users.list')}}" class="dropdown-item">User List</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('new.user')}}" class="dropdown-item">User Add</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive dataview">
                                    <table class="table datatable ">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                     @foreach ($latestUsers as $latestUser)
                                    <tr>
                                        
                                        <td>{{ $latestUser->name}}</td>
                                        <td>{{ $latestUser->email}}</td>
                                        <td>{{ $latestUser->status}}</td>
                                        <td>{{ $latestUser->phone}}</td>
                                    </tr>
                                    @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Products</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                       
                                        <th>Product Name</th>
                                        <th>Product SKU</th>
                                         <th>Price</th>
                                        <th>Brand Name</th>
                                         <th>Main Store</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     
                                    @foreach ($latestProducts as $product)
                                    <tr>
                                        
                                        <td><a>{{ $product->name}}</a></td>
                                        <td class="productimgname">
                                            
                                            <a href="">{{ $product->SKU}}</a>
                                        </td>
                                        <td>{{ $product->price}}</td>
                                        <td>{{ $product->Brand_id}}</td>
                                        <td>{{ $product->MainStore}}</td>
                                    </tr>
                                    @endforeach
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      @endif

    @endif
  </div>


</x-app-layout>
