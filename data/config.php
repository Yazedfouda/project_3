<?php 

$dsn = 'mysql:host=localhost;dbname=project'; // Data Source Name

$user = 'root'; // The User To Connect

$pass = ''; // Password for This User

try {

  $con = new PDO($dsn, $user, $pass); // Start A New Connection With PDO Class

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch(PDOException $e) {

    echo 'Failed' . $e->getMessage();

}
