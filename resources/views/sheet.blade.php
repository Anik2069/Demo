<!DOCTYPE html>
<html lang="en">


<!-- forms-advanced-form.html  21 Nov 2019 03:54:41 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ostore - Atlas Software Park</title>
    <!-- General CSS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../{{'assets'}}/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="../{{'assets'}}/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="../{{'assets'}}/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="../{{'assets'}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="../{{'assets'}}/css/app.min.css">
    <link rel="stylesheet" href="../{{'assets'}}/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../{{'assets'}}/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="../{{'assets'}}/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet"
          href="../{{'assets'}}/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="../{{'assets'}}/css/style.css">
    <link rel="stylesheet" href="../{{'assets'}}/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="../{{'assets'}}/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='../{{'assets'}}/img/favicon.ico'/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar sticky">
            <div class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                            <i data-feather="maximize"></i>
                        </a></li>
                    <li>
                        <form class="form-inline mr-auto">
                            <div class="search-element">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                       data-width="200">
                                <button class="btn" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                                        class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                                                                                         src="../assets/img/user.png"
                                                                                                         class="user-img-radious-style">
                        <span class="d-sm-none d-lg-inline-block"></span></a>
                    <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">Hello Sarah Smith</div>
                        <div class="dropdown-divider"></div>
                        <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i
                                class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="/"> <img alt="image" src="../assets/img/logo.png" class="header-logo" /> <span
                            class="logo-name">AI</span>
                    </a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Main Menu</li>
                    {{--   <li class="dropdown">
                           <a href="/" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                           <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                   data-feather="file-text"></i><span>Daily Work</span></a>
                           <ul class="dropdown-menu">
                               <li><a class="nav-link" href="/dailyWork">Order</a></li>
                               <li><a class="nav-link" href="/return">Return</a></li>
                           </ul>
                       </li>
                       <li class="dropdown">

                       </li>--}}
                    <li><a class="nav-link" href="/"><i data-feather="monitor"></i><span>Dashboard</span></a></li>
                    <li><a class="nav-link" href="/workhistory"><i data-feather="file-text"></i><span>Daily Sells</span></a></li>
                    <li><a class="nav-link" href="/workhistory_2"><i data-feather="file-text"></i><span>Product Entry</span></a></li>
                    <li><a class="nav-link" href="/all"><i data-feather="file-text"></i><span>Stock Update</span></a></li>
                    {{--
                            <li><a class="nav-link" href="/dsr"><i data-feather="user-plus"></i><span>DSR</span></a></li>
                    --}}
                    <li><a class="nav-link" href="/group"><i data-feather="award"></i><span>Group Add</span></a></li>
                    <li><a class="nav-link" href="/product"><i data-feather="plus-square"></i><span>Add Product Details</span></a></li>
                    <li class="menu-header">Additional</li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                data-feather="file-text"></i><span>All Record</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="/buyingrecord">Buying</a></li>
                            <li><a class="nav-link" href="/sellingrecord">Selling</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="/accounts"><i data-feather="settings"></i><span>Accounts</span></a></li>
                    <li><a class="nav-link" href="/cp"><i data-feather="settings"></i><span>Settings</span></a></li>
                    <li><a class="nav-link" href="/logout"><i data-feather="log-out"></i><span>Log Out</span></a></li>
                </ul>
            </aside>


        </div>
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">

                <div class="section-body">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif


                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card">

                                <div class="card-header">
                                    <h4>Product Details Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="py-4">
                                        <p class="clearfix">
                        <span class="float-left">
                        Name
                        </span>
                                            <span class="float-right text-muted">

                                {{$name['productName']}}
                       </span>
                                        </p>

                                        <p class="clearfix">
                        <span class="float-left">
                          Buying Price
                        </span>
                                            <span class="float-right text-muted">
                            {{$name['buying']}} BDT <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Change</button>
                        </span>
                                        </p>
                                        <p class="clearfix">
                        <span class="float-left">
                          Selling Price
                        </span>
                                            <span class="float-right text-muted">
                                                {{$name['selling']}} BDT  <button class="btn btn-warning" data-toggle="modal" data-target="#myModal1">Change</button>
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Buying Histroy</h4>
                                </div>

                                {{-- <div class="col-md-6">
                                     <div class="section-title">Select Product Cateogry</div>
                                     <div class="form-group">
                                         <select class="form-control select2" onchange="display()"  id="inputState"   name="selectgroup">
                                             <option>All Product</option>
                                             @foreach($name as $val)
                                                 <option value="{{$val['id']}}">{{$val['name']}}</option>
                                             @endforeach

                                         </select>
                                     </div>
                                 </div>--}}


                                {{--  <div class="section-title mt-0">Simple</div>--}}
                                {{--  <div class="card-body">
                                      <div class="table-responsive">
                                          <table class="table table-striped" id="table-1">
                                              <thead>
                                              <tr>
                                                  <th class="text-center">
                                                      #
                                                  </th>

                                                  <th>Product Name</th>

                                              </tr>
                                              </thead>
                                              <tbody>
                                              <tr>
                                                  <td>
                                                      h1
                                                  </td>
                                                  <td>
                                                      h2
                                                  </td>
                                              </tr>
                                              <Tr>

                                              </Tr>
                                              </tbody>
                                          </table>
                                          --}}{{--
                                                                                              @foreach($name1 as $na)
                                                                                                  <tr>
                                                                                                      <td>{{$na['id']}}</td>
                                                                                                      <td>Bal</td>

                                                                                                  </tr>
                                                                                              @endforeach--}}{{--

                                          --}}{{-- <button type="button" name="add"
                                                   onclick="tomcat(this.id)"
                                                   id="{{$na['id']}}"
                                                   class="btn btn-primary add">
                                               <h6 id="bb"> {{$na['productName']}}</h6> <span
                                                   class="badge badge-transparent">100</span>

                                               <input type="hidden" id="bb{{$na['id']}}"
                                                      value="{{$na['productName']}}">
                                               <input type="hidden" id="bb1{{$na['id']}}"
                                                      value="{{$na['selling']}}">
                                           </button>--}}{{--
                                          --}}{{--  <tr>
                                              <td>
                                                2
                                              </td>
                                              <td>Pran</td>
                                              <td>Juice</td>
                                              <td>2 Carton</td>
                                              <td>1500</td>
                                              <td>3000</td>
                                              <td><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                3
                                              </td>
                                              <td>Pran</td>
                                              <td>Juice</td>
                                              <td>2 Carton</td>
                                              <td>1500</td>
                                              <td>3000</td>
                                              <td><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                4
                                              </td>
                                              <td>Pran</td>
                                              <td>Juice</td>
                                              <td>2 Carton</td>
                                              <td>1500</td>
                                              <td>3000</td>
                                              <td><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                5
                                              </td>
                                              <td>Pran</td>
                                              <td>Juice</td>
                                              <td>2 Carton</td>
                                              <td>1500</td>
                                              <td>3000</td>
                                              <td><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <tr>
                                              <td>6</td>
                                              <td> <b>Total Amount</b> </td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td> <b>15000 BDT</b> </td>
                                              <td></td>
                                            </tr>--}}{{--


                                      </div>
                                  </div>--}}

                                <input type="hidden" value="{{$d=1}}">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                            <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Date</th>

                                                <th>Quantity</th>

                                                <th>Buying Price</th>

                                                <th>Total Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($name1 as $val)
                                                <tr>
                                                    <td>
                                                        {{$c=$c+1}}
                                                    </td>
                                                    <td>   {{$val['date']}}</td>
                                                    <td>
                                                        {{$val['buyingamount']}}    {{$val['unit']}}

                                                    </td>
                                                    <td>
                                                        {{$val['buying']}}
                                                     Tk

                                                    </td>
                                                    <td>  {{$val['buying']*$val['buyingamount']}} Tk</td>
                                                </tr>
                                            @endforeach
                                            <input type="hidden" value="{{$c=0}}">
                                            {{--  <tr>
                                                <td>
                                                  2
                                                </td>
                                                <td>Pran</td>
                                                <td>Juice</td>
                                                <td>2 Carton</td>
                                                <td>1500</td>
                                                <td>3000</td>
                                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  3
                                                </td>
                                                <td>Pran</td>
                                                <td>Juice</td>
                                                <td>2 Carton</td>
                                                <td>1500</td>
                                                <td>3000</td>
                                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  4
                                                </td>
                                                <td>Pran</td>
                                                <td>Juice</td>
                                                <td>2 Carton</td>
                                                <td>1500</td>
                                                <td>3000</td>
                                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  5
                                                </td>
                                                <td>Pran</td>
                                                <td>Juice</td>
                                                <td>2 Carton</td>
                                                <td>1500</td>
                                                <td>3000</td>
                                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                                              </tr>
                                              <tr>
                                                <td>6</td>
                                                <td> <b>Total Amount</b> </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td> <b>15000 BDT</b> </td>
                                                <td></td>
                                              </tr>--}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Selling Histroy</h4>
                                </div>

                                <input type="hidden" value="{{$d=1}}">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-2">
                                            <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th> Date</th>
                                                <th> Quantity</th>
                                                <th> Unit Price</th>
                                                <th> Total Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($name2 as $val)
                                                <tr>
                                                    <td>
                                                        {{$c=$c+1}}
                                                    </td>
                                                    <td>   {{$val['date']}}</td>
                                                    <td>
                                                        {{$val['selling']}}
                                                        {{$val['unit']}}

                                                    </td>
                                                    <td>
                                                        {{$val['unitprice']}} Tk

                                                    </td>

                                                    <td>
                                                        {{$val['total']}} Tk
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {{--  <tr>
                                                <td>
                                                  2
                                                </td>
                                                <td>Pran</td>
                                                <td>Juice</td>
                                                <td>2 Carton</td>
                                                <td>1500</td>
                                                <td>3000</td>
                                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  3
                                                </td>
                                                <td>Pran</td>
                                                <td>Juice</td>
                                                <td>2 Carton</td>
                                                <td>1500</td>
                                                <td>3000</td>
                                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  4
                                                </td>
                                                <td>Pran</td>
                                                <td>Juice</td>
                                                <td>2 Carton</td>
                                                <td>1500</td>
                                                <td>3000</td>
                                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  5
                                                </td>
                                                <td>Pran</td>
                                                <td>Juice</td>
                                                <td>2 Carton</td>
                                                <td>1500</td>
                                                <td>3000</td>
                                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                                              </tr>
                                              <tr>
                                                <td>6</td>
                                                <td> <b>Total Amount</b> </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td> <b>15000 BDT</b> </td>
                                                <td></td>
                                              </tr>--}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update Buying Price</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form  action="/changeb" method="post">@csrf
                                Previous Price: <input type="text" id="t1" name="t1" class="form-control" value="{{$name['buying']}}" disabled>
                                New Price: <input type="number" id="t2" name="t2" class="form-control"><br>
                                <input type="hidden" name="t3" value="{{$name['id']}}">
                                <button class="btn btn-primary"  type="submit">Submit</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit"  onClick="refreshPage()" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal" id="myModal1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update Selling Price</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form  action="/changes" method="post">@csrf
                                Previous Price: <input type="text" id="t1" name="t1" class="form-control" value="{{$name['selling']}}" disabled>
                                New Price: <input type="number" id="t2" name="t2" class="form-control"><br>
                                <input type="hidden" name="t3" value="{{$name['id']}}">
                                <button class="btn btn-primary"  type="submit">Submit</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit"  onClick="refreshPage()" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">l
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">কুইক সেল লিস্ট</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-2">
                                            <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>ইনভয়েস</th>
                                                <th>বিক্রির তারিখ</th>
                                                <th>টাকার পরিমান</th>
                                                <th>অ্যাকশন</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>#INV3213</td>
                                                <td>2018-01-20</td>
                                                <td>
                                                    5000
                                                </td>
                                                <td><a href="#" class="btn btn-icon btn-danger"><i
                                                            class="far fa-trash-alt"></i></a>
                                                    <a href="invoice.html" class="btn btn-icon btn-success"><i
                                                            class="fas fa-check"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>#INV3213</td>
                                                <td>2018-04-10</td>
                                                <td>
                                                    10000
                                                </td>
                                                <td><a href="#" class="btn btn-icon btn-danger"><i
                                                            class="far fa-trash-alt"></i></a>
                                                    <a href="invoice.html" class="btn btn-icon btn-success"><i
                                                            class="fas fa-check"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>#INV3213</td>
                                                <td>2018-01-29</td>
                                                <td>
                                                    25000
                                                </td>
                                                <td><a href="#" class="btn btn-icon btn-danger"><i
                                                            class="far fa-trash-alt"></i></a>
                                                    <a href="invoice.html" class="btn btn-icon btn-success"><i
                                                            class="fas fa-check"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="settingSidebar">
                <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                </a>
                <div class="settingSidebar-body ps-container ps-theme-default">
                    <div class=" fade show active">
                        <div class="setting-panel-header">আজকের সংক্ষিপ্ত বিবরণী
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">কুইক সেল</h6>
                            <div class="selectgroup layout-color w-50">
                                <h6 class="font-medium m-b-10">$ 5500 টাকা</h6>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">নগদ বিক্রি</h6>
                            <div class="selectgroup selectgroup-pills sidebar-color">
                                <h6 class="font-medium m-b-10">$ 5500 টাকা</h6>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">বাকিতে বিক্রি</h6>
                            <div class="theme-setting-options">
                                <h6 class="font-medium m-b-10">$ 5500 টাকা</h6>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">কিস্তিতে বিক্রি</h6>
                            <div class="theme-setting-options">
                                <h6 class="font-medium m-b-10">$ 5500 টাকা</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <script>
            function refreshPage(){
                window.location.reload();
            }
        </script>


        <footer class="main-footer">
            <div class="footer-left">
                <a href="https://www.atlassoftwarepark.com/" target="_blank">Atlas Software Park</a></a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </div>
</div>
<!-- General JS Scripts -->
<script src="../{{'assets'}}/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="../{{'assets'}}/bundles/cleave-js/dist/cleave.min.js"></script>
<script src="../{{'assets'}}/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="../{{'assets'}}/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="../{{'assets'}}/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../{{'assets'}}/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="../{{'assets'}}/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="../{{'assets'}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="../{{'assets'}}/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="../{{'assets'}}/bundles/datatables/datatables.min.js"></script>
<script src="../{{'assets'}}/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="../{{'assets'}}/js/page/datatables.js"></script>
<script src="../{{'assets'}}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<!-- Page Specific JS File -->
<script src="../{{'assets'}}/js/page/forms-advanced-forms.js"></script>
<!-- Template JS File -->
<script src="../{{'assets'}}/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="../{{'assets'}}/js/custom.js"></script>
<script src="../{{'assets'}}/bundles/sweetalert/sweetalert.min.js"></script>
<!-- Page Specific JS File -->
<script src="../{{'assets'}}/js/page/sweetalert.js"></script>
</body>


<!-- forms-advanced-form.html  21 Nov 2019 03:55:08 GMT -->
</html>
