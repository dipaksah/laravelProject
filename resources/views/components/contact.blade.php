<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <link type="text/css" rel="stylesheet" href="resources/css/style.css"/>
    <link type="text/css" rel="stylesheet" href="resources/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="resources/js/bootstrap.bundle"/>
    <link type="text/css" rel="stylesheet" href="resources/js/bootstrap.js.map"/>

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

</head>
<body>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Services</h1>
    </div>


    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                </div>
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Booking Form</h6> 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div>
                        <form method="POST" action="{{ route('service') }}">
                            @csrf
                            
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="date" type="date" class="form-control @error('date')
                                           is-invalid @enderror" name="date" value="{{ old('date') }}"
                                           required autocomplete="date" autofocus placeholder="date">

                                        @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="location" type="text" class="form-control @error('location')
                                           is-invalid @enderror" name="location" value="{{ old('location') }}"
                                           required autocomplete="location" placeholder="location ">
    
                                            @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0">
                                    <label for="time">Setup Your Time schedule From $ TO</label>
                                </div>
                                <div class="col-sm-1 mb-3 mb-sm-0">
                                    <label for="to">From</label>
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <input id="time1From" type="time" class="form-control @error('time1From')
                                           is-invalid @enderror" name="time1From" value="{{ old('time1From') }}"
                                           required autocomplete="time1From" autofocus placeholder="time1From">

                                        @error('time1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="col-sm-1 mb-3 mb-sm-0">
                                    <label for="to">TO</label>
                                </div>
                                <div class="col-sm-4">
                                    <input id="time2To" type="time" class="form-control @error('time2To')
                                        is-invalid @enderror" name="time2To" value="{{ old('time2To') }}"
                                           required autocomplete="timtime2Toe2" autofocus placeholder="time2To">

                                    @error('time2')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> 
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Contact !!') }}
                            </button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
</body>
</html>