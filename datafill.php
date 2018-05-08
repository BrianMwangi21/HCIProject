<?php

    // Connect to the DB
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
    }finally{
        echo "Connected!<br>";
    }

    // Fill the DB with sample data
    $towns_array = ["Bomet","Bondo","Bujumbura","Bumala","Bungoma","Busia","Chalinze","Dar Es Salaam","Eldoret","Garissa","Goma","Harare",
    "Homa Bay","Iganga","Isiolo","Jinja","Juba","Kabale","Kagitumba","Kaimosi","Kakamega","Kampala","Kanyaru","Kapsabet","Katuna","Kericho",
    "Kigali","Kilifi","Kisii","Kisoro","Kisumu","Kitale","Kitui","Lamu","Lilongwe","Lodwar","Lokichoggio","Luanda","Lubumbashi","Lusaka",
    "Machakos","Malaba","Malindi","Maseno","Matayos","Maua","Mbale","Mbarara","Meru","Migori","Mombasa","Mombo","Moshi","Moyale","Mumias",
    "Nairobi","Naivasha","Nakuru","Namanga","Narok","Ntugamo","Oyugis","Same","Segera","Siaya","Sirare","Tanga","Taveta","Ugunja","Voi","Webuye"];
    $capacity1 = rand(6,16);
    $capacity2 = rand(6,16);


    // Loop through all towns, create at least one route for each pair
    for( $i = 0; $i < 10; ++$i ) {
        $departTown = $towns_array[$i];

        for( $j = $i+1; $j < 11; ++$j ) {
            $destinationTown = $towns_array[$j];

            $departureDate = "2018-05-15";
            $returnDate1 = "2018-05-" . (string)rand(20,26);
            $returnDate2 = "2018-05-" . (string)rand(20,26);

            $plate1 = getPlate();
            $plate2 = getPlate();

            // Populate the db
            $query = 'INSERT INTO `shuttles`(`regPlate`, `capacity`, `departureTown`, `departureDate`, `destinationTown`, `returnDate`) VALUES (?,?,?,?,?,?)';
            $stmt = $pdo->prepare($query);
            $response = $stmt->execute([$plate1, $capacity1, $departTown, $departureDate, $destinationTown, $returnDate1]);
            $response2 = $stmt->execute([$plate2, $capacity2, $departTown, $departureDate, $destinationTown, $returnDate2]);

            if( !$response ) {
                echo "Run into a wall";
            }
        }   
    }

    echo "All done!";
    

    function getPlate() {
        $letters = ['A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z']; 
        $len = sizeof( $letters ) - 1;
        return $plate = "KB" . $letters[rand(0, $len)] . " " . (string)rand(0,9) . (string)rand(0,9) . (string)rand(0,9) . $letters[rand(0, $len)];    
    }
?>