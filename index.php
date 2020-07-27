<?php include __DIR__ . '/database.php'; ?>
<?php include __DIR__ . '/partials/header.php'; ?>

  <main>

        <!-- lista stanze -->
        <table class="rooms-list">
          <thead>
            <tr>
              <th>ID</th>
              <th>Numero stanza</th>
              <th>Piano </th>
              <th>Vista</th>
            </tr>
          </thead>

          <tbody>

             <?php foreach ($database as $stanza) { ?>

                <tr>
                  <td><?php echo $stanza['id']; ?></td>
                  <td><?php echo $stanza['room_number']; ?></td>
                  <td><?php echo $stanza['floor']; ?></td>
                  <td><a href="">View</a></td>
                </tr>  

             <?php } ?>

          </tbody>
  
        </table>
        <!-- fine lista stanze -->

  </main>


  


        


    
    
</body>
</html>