<?php
    session_start();

    if( isset( $_SESSION['vehicle'] ) ) {
        var_dump( $_SESSION );
    }else {
        header("location:shuttles.php");
    }
?>