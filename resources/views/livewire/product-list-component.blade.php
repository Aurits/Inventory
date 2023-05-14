<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product List</h4>
                    <h6>Manage your products</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('add.product')}}" class="btn btn-added"><img src="{{ asset('assets/img/icons/plus.svg')}}" alt="img" class="me-1">Add New Product</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ asset('assets/img/icons/filter.svg')}}" alt="img">
                                    <span><img src="{{ asset('assets/img/icons/closes.svg')}}" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{ asset('assets/img/icons/search-white.svg')}}" alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ asset('assets/img/icons/pdf.svg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ asset('assets/img/icons/excel.svg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ asset('assets/img/icons/printer.svg')}}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-0" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose Product</option>
                                                    <option>Macbook pro</option>
                                                    <option>Orange</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose Category</option>
                                                    <option>Computers</option>
                                                    <option>Fruits</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose Sub Category</option>
                                                    <option>Computer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Brand</option>
                                                    <option>N/D</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12 ">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Price</option>
                                                    <option>150.00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-sm-6 col-12">
                                            <div class="form-group">
                                                <a class="btn btn-filters ms-auto"><img src="{{ asset('assets/img/icons/search-whites.svg')}}" alt="img"></a>
                                            </div>
                                        </div>
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
                                    <th>SKU</th>
                                    <th>Category </th>
                                    <th>Brand</th>
                                    <th>price</th>
                                    <th>MainStore</th>
                                    <th>Store2</th>
                                    <th>Store3</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($products as $product)
                                <tr>
                        
                                    <td class="productimgname">
                                        
                                        {{$product->name}}
                                    </td>
                                    <td>{{$product->SKU}}</td>
                                    <td>{{$product->category_id}}</td>
                                    <td>{{$product->Brand_id}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->MainStore}}</td>
                                    <td>{{$product->Store2}}</td>
                                    <td>{{$product->Store3}}</td>
                                    
                                    <td class="d-flex">
                                        <a class="me-3" href="product-details.html">
                                            <img src="{{ asset('assets/img/icons/eye.svg')}}" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="{{ asset('assets/img/icons/edit.svg')}}" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="{{ asset('assets/img/icons/delete.svg')}}" alt="img">
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
    @push('scripts')

    @endpush

</div>