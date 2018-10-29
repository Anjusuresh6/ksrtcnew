
<!doctype html>
<html lang="en">
<?php
include_once("../includes/connection.php");
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
     <link href="../assets/css/fontawesome-all.min.css" rel="stylesheet">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">My KSRTC</a>
       <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin Panel</a>
     <!--  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">
                  <i class="fas fa-home"></i>
                  Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">
                  <i class="fas fa-user"></i>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="stationmaster_registration.php">
                  <span data-feather="shopping-cart"></span>
                  <i class="fas fa-user-circle"></i>

                  StationMaster Add
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="busdetails.php">
                  <span data-feather="users"></span>
                  <i class="fas fa-bus"></i>

                  Bus Details
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="busedit.php">
                  <span data-feather="users"></span>
                  <i class="fas fa-bus"></i>

                  Bus Edit
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="depotdetails.php">
                  <span data-feather="bar-chart-2"></span>
                  <i class="fas fa-landmark"></i>
                  Depot Details
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  <i class="far fa-edit"></i>
                   Complaints
                </a>
              </li>
            


            <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  <i class="fas fa-book"></i>
                  Booking
                </a>
              </li>
            

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
       
