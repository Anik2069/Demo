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


    <link rel="stylesheet" href="{{'assets'}}/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="{{'assets'}}/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="{{'assets'}}/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="{{'assets'}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="{{'assets'}}/css/app.min.css">
    <link rel="stylesheet" href="{{'assets'}}/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{'assets'}}/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="{{'assets'}}/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{'assets'}}/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{'assets'}}/css/style.css">
    <link rel="stylesheet" href="{{'assets'}}/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{'assets'}}/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='{{'assets'}}/img/favicon.ico'/>
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
                                                                                                         src="assets/img/user.png"
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
            @include('nav')
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






                    </div>
                    <div class="row">
                        <div class="col-12 col-md-5 col-lg-5">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Selling Product</h4>
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
                                                <th>Group Name</th>
                                                <th>Product Name</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($name1 as $val)
                                                <tr>
                                                    <td>
                                                        {{$c=$c+1}}
                                                    </td>
                                                    <td>   {{$val['groupName']}}</td>
                                                    <td>   {{$val['productName']}}</td>

                                                    <td>

                                                        <button type="button" name="add"
                                                                onclick="tomcat(this.id)"
                                                                id="{{$val['id']}}"
                                                                class="btn btn-danger add">
                                                            Add

                                                            <input type="hidden" id="bb{{$val['id']}}"
                                                                   value="{{$val['productName']}}">
                                                            <input type="hidden" id="bb1{{$val['id']}}"
                                                                   value="{{$val['selling']}}">
                                                            <input type="hidden" id="bb2{{$val['id']}}"
                                                                   value="{{$val['perpata']}}">
                                                        </button>

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
                        <div class="col-12 col-md-7 col-lg-7">
                            <div class="card">
                                <form method="post" action="/submittoday">
                                    @csrf
                                    <div class="card-header">

                                        <h4>List of Selected Product</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md" id="item_table">

                                                <tr>
                                                    <th>#</th>
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                    <th>SelectUnit</th>
                                                    <th>Price</th>

                                                    <th>Action</th>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <h4 id="totalPrice"></h4>
                                    </div>
                                    <div class="buttons" align="center">
                                        <button id="btn909" type="submit" class="btn btn-success">
                                            <h6>Sell Today !!</h6>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
            var tt;
            var tt1;
            var tt3;
            var total = 0;
            var totalpre = [];
            var tt2 = 0;

            function tomcat(click_id) {
                tt = click_id;
                tt1 = click_id;
                tt2 = tt2 + 1;
                tt3 = click_id;
            }

            function tomcat2(c, c1) {
                c = parseInt(c);
//alert("clicked"+c +"   tome");
                // var nn2 = $('#' + c).val();
                // total= chek+ total;
                if (totalpre[c] == null) {
                    var nn = "v" + c;
                    var nn2 = $('#' + nn).val();
                    total = nn2 * c1 + total;
                    totalpre[c] = nn2 * c1;
                    //alert(totalpre[c]);
                    document.getElementById("totalPrice").innerHTML = "Total Price: " + total + " TK";
                } else {

                    total = total - totalpre[c];
                    var nn = "v" + c;
                    // alert("else working!!" + nn);

                    var nn2 = $('#' + nn).val();
                    total = nn2 * c1 + total;
                    totalpre[c] = nn2 * c1;
                    // alert(totalpre[c]);
                    document.getElementById("totalPrice").innerHTML = "Total Price: " + total + " TK";

                }

            }

            function tomcat4(c) {
                //alert(c);

                total = total - totalpre[c];
                $("#" + c).attr("disabled", false);
                document.getElementById("totalPrice").innerHTML = "Total Price:" + total + " TK";
                totalpre[c] = 0;
            }

            function tomcat5(c, c1) {
                if (c1 == "Box") {
                    var kk = $('#bb1' + c).val();
                    document.getElementById("drop" + c).value = kk;
                    document.getElementById("v" + c).value = kk;
                    document.getElementById("0" + c).value = 0;


                } else {
                    var kk = $('#bb2' + c).val();
                    document.getElementById("drop" + c).value = kk;
                    document.getElementById("v" + c).value = kk;
                    document.getElementById("0" + c).value = 0;
                }
                c = parseInt(c);
                if (totalpre[c] != null) {
                    total = total - totalpre[c];
                    document.getElementById("totalPrice").innerHTML = "Total Price: " + total + " TK";
                    totalpre[c] = 0;
                }
            }

            $(document).ready(function () {

                $(document).on('click', '.add', function () {

                    var nn = 'bb' + tt;
                    var nn1 = 'bb1' + tt;
                    nn1 = 'bb2' + tt;
                    var check = $('#' + nn).val();

                    var check1 = $('#' + nn1).val();
                    alert(check);
                    var html = '';
                    html += '<tr>';
                    html += '<td>' + tt2 + '</td>';
                    html += '<td><input type="text" name="n1" value="' + check + '" disabled class="form-control item_quantity" /></td>';
                    html += '<td><input type="number" id="0' + tt + '" name="q' + tt2 + '" class="form-control item_quantity" onkeyup="tomcat2(this.id,this.value)" required/></td>';
                    html += '' +
                        '' + '<td><select id="' + tt3 + '" name="dp' + tt2 + '" onchange="tomcat5(this.id,this.value)" ><option value="Pata">Pata</option><option value="Box">Box</option></select></td>' +
                        '<td><input type="text" name="n2" id="drop' + tt3 + '" value="' + check1 + '" disabled class="form-control item_quantity" /></td>' +

                        '<input type="hidden"  id="v' + tt + '"  name ="v' + tt2 + '" value="' + check1 + '"  class="form-control item_quantity" />' +
                        '<input type="hidden"   name ="counter" value="' + tt2 + '"  class="form-control item_quantity" />' +
                        '<input type="hidden" name ="n' + tt2 + '" value="' + check + '" class="form-control item_quantity" />';
                    html += '<td><button type="button" id="' + tt1 + '" onclick="tomcat4(this.id)" name="remove" class="btn btn-danger btn-sm remove"><span class="fas fa-minus"></span></button></td></tr>'
                    ;
                    $('#item_table').append(html);
                    $("#" + tt).attr("disabled", true);

                });

                $(document).on('click', '.remove', function () {
                    $(this).closest('tr').remove();
                });

                $('#insert_form').on('submit', function (event) {
                    event.preventDefault();
                    var error = '';
                    $('.item_name').each(function () {
                        var count = 1;
                        if ($(this).val() == '') {
                            error += "<p>Enter Item Name at " + count + " Row</p>";
                            return false;
                        }
                        count = count + 1;
                    });

                    $('.item_quantity').each(function () {
                        var count = 1;
                        if ($(this).val() == '') {
                            error += "<p>Enter Item Quantity at " + count + " Row</p>";
                            return false;
                        }
                        count = count + 1;
                    });

                    $('.item_unit').each(function () {
                        var count = 1;
                        if ($(this).val() == '') {
                            error += "<p>Select Unit at " + count + " Row</p>";
                            return false;
                        }
                        count = count + 1;
                    });
                    var form_data = $(this).serialize();
                    if (error == '') {
                        $.ajax({
                            url: "insert.php",
                            method: "POST",
                            data: form_data,
                            success: function (data) {
                                if (data == 'ok') {
                                    $('#item_table').find("tr:gt(0)").remove();
                                    $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
                                }
                            }
                        });
                    } else {
                        $('#error').html('<div class="alert alert-danger">' + error + '</div>');
                    }
                });

            });

            function display() {
                var group = $('#inputState').val();
                $.ajax({
                    url: "/getdata",
                    type: 'GET',
                    data: {
                        group: group,
                    },
                    success: function (data) {
                        // alert(data);  data:'_token = php echo csrf_token() ?>',
                        $('#bangla').html(data);
                    }, error: function () {
                        alert('error');
                    }
                });
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
<script src="{{'assets'}}/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="{{'assets'}}/bundles/cleave-js/dist/cleave.min.js"></script>
<script src="{{'assets'}}/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="{{'assets'}}/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="{{'assets'}}/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{'assets'}}/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="{{'assets'}}/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="{{'assets'}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="{{'assets'}}/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="{{'assets'}}/bundles/datatables/datatables.min.js"></script>
<script src="{{'assets'}}/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="{{'assets'}}/js/page/datatables.js"></script>
<script src="{{'assets'}}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<!-- Page Specific JS File -->
<script src="{{'assets'}}/js/page/forms-advanced-forms.js"></script>
<!-- Template JS File -->
<script src="{{'assets'}}/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="{{'assets'}}/js/custom.js"></script>
<script src="{{'assets'}}/bundles/sweetalert/sweetalert.min.js"></script>
<!-- Page Specific JS File -->
<script src="{{'assets'}}/js/page/sweetalert.js"></script>
</body>


<!-- forms-advanced-form.html  21 Nov 2019 03:55:08 GMT -->
</html>
