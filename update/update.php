<?php
include __DIR__ . '/../database.php';

$room_id = $_POST['roomid'];
$room_number = $_POST['roomnumber'];
$room_floor = $_POST['roomfloor'];
$room_beds = $_POST['roombeds'];

$sql = "UPDATE `stanze` SET `room_number` = $room_number, `floor` =  $room_floor, `beds` = $room_beds, `updated_at` = NOW() WHERE `id` = $room_id";

$result = $conn->query($sql);

if($result) {

    header('Location: ' . $base_path . '?uproom=' . $room_number);

} else {

    die('query error');
}

?>