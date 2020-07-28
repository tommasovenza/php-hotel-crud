<?php
include __DIR__ . '/../database.php';

$room_id = $_GET['id'];

$sql = "SELECT * FROM `stanze` WHERE `id` = $room_id";
$results = $conn->query($sql); 

if($results && $results->num_rows > 0) { 
    
    $room = $results->fetch_assoc();

} elseif ($results) {
    
    $room  = [];

} else {
    
     die('QUERY ERROR!');   
}
// FINE ESECUZIONE PROGRAMMA

$conn->close();

?>