<?php
    session_start();

    if( !isset( $_SESSION['vehicle'] ) ) {
        header("location:shuttles.php");
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

    if( !empty( $_GET["action"] ) ) {
		switch ($_GET["action"]) {
            case 'book':
                $regPlate = $_GET['vehicle'];
                $pass = $_GET['pass'];

                $_SESSION['cartreference'] = $regPlate;

                if( $_SESSION['vehicle'] == 'buses' ) {
                    $_SESSION['totalamount'] = $pass * 400;
                }else if ( $_SESSION['vehicle'] == 'shuttles' ) {
                    $_SESSION['totalamount'] = $pass * 300;
                }

                header("location:payments.php");
                break;
            default:
                break;
        }
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
            <a class="nav-link js-scroll-trigger" href="accomodation.php" style="color:black">Accomodation</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="trip.php" style="color:black">Advisory</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <section class="content-section text-left" style="padding-top:100px;padding-bottom:20px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h4>Results</h4>

            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Vehicle Plate</th>
                            <th>Departure Town</th>
                            <th>Departure Date</th>
                            <th>Destination Town</th>
                            <th>Return Date</th>
                            <th>Available Seats</th>
                        </tr>
                    </thead>
                        <tr>
                            <?php
                                if( $_SESSION['vehicle'] == 'buses' ) {
                                    $selectquery = 'SELECT * FROM `buses` WHERE `departureTown` = :dTown AND `departureDate` = :dDate AND `destinationTown` = :desTown';
                                }else if( $_SESSION['vehicle'] == 'shuttles' ) {
                                    $selectquery = 'SELECT * FROM `shuttles` WHERE `departureTown` = :dTown AND `departureDate` = :dDate AND `destinationTown` = :desTown';
                                }
                                $stmt = $pdo->prepare($selectquery);
                                $stmt->bindValue(':dTown', $_SESSION['departTown']);
                                $stmt->bindValue(':dDate', $_SESSION['departDate']);
                                $stmt->bindValue(':desTown', $_SESSION['destinationTown']);
                                $res = $stmt->execute();

                                if( $res ) {
                                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                        echo "<tr>";
                                        echo "<td>" . $row['regPlate'] . "</td>";
                                        echo "<td>" . $row['departureTown'] . "</td>";
                                        echo "<td>" . $row['departureDate'] . "</td>";
                                        echo "<td>" . $row['destinationTown'] . "</td>";
                                        echo "<td>" . $row['returnDate'] . "</td>";
                                        echo "<td>" . $row['capacity'] . "</td>";
                                        ?>
                                        <form method="POST" action="results.php?action=book&vehicle=<?php echo $row['regPlate'] ?>&pass=<?php echo $_SESSION['passengers'] ?>">
                                            <td>
                                                <Button type="submit" class='btn btn-primary'>Book for <?php echo $_SESSION['passengers'] ?> </button> 
                                            </td>
                                        </form>
                                        <?php
                                        echo "</tr>";
                                    }   
                                }else {
                                    echo "<tr>";
                                    echo "<td>No results to show</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tr>
                </table>
            </div>

            <div style="padding-top:50px">
                <?php
                    if( $_SESSION['vehicle'] == 'buses' ) {
                        echo "<h6> Results for shuttles taking similar route : </h6>";
                        $selectquery = 'SELECT * FROM `shuttles` WHERE `departureTown` = :dTown AND `departureDate` = :dDate AND `destinationTown` = :desTown';
                    }else if( $_SESSION['vehicle'] == 'shuttles' ) {
                        echo "<h6> Results for buses taking similar route : </h6>";
                        $selectquery = 'SELECT * FROM `buses` WHERE `departureTown` = :dTown AND `departureDate` = :dDate AND `destinationTown` = :desTown';
                    }
                ?>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Vehicle Plate</th>
                            <th>Departure Town</th>
                            <th>Departure Date</th>
                            <th>Destination Town</th>
                            <th>Return Date</th>
                            <th>Available Seats</th>
                        </tr>
                    </thead>
                        <tr>
                            <?php
                                $stmt = $pdo->prepare($selectquery);
                                $stmt->bindValue(':dTown', $_SESSION['departTown']);
                                $stmt->bindValue(':dDate', $_SESSION['departDate']);
                                $stmt->bindValue(':desTown', $_SESSION['destinationTown']);
                                $res = $stmt->execute();

                                if( $res ) {
                                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                        echo "<tr>";
                                        echo "<td>" . $row['regPlate'] . "</td>";
                                        echo "<td>" . $row['departureTown'] . "</td>";
                                        echo "<td>" . $row['departureDate'] . "</td>";
                                        echo "<td>" . $row['destinationTown'] . "</td>";
                                        echo "<td>" . $row['returnDate'] . "</td>";
                                        echo "<td>" . $row['capacity'] . "</td>";
                                        ?>
                                        <form method="POST" action="results.php?action=book&vehicle=<?php echo $row['regPlate'] ?>&pass=<?php echo $_SESSION['passengers'] ?>">
                                            <td>
                                                <Button type="submit" class='btn btn-primary'>Book for <?php echo $_SESSION['passengers'] ?> </button> 
                                            </td>
                                        </form>
                                        <?php
                                        echo "</tr>";
                                    }   
                                }else {
                                    echo "<tr>";
                                    echo "<td>No results to show</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tr>
                </table>                
            </div>

          </div>
        </div>
      </div>
    </section>

</body>
</html>