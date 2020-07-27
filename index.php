<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean Hotel</title>

    <link rel="stylesheet" href="dist/app.css">
</head>
<body>

  <header>
    <h1>Boolean Hotel</h1>
  </header>

  <main>

        <!-- lista stanze -->
        <table class="rooms-list">
          <thead>
            <tr>
              <th>ID</th>
              <th>Numero stanza</th>
              <th>Piano </th>
              <th>Posti Letto</th>
            </tr>
          </thead>

          <?php if ( !isset( $database['error'] ) ) { ?>

             <?php foreach ($database as $stanza) { ?>
                <tr>
                  <td>ID: <?php echo $stanza['id']; ?></td>
                  <td>Room Number: <?php echo $stanza['room_number']; ?></td>
                  <td>Floor: <?php echo $stanza['floor']; ?></td>
                  <td>Beds: <?php echo $stanza['beds']; ?></td>
                </tr>  

             <?php } ?>

          <?php } ?>

        </table>
        <!-- fine lista stanze -->

  </main>


  


        


    
    
</body>
</html>