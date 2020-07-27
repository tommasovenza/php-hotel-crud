<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'nuovo_db_hotel';

    // connect
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check connection
    if($conn && $conn->connect_error) {
        $database = [
            'error' => $conn->connect_error
        ];
    } else {
        // ESECUZIONE PROGRAMMA
        $sql = "SELECT * FROM `stanze`"; 
        $results = $conn->query($sql);

        $database = [];

        // se ho risultati dalla query
        if($results && $results->num_rows > 0) { 

            
            // per ogni riga faccio qualcosa...
            while($row = $results->fetch_assoc()) {
                $database[] = $row;
            }
        } elseif ($results) {
            $database = [];
        } else {
            $database = [
                'error' => 'query error, errore di sintassi'
            ];

        }
        // FINE ESECUZIONE PROGRAMMA
    } 


    $conn->close();



?>

