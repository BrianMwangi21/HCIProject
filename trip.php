<?php
    session_start();
    // Check for any data
    if( isset( $_POST['filter_trip_btn'] ) ) {
        extract($_POST);
        $_SESSION['travelAdv'] = $tripFilter;
        header("location:trip.php");
    }

    // Create DB connection to use to run query
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
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eManamba | Trip Advisory</title>

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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color:#fff;">
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
            <a class="nav-link js-scroll-trigger" href="trip.php" style="color:black">Trip advisory</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <section class="content-section text-left" style="padding-top:100px;padding-bottom:20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                <div>
                    <form method="POST"  enctype="multipart/form-data" >
                        <div class="row" style="padding-bottom:20px;">
                            <div class="col-sm-7" >
                                <input type="text" class="form-control" placeholder="Enter town to filter" name="tripFilter">
                            </div>
                            <div class="col-sm-5" >
                                <button type="submit" class="btn btn-primary mb-2" name="filter_trip_btn">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Hotel Name</th>
                                <th>Hotel Description</th>
                                <th>Rates (per night)</th>
                                <th>Town</th>
                                <th>Contacts</th>
                            </tr>
                        </thead>
                            <?php
                                if( !isset($_SESSION['travelAdv']) || $_SESSION['travelAdv'] == '' ) {
                                    $selectquery = 'SELECT * FROM `traveladvisory`';
                                    
                                    foreach( $pdo->query($selectquery) as $row ) {
                                        echo "<tr>";
                                        echo "<td>" . $row['hotelName'] . "</td>";
                                        echo "<td style='width:500px'>" . $row['hotelDescription'] . "</td>";
                                        echo "<td>" . $row['hotelRates'] . "</td>";
                                        echo "<td>" . $row['hotelTown'] . "</td>";
                                        echo "<td>" . $row['hotelContact'] . "</td>";
                                        echo "</tr>";
                                    }
                                }else {
                                    $selectquery = "SELECT * FROM `traveladvisory` WHERE `hotelTown` = :query";
                                    $stmt = $pdo->prepare($selectquery);
                                    $stmt->bindValue(':query', $_SESSION['travelAdv']);
                                    $res = $stmt->execute();

                                    if( $res ) {
                                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                            echo "<tr>";
                                            echo "<td>" . $row['hotelName'] . "</td>";
                                            echo "<td style='width:500px'>" . $row['hotelDescription'] . "</td>";
                                            echo "<td>" . $row['hotelRates'] . "</td>";
                                            echo "<td>" . $row['hotelTown'] . "</td>";
                                            echo "<td>" . $row['hotelContact'] . "</td>";
                                            echo "</tr>";
                                        }   
                                    }else {
                                        echo "<tr>";
                                        echo "<td>No results to show</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>