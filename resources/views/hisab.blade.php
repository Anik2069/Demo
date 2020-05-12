<!DOCTYPE html>
<html lang="en">


<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ostore - Atlas Software Park</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico'/>
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
                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                             class="nav-link nav-link-lg message-toggle"><i
                            data-feather="bell"></i>
                        <span class="badge headerBadge1">
                6 </span> </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                        <div class="dropdown-header">
                            Notifications
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-message">
                            <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
                      text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                                        class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                                                                                         src="assets/img/user.png"
                                                                                                         class="user-img-radious-style">
                        <span class="d-sm-none d-lg-inline-block"></span></a>
                    <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">Hello Sarah Smith</div>
                        <a href="profile.html" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Profile
                        </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                            Activities
                        </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                            Settings
                        </a>
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
            @include('nav')
        </div>
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-body card">
                    <div class="row">
                        <div class="card-header">
                            <h6><b>Accounts Report</b></h6>
                        </div>
                        <div class="card-body">
                            <form action="/showreport" method="GET">
                                @csrf
                                <div class="form-row">

                                    <div class="form-group col-md-3">
                                        <label>Starting Date</label>
                                        <input type="text" name='d1' class="form-control datepicker">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Ending Date</label>
                                        <input type="text" name='d2' class="form-control datepicker">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Action</label>
                                        <input type="submit" class="form-control btn btn-primary" value="search">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    @if($total!=0)
                        <div class="row">
                            @foreach($value as $val)
                                <input type="hidden" value="{{$total1=0}}">
                                <input type="hidden" value="{{$total2=0}}">
                                <input type="hidden" value="{{$q1=0}}">
                                <input type="hidden" value="{{$q2=0}}">


                                        @foreach($value1 as $va)
                                        @if($val['productName']==$va['product_name'])
                                        <input type="hidden"
                                               value="{{$total1=$total1+$va['buyingamount']*$va['buying']}}">
                                        @if($va['unit']=="Pata")
                                            <input type="hidden"
                                                   value="{{$q1=$q1+$va['buyingamount']/$val['counter']}}">
                                        @else
                                            <input type="hidden" value="{{$q1=$q1+$va['buyingamount']}}">
                                        @endif
                                    @endif
                                        @endforeach
                                @foreach($value2 as $v)


                                    @if($val['productName']==$v['product_name'])
                                        <input type="hidden" value="{{$total2=$total2+$v['total']}}">
                                        @if($v['unit']=="Pata")
                                            <input type="hidden"
                                                   value="{{$q2=$q2+$v['selling']/$val['counter']}}">
                                        @else
                                            <input type="hidden" value="{{$q2=$q2+$v['selling']}}">
                                        @endif
                                    @endif

                                @endforeach
                                @if($total1!= 0 || $total2 != 0)
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Product Name: {{$val['productName']}}</h4>
                                            </div>
                                            <div class="card-body">
                                                <h5>Total Buying : {{$total1}} TK</h5> <br>
                                                <h5>Total Buying Quantity: {{$q1}} Box</h5> <br>
                                                <h5>Total Selling  : {{$total2}} TK</h5> <br>
                                                <h5>Total Buying Quantity: {{$q2}} Box</h5> <br>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <hr>
                </div>
                @endif
            </section>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModal">ট্রান্সেকশন অ্যাড করুন</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="">
                                <div class="form-group">
                                    <label>তারিখ</label>
                                    <input type="text" class="form-control datepicker">
                                </div>
                                <div class="form-group">
                                    <label>ব্যাংকের নাম নির্বাচন করুন</label>
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option value="">DBBL</option>
                                        <option value="">Agrani Bank</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>অ্যাকাউন্ট নাম্বার</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" disabled name="number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>অপারেশন</label>
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option value="">ডিপোজিট</option>
                                        <option value="">উইথড্র</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>টাকার পরিমাণ</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="টাকার পরিমাণ লিখুন"
                                               name="number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>মারফৎ</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="কার্য সম্পাদকের নাম লিখুন"
                                               name="name">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">লিপিবদ্ধ করুন</button>
                            </form>
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
<script src="assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>
