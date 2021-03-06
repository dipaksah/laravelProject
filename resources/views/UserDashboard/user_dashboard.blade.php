<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cleaning Service AdminDashboard</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> 
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <!-- Custom fonts for this template-->
     <link href="{{asset('/customAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
 
     <!-- Custom styles for this template-->
     <link href="{{asset('/customAuth/css/sb-admin-2.min.css')}}" rel="stylesheet">
 
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>

<style>
    .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }

  /** rating **/
  div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}

.ratings_vote {
    background: url('star_full.png') no-repeat;
}
.ratings_over {
    background: url('star_highlight.png') no-repeat;
}
/** end rating **/
}
</style>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-2">Service Users </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{'admin_dashboard'}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span> User Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Users</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">User Interact:</h6>
                    <a class="collapse-item" href="{{'/services'}}">Services</a>
                    <a class="collapse-item" href="{{'/booked'}}">Booked</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Utilities</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="utilities-color.html">Colors</a>
                    <a class="collapse-item" href="utilities-border.html">Borders</a>
                    <a class="collapse-item" href="utilities-animation.html">Animations</a>
                    <a class="collapse-item" href="utilities-other.html">Other</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->

        <!-- Nav Item - Logout -->
        <li class="nav-item">
            <a class="nav-link" href="{{'logout'}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                         alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler ?? 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                         alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun ?? 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                         alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                         alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                            {{--                            <img class="img-profile rounded-circle"--}}
                            {{--                                 src="img/undraw_profile.svg">--}}
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
            {{-- <script>
                $('#addStar').change('.star', function(e) {
                $(this).submit();
                });
            </script> --}}
     {{-- Start Edit Model for customer --}}
            <form  >
                @csrf
             <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLable" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="madal-title" id="exampleModalLable">Customer Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                                                    
                            <div class="modal-body" id="editForm">
                                <div class="row">
                                    <div class="col-75">
                                      <div class="container">
                                        <form action="/action_page.php">
                                  
                                          <div class="row">
                                            <div class="col-50">
                                              <h3>Billing Address</h3>
                                              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                              <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                              <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                              <input type="text" id="email" name="email" placeholder="john@example.com">
                                              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                              <label for="city"><i class="fa fa-institution"></i> City</label>
                                              <input type="text" id="city" name="city" placeholder="New York">
                                  
                                              <div class="row">
                                                <div class="col-50">
                                                  <label for="state">State</label>
                                                  <input type="text" id="state" name="state" placeholder="NY">
                                                </div>
                                                <div class="col-50">
                                                  <label for="zip">Zip</label>
                                                  <input type="text" id="zip" name="zip" placeholder="10001">
                                                </div>
                                              </div>
                                            </div>
                                  
                                            <div class="col-50">
                                              <h3>Payment</h3>
                                              <label for="fname">Accepted Cards</label>
                                              <div class="icon-container">
                                                {{-- <i class="fab fa-cc-visa"></i> --}}
                                                <i class="fab fa-cc-visa" style="color:navy;"></i>
                                                <i class="fab fa-cc-amex" style="color:blue;"></i>
                                                <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                                <i class="fab fa-cc-discover" style="color:orange;"></i>
                                              </div>
                                              <label for="cname">Name on Card</label>
                                              <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                              <label for="ccnum">Credit card number</label>
                                              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                              <label for="expmonth">Exp Month</label>
                                              <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                  
                                              <div class="row">
                                                <div class="col-50">
                                                  <label for="expyear">Exp Year</label>
                                                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                                                </div>
                                                <div class="col-50">
                                                  <label for="cvv">CVV</label>
                                                  <input type="text" id="cvv" name="cvv" placeholder="352">
                                                </div>
                                              </div>
                                            </div>
                                  
                                          </div>
                                          <label>
                                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                                          </label>
                                          <input type="submit" value="Continue to Pay" class="btn">
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                    </div>
                 </div>
             </div>
            </form>
{{-- End Edit Model for customer --}}

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> User Dashboard</h1>
                </div>


                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">User History (Orders)</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover table-dark">
                                      <thead>
                                        <tr>
                                          <th><strong>Date</strong></th>
                                          <th><strong>(Time) From</strong></th>
                                          <th><strong>(Time) TO</strong></th>
                                          <th><strong>Location</strong></th>
                                          <th><strong>Service</strong></th>
                                          <th><strong>No.OF.Cleaner</strong></th>
                                          <th><strong>Total Rate</strong></th>
                                          <th><strong>Action</strong></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            @foreach($orders as $result)
                                                <tr>  
                                                    <td>{{ $result->date }}</td>
                                                    <td>{{ $result->time1From }}</td>
                                                    <td>{{ $result->time2To }}</td>
                                                    <td>{{ $result->location }}</td>
                                                    <td>{{ $result->service }}</td>
                                                    <td>{{ $result->NoFcleaner }}</td>
                                                    <td>
                                                        {{ $result->Total_Rate }}
                                                    </td>
                                                    <td>
                                                        <a href="" type="button"
                                                        class="btn btn-primary"
                                                        data-toggle="modal" data-target="#editModal"
                                                        >Pay Now !</a>
                                                    </td>
                                                    <td>
                                                        <a href="" type="button"
                                                        class="btn btn-primary"
                                                        data-toggle="modal" data-target="#reviewModal{{ $result->id }}"
                                                        >Review !</a>
                                                    </td>

                                                    <div class="modal fade" id="reviewModal{{ $result->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLable" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                           <div class="modal-content">
                                                               <div class="modal-header">
                                                                   <h5 class="madal-title" id="exampleModalLable">Customer Reviews</h5>
                                                                   <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                                                       <span aria-hidden="true">&times;</span>
                                                                   </button>
                                                               </div>
                                                                                           
                                                                   <div class="modal-body" id="editForm">
                                                                       <div class="row">
                                                                           <div class="col-75">
                                                                             <div class="container">
                                                                              
                                                                                     <form method="POST" action="{{ route('review') }}" enctype="multipart/form-data" >
                                                                                       @csrf
                                                                                       <input type="text" name="booking_id" value="{{ $result->id }}" hidden >
                                                                                       
                                                                                       <div class="modal-body" id="editForm">

                                                                
                                                                                            <div class="form-group">
                                                                                                <label for="">Rate This</label>
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                                        <div class="">
                                                                                                            <select class="selectpicker" name="star">
                                                                                                              <option value="Available Cleaner">Select Number of Star as Review :</option>
                                                                                                              <option value="1">1 Star <i class="fa divya fa-star-o"></i></option>
                                                                                                              <option value="2">2 Star</option>
                                                                                                              <option value="3">3 Star</option>
                                                                                                              <option value="4">4 Star</option>
                                                                                                              <option value="5">5 Star</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                             </div>
                                                                                         {{-- <div class="star-rating" onClick="addreview">
                                                                                             <span class="fa divya fa-star-o rate" data-rating="1" id="add" style="font-size:20px;"></span>
                                                                                             <span class="fa fa-star-o rate" data-rating="2" id="add" style="font-size:20px;"></span>
                                                                                             <span class="fa fa-star-o rate" data-rating="3"  id="add"style="font-size:20px;"></span>
                                                                                             <span class="fa fa-star-o rate" data-rating="4" id="add" style="font-size:20px;"></span>
                                                                                             <span class="fa fa-star-o rate" data-rating="5" id="add" style="font-size:20px;"></span>
                                                                                             <input type="hidden" name="whatever3" class="rating-value" id="total" value="1">
                                                                                         </div>
                                                                                         <script>
                                                                                             function addreview()
                                                                                             {
                                                                                                var a = document.getElementById('add');
                                                                                                console.log(a);
                                                                                             }
                                                                                             </script> --}}
                                                                                         </div>

                                                                                           <div class="form-group">
                                                                                               <label for="review">review</label>
                                                                                               <textarea type="text" name="reviews" id="reviews" placeholder="Enter Your Reviews" class="form-control"></textarea>
                                                                                           </div>

                                                                                           <div class="form-group">
                                                                                            <input type="file" name="image"  placeholder="Enter Your Reviews" class="form-control"/>
                                                                                           </div>
                                           
                                                                                           <div class="modal-footer">
                                                                                               <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                                                                               <button type="submit" class="btn btn-primary">Submit Review</button>
                                                                                           </div>
                                                                                           {{-- @endforeach --}}
                                                                                       </div>
                                                                                     </form>                                 
                                           
                                                                        
                                                                             </div>
                                                                           </div>
                                                                         </div>
                                                                   </div>
                                                           </div>
                                                        </div>

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
            <!-- /.container-fluid -->
       
        <!-- End of Main Content -->
  

         {{-- Start review for customer --}}
        
        
         
{{-- End review for customer --}}


        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 202</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">??</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('/customAuth/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/customAuth/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('/customAuth/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('/customAuth/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('/customAuth/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('/customAuth/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('/customAuth/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
