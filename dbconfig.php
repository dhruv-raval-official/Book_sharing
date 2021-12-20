<?php
	$severName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "book_sharing";
    $con = mysqli_connect($severName,$userName,$password,$databaseName);
    
    $crdb = "CREATE DATABASE IF NOT EXISTS $databaseName;";

    $dbResult = mysqli_query($con, $crdb);
?>
