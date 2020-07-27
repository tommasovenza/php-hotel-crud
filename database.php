<?php 
include __DIR__ . '/env.php';  

    // connect
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check connection
    if($conn && $conn->connect_error) {
        
        die("CONNECTION FAILED: " . $conn->connect_error);

    } else {

        // ESECUZIONE PROGRAMMA
        $sql = "SELECT * FROM `stanze`"; 
        $results = $conn->query($sql);

        // se ho risultati dalla query
        if($results && $results->num_rows > 0) { 

            // per ogni riga faccio qualcosa...
            while($row = $results->fetch_assoc()) {
                $database[] = $row;
            }
        } elseif ($results) {
            
            $database = [];

        } else {
            
             die('QUERY ERROR!');   
        }
        // FINE ESECUZIONE PROGRAMMA
    } 
    $conn->close();



?>

