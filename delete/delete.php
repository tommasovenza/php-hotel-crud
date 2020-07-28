<?php 

    include __DIR__ . '/../database.php';

    $room_id = $_POST['formid'];

    $sql = "DELETE FROM `stanze` WHERE `id` = $room_id";
    $results = $conn->query($sql);

        if(!$results) {
            die("eliminazione non effettuata a causa di un problema tecnico");
        }
?>

<?php include __DIR__ . '/../partials/header.php'; ?>

<main>
   <p>eliminazione avvenuta con successo</p>
</main> 



