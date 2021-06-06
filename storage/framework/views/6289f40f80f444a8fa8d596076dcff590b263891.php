<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link type="text/css" rel="stylesheet" href="resources/css/style.css"/>
    <link type="text/css" rel="stylesheet" href="resources/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="resources/js/bootstrap.bundle"/>
    <link type="text/css" rel="stylesheet" href="resources/js/bootstrap.js.map"/>
    <!-- fontawesome icon -->
    <link type="text/css" rel="stylesheet" href="fontawesome-free-5.8.1-web\css\all.css">

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('/customAuth/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('/customAuth/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />

</head>

<style>
    .navbar-collapse ul li {
    color: #3ca845;
}
</style>

<body>

<!-- ***** Navigation Bar ***** -->
<nav class="navbar navbar-expand-xl navbar-light bg-light sticky-top" id="topbar" >
    <!-- Logo -->
    <div class="container-fluid">
        <img src="images/logo1.png" hight="180" width="180" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" data-target="#navbarResponsive"></span></button>
        <!-- Menu Area -->
        <div class="collapse navbar-collapse" id="ca-navbar">

            <ul class="navbar-nav ml-auto" id="nav">
                <li class="nav-item active"><a class="nav-link" href="index.php">
                        <i class="fas fa-home"></i>Home</a></li>

                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>

                <li class="nav-item"><a class="nav-link" href="instruction.php">Help</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

                <li class="nav-item search-box">
                    <input class="search-txt" type="text" placeholder="Type To Search.."/>
                    <a class="search-btn" class="nav-link" href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- ***** navigation end ***** -->


<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(asset('/customAuth/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('/customAuth/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo e(asset('/customAuth/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo e(asset('/customAuth/js/sb-admin-2.min.js')); ?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<!-- Core plugin JavaScript-->
<script src="<?php echo e(asset('/customAuth/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo e(asset('/customAuth/js/sb-admin-2.min.js')); ?>"></script>

</body>
</html>
<?php /**PATH D:\laravel\cleaning_service\resources\views/components/navigation.blade.php ENDPATH**/ ?>