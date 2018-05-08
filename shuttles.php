<?php
    // Array to hold all towns
    $towns_array = ["Bomet","Bondo","Bujumbura","Bumala","Bungoma","Busia","Chalinze","Dar Es Salaam","Eldoret","Garissa","Goma","Harare",
    "Homa Bay","Iganga","Isiolo","Jinja","Juba","Kabale","Kagitumba","Kaimosi","Kakamega","Kampala","Kanyaru","Kapsabet","Katuna","Kericho",
    "Kigali","Kilifi","Kisii","Kisoro","Kisumu","Kitale","Kitui","Lamu","Lilongwe","Lodwar","Lokichoggio","Luanda","Lubumbashi","Lusaka",
    "Machakos","Malaba","Malindi","Maseno","Matayos","Maua","Mbale","Mbarara","Meru","Migori","Mombasa","Mombo","Moshi","Moyale","Mumias",
    "Nairobi","Naivasha","Nakuru","Namanga","Narok","Ntugamo","Oyugis","Same","Segera","Siaya","Sirare","Tanga","Taveta","Ugunja","Voi","Webuye"];

    if( isset( $_POST['find_shuttle_btn'] ) ) {
        extract($_POST);

        // Save DATA in session and send to results page
        session_start();

        $_SESSION['vehicle'] = 'shuttles';
        $_SESSION['tripType'] = $tripTypeOptions;
        $_SESSION['departTown'] = $fromSelectGroup;
        $_SESSION['departDate'] = $fromDate;
        $_SESSION['destinationTown'] = $toSelectGroup;
        $_SESSION['returnDate'] = $returnDate;
        $_SESSION['passengers'] = $numPass;

        header("location:results.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eManamba | Shuttles</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css' />

    <!-- Custom styles for this template -->
    <link href="css/eManamba.min.css" rel="stylesheet" />

    <script>
        function handleRadio(options) {
            var return_date_input = document.getElementById("returnDate");

            if(options.value == "Onward Trip") {
                return_date_input.disabled = true;
            }else if(options.value = "Return Trip") {
                return_date_input.disabled = false;
            }
        }
    </script>
</head>

<body id="page-top" style="background-color:white;color:black" >

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

    <section class="content-section text-left" style="padding-top: 100px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h5>Find a shuttle :</h5>
            <p>
                <form method="POST" class="form-control" enctype="multipart/form-data" >
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tripTypeOptions" id="tripOption1" value="Onward Trip" onclick="handleRadio(this)">
                        <label class="form-check-label" for="tripOption1">Onward Trip</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tripTypeOptions" id="tripOption2" value="Return Trip" onclick="handleRadio(this)">
                        <label class="form-check-label" for="tripOption2">Return Trip</label>
                    </div>
                    <br><br>
                    <div class="row" >
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="fromSelectGroup" style="color:black">From :</label>
                                <select class="form-control" id="fromSelectGroup" name="fromSelectGroup" required>
                                    <option value="" selected disabled>Select your departure town</option>
                                    <?php
                                        // Loop through towns array
                                        for( $i = 0; $i < count($towns_array); ++$i) {
                                            echo "<option value='" . $towns_array[$i] . "' >" . $towns_array[$i] . "</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="fromDate" style="color:black">Date of departure:</label><br>
                                <input type="date" name="fromDate" required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" >
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="toSelectGroup" style="color:black">To :</label>
                                <select class="form-control" id="toSelectGroup" name="toSelectGroup" required>
                                    <option value="" selected disabled>Select your destination</option>
                                    <?php
                                        // Loop through towns array
                                        for( $i = 0; $i < count($towns_array); ++$i) {
                                            echo "<option value='" . $towns_array[$i] . "' >" . $towns_array[$i] . "</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="returnDate" style="color:black" >Date of return:</label><br>
                                <input type="date" name="returnDate" id="returnDate" disabled>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="padding-bottom:20px;">
                        <div class="col-sm-7" >
                            <input type="number" class="form-control" placeholder="Number of passengers" max="5" min="1" name="numPass" required>
                        </div>
                        <div class="col-sm-5" >
                            <button type="submit" class="btn btn-primary mb-2" name="find_shuttle_btn" >Find Shuttle</button>
                        </div>
                    </div>
                </form>
            </p>  
          </div>
        </div>
      </div>
    </section>
    
</body>
</html>