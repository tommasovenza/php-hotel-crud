<?php include __DIR__ . '/database.php'; ?>
<?php // var_dump($database); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB test</title>
</head>
<body>

  <?php if ( !isset( $database['error'] ) ) { ?>

    <ul>
        <?php foreach ($database as $stanza) { ?>
            
            <li> 
                <div>ID: <?php echo $stanza['id']; ?></div>
                <div>Room Number: <?php echo $stanza['room_number']; ?></div>   
                <div>Floor: <?php echo $stanza['floor']; ?></div>
                <div>Beds: <?php echo $stanza['beds']; ?></div>
            </li>

        <?php } ?>
    </ul>

  <?php } ?>
    
</body>
</html>