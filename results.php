<?php
    session_start();

    if( !isset( $_SESSION['vehicle'] ) ) {
        header("location:shuttles.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eManamba | Results</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css' />

    <!-- Custom styles for this template -->
    <link href="css/eManamba.min.css" rel="stylesheet" />
</head>

<body id="page-top" style="background-color:white;color:black;" >

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php" style="color:black" >eManamba</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="buses.php" style="color:black" >Bus Booking</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="shuttles.php" style="color:black">Shuttles</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#tripadvisory" style="color:black">Trip advisory</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <section class="content-section text-left" style="padding-top: 100px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h5>Results :</h5>
          </div>
        </div>
      </div>
    </section>

</body>
</html>