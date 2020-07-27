<?php

include __DIR__ . '/database.php';

// ESECUZIONE PROGRAMMA
$sql = "SELECT * FROM `stanze`"; 
$results = $conn->query($sql); 

// se ho risultati dalla query
if($results && $results->num_rows > 0) { 

    $database = [];
    
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

$conn->close();


?>