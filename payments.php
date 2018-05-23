<?php
    session_start();
    include 'OAuth.php';

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

    // Start PESAPAL mambo
    $token = $params = NULL;

	/*
	PesaPal Sandbox is at http://demo.pesapal.com. Use this to test your developement and 
	when you are ready to go live change to https://www.pesapal.com.
	*/
	$consumer_key = 'qliUOlVyFvwhXxDyl5unibH/tlACQ9QU';
	$consumer_secret = 'BEKdgClhqcPAbKENZN0qoy9llXE=';
	$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
	$iframelink = 'http://demo.pesapal.com/api/PostPesapalDirectOrderV4';//change to      
	                   //https://www.pesapal.com/API/PostPesapalDirectOrderV4 when you are ready to go live!

	//get form details
	$amount = $_SESSION['totalamount'];
	$amount = number_format($amount, 2);//format amount to 2 decimal places

	$desc = 'This is a demo transaction';
	$type = 'MERCHANT';
	$reference = $_SESSION['cartreference'];
	$first_name = 'Brian';
	$last_name = 'Mwangi';
	$email = 'brian.kabiru@strathmore.edu';
	$phonenumber = '';

	$callback_url = 'index.php'; //redirect url, the page that will handle the response from pesapal.

	$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.pesapal.com\" />";
	$post_xml = htmlentities($post_xml);

	$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

	//post transaction to pesapal
	$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
	$iframe_src->set_parameter("oauth_callback", $callback_url);
	$iframe_src->set_parameter("pesapal_request_data", $post_xml);
	$iframe_src->sign_request($signature_method, $consumer, $token);

	//display pesapal - iframe and pass iframe_src
	// PesaPal ends here
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eManamba | Payments</title>

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

                    <iframe src="<?php echo $iframe_src;?>" width="100%" height="700px"  scrolling="no" frameBorder="0">
                        <p>Browser unable to load iFrame</p>
                    </iframe>

                </div>
            </div>
        </div>
    </section>

</body>
</html>