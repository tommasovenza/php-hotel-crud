<?php 
include __DIR__ . '/env.php';  

    // connect
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check connection
    if($conn && $conn->connect_error) {
        
        die("CONNECTION FAILED: " . $conn->connect_error);
    } 


?>

