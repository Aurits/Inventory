<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Inventory Management System</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css')}}">
  

<link rel="stylesheet" href="{{asset('assets/plugins/owlcarousel/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/owlcarousel/owl.theme.default.min.css')}}">





    @livewireStyles

     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

      
      <div class="header">
 
            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/img/logo.png')}}" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="{{ asset('assets/img/logo-small.png')}}" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="#">
                            <div class="searchinputs">
                                <input type="text" placeholder="Search Here ...">
                                <div class="search-addon">
                                    <span><img src="{{ asset('assets/img/icons/closes.svg')}}" alt="img"></span>
                                </div>
                            </div>
                            <a class="btn" id="searchdiv"><img src="{{ asset('assets/img/icons/search.svg')}}" alt="img"></a>
                        </form>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                        role="button">
                        <img src="{{ asset('assets/img/flags/us1.png')}}" alt="" height="20">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('assets/img/flags/us.png')}}" alt="" height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('assets/img/flags/fr.png')}}" alt="" height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('assets/img/flags/es.png')}}" alt="" height="16"> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('assets/img/flags/de.png')}}" alt="" height="16"> German
                        </a>
                    </div>
                </li>

         
               

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="{{ asset('assets/img/profiles/avator1.jpg')}}" alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="{{ asset('assets/img/profiles/avator1.jpg')}}" alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>{{ Auth::user()->name }}</h6>
                                    <h5>User</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="{{route('profile.edit')}}"> <i class="me-2" data-feather="user"></i> My
                                Profile</a>
                            
                            <hr class="m-0">
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        </div>
                    </div>
                </li>
            </ul>


          

        </div>


   

    @auth

      @if(Auth::user()->utype =='USR')

       <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="{{ route('dashboard')}}"><img src="{{ asset('assets/img/icons/dashboard.svg')}}" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/product.svg')}}" alt="img"><span>
                                    Product</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('product.list')}}">Product List</a></li>
                                <li><a href="{{ route('category.list')}}">Category List</a></li>
                                <li><a href="{{ route('brand.list')}}">Brand List</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/sales1.svg')}}" alt="img"><span>
                                    Sales</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('pos')}}">POS</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/purchase1.svg')}}" alt="img"><span>
                                    Purchase</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('purchase.list')}}">Purchase List</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/places.svg')}}" alt="img"><span>
                                    Places</span> <span class="menu-arrow"></span></a>
                            <ul>

                                <li><a href="{{ route('country.list')}}">Countries list</a></li>

                                <li><a href="{{ route('state.list')}}">State list</a></li>
                            </ul>
                        </li>
                       
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/product.svg')}}" alt="img"><span>
                                    Application</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('chat')}}">Chat</a></li>
                                <li><a href="{{ route('email')}}">Email</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/time.svg')}}" alt="img"><span>
                                    Report</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('purchase.report')}}">Purchase Report</a></li>

                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </div>


          <main>
                {{ $slot }}
            </main>

      @endif

       @if(Auth::user()->utype =='ADM')

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="{{ route('dashboard')}}"><img src="{{ asset('assets/img/icons/dashboard.svg')}}" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/product.svg')}}" alt="img"><span>
                                    Product</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('product.list')}}">Product List</a></li>
                                <li><a href="{{ route('add.product')}}">Add Product</a></li>
                                <li><a href="{{ route('category.list')}}">Category List</a></li>
                                <li><a href="{{ route('add.category')}}">Add Category</a></li>
                                <li><a href="{{ route('brand.list')}}">Brand List</a></li>
                                <li><a href="{{ route('add.brand')}}">Add Brand</a></li>
                                <li><a href="{{ route('print.barcode')}}">Print Barcode</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/sales1.svg')}}" alt="img"><span>
                                    Sales</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('sales.list')}}">Sales List</a></li>
                                <li><a href="{{ route('pos')}}">POS</a></li>
                                <li><a href="{{ route('new.sales')}}">New Sales</a></li>
                                <li><a href="{{ route('sales.return')}}">Sales Return List</a></li>
                                <li><a href="{{ route('newsales.return')}}">New Sales Return</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/purchase1.svg')}}" alt="img"><span>
                                    Purchase</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('purchase.list')}}">Purchase List</a></li>
                                <li><a href="{{ route('add.purchase')}}">Add Purchase</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/expense1.svg')}}" alt="img"><span>
                                    Expense</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('expense.list')}}">Expense List</a></li>
                                <li><a href="{{ route('add.expense')}}">Add Expense</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/quotation1.svg')}}" alt="img"><span>
                                    Quotation</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('quotation.list')}}">Quotation List</a></li>
                                <li><a href="{{ route('add.quotation')}}">Add Quotation</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/transfer1.svg')}}" alt="img"><span>
                                    Transfer</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('transfer.list')}}">Transfer List</a></li>
                                <li><a href="{{ route('add.transfer')}}">Add Transfer </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/return1.svg')}}" alt="img"><span>
                                    Return</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('add.transfer')}}">Sales Return List</a></li>
                                <li><a href="{{ route('createsalesreturn.list')}}">Add Sales Return </a></li>
                                <li><a href="{{ route('purchasereturn.list')}}">Purchase Return List</a></li>
                                <li><a href="{{ route('addpurchasereturn.list')}}">Add Purchase Return </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/users1.svg')}}" alt="img"><span>
                                    People</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('customer.list')}}">Customer List</a></li>
                                <li><a href="{{ route('add.customer')}}">Add Customer </a></li>
                                <li><a href="{{ route('supplier.list')}}">Supplier List</a></li>
                                <li><a href="{{ route('add.supplier')}}">Add Supplier </a></li>
                                <li><a href="{{ route('users.list')}}">User List</a></li>
                                <li><a href="{{ route('add.user')}}">Add User</a></li>
                                <li><a href="{{ route('store.list')}}">Store List</a></li>
                                <li><a href="{{ route('add.store')}}">Add Store</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/places.svg')}}" alt="img"><span>
                                    Places</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('new.country')}}">New Country</a></li>
                                <li><a href="{{ route('country.list')}}">Countries list</a></li>
                                <li><a href="{{ route('new.state')}}">New State </a></li>
                                <li><a href="{{ route('state.list')}}">State list</a></li>
                            </ul>
                        </li>
                       
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/product.svg')}}" alt="img"><span>
                                    Application</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('chat')}}">Chat</a></li>
                                <li><a href="{{ route('calender')}}">Calendar</a></li>
                                <li><a href="{{ route('email')}}">Email</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/time.svg')}}" alt="img"><span>
                                    Report</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('purchaseorder.report')}}">Purchase order report</a></li>
                                <li><a href="{{ route('inventory.report')}}">Inventory Report</a></li>
                                <li><a href="{{ route('sales.list')}}">Sales Report</a></li>
                                <li><a href="{{ route('invoice.report')}}">Invoice Report</a></li>
                                <li><a href="{{ route('purchase.report')}}">Purchase Report</a></li>
                                <li><a href="{{ route('supplier.report')}}">Supplier Report</a></li>
                                <li><a href="{{ route('customer.report')}}">Customer Report</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/users1.svg')}}" alt="img"><span>
                                    Users</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('new.user')}}">New User </a></li>
                                <li><a href="{{ route('users.list')}}">Users List</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/settings.svg')}}" alt="img"><span>
                                    Settings</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('group.settings')}}">General Settings</a></li>
                                <li><a href="{{ route('group.permissions')}}">Group Permissions</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


          <main>
                {{ $slot }}
            </main>

      @endif

       @if(Auth::user()->utype =='SUP')

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="{{ route('dashboard')}}"><img src="{{ asset('assets/img/icons/dashboard.svg')}}" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/product.svg')}}" alt="img"><span>
                                    Product</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('product.list')}}">Product List</a></li>
                                <li><a href="{{ route('add.product')}}">Add Product</a></li>
                                <li><a href="{{ route('category.list')}}">Category List</a></li>
                                <li><a href="{{ route('add.category')}}">Add Category</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/sales1.svg')}}" alt="img"><span>
                                    Sales</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('sales.list')}}">Sales List</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/return1.svg')}}" alt="img"><span>
                                    Return</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('sales.return')}}">Sales Return List</a></li>
                            </ul>
                        </li>                       
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/product.svg')}}" alt="img"><span>
                                    Application</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('chat')}}">Chat</a></li>
                                <li><a href="{{ route('calender')}}">Calendar</a></li>
                                <li><a href="{{ route('email')}}">Email</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/time.svg')}}" alt="img"><span>
                                    Report</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('sales.list')}}">Sales Report</a></li>
                               
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


          <main>
                {{ $slot }}
            </main>

      @endif
      @endif

       
    </div>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{ asset('assets/js/feather.min.js')}}"></script>

    <script src="{{ asset('assets/js/jquery.slimscroll.min.js')}}"></script>

    <script src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/apexchart/chart-data.js')}}"></script>

    <script src="{{ asset('assets/js/script.js')}}"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

    <script src="{{ asset('assets/js/moment.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
 



<script src="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>





@livewireScripts
@stack('scripts')

</body>

</html>