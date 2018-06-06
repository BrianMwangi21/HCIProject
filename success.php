<?php
    session_start();
    
  die(var_dump($_SESSION));    

    // Pesapal manenoes
    $reference = null;
	  $pesapal_tracking_id = null;
    if(isset($_GET['pesapal_merchant_reference'])) {
      $reference = $_GET['pesapal_merchant_reference'];
    }
    if(isset($_GET['pesapal_transaction_tracking_id'])){
      $pesapal_tracking_id = $_GET['pesapal_transaction_tracking_id']; 
    }

    // Save order to the DB
    $pdo = null;
    $dsn = "mysql:host=localhost;dbname=emanamba;";
    $options = [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    try {
        $pdo = new PDO($dsn, "root", "", $options);
    }catch( PDOException $e) {
        error_log($e->getMessage());
        exit('Something went wrong. Try again');
    }

    $tripTypeOptions = $_SESSION['tripType'];
    $fromSelectGroup = $_SESSION['departTown'];
    $fromDate = $_SESSION['departDate'];
    $toSelectGroup = $_SESSION['destinationTown'] ;
    $returnDate = $_SESSION['returnDate'];
    $numPass = $_SESSION['passengers'];
    $fullnames = $_SESSION['fullnames'];

    die(var_dump($_SESSION));


    $statement = 'INSERT INTO `tickets`(`tripTypeOption`, `fromTown`, `fromDate`, `toTown`, `toDate`, `passengers`, `fullnames`,`ref`,`trackingID`) VALUES (?,?,?,?,?,?,?,?,?)';
    $stmt = $pdo->prepare($statement);
    $response = $stmt->execute([$tripTypeOptions, $fromSelectGroup, $fromDate, $toSelectGroup, $returnDate, $numPass, $fullnames, $reference, $pesapal_tracking_id]);

    if( !$response ) {
      echo "Failed to save!";
    }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eManamba</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/eManamba.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">eManamba</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="buses.php" >Bus Booking</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="shuttles.php" >Shuttles</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="accomodation.php" >Accomodation</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="trip.php" >Advisory</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="brand-heading">Booking Successful!</h2>
              <p class="intro-text">Under the name, <?php echo $_SESSION['fullnames']; ?>
                <br>Safiri Salama</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
