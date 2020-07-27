<?php include __DIR__ . '/database.php'; ?>
<?php // var_dump($database); ?>

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
            </tr>
          </thead>

          <tr>
            <td>4</td>
            <td>96</td>
            <td>88</td>
          </tr>  

          <tr>
            <td>4</td>
            <td>96</td>
            <td>88</td>
          </tr> 

          <tr>
            <td>4</td>
            <td>96</td>
            <td>88</td>
          </tr> 

        </table>
        <!-- fine lista stanze -->

  </main>


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