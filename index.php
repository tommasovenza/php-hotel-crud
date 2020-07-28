<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/partials/header.php'; ?>

  <main>

        <?php if(isset($_GET['uproom'])) { ?>
           <p>stanza numero <?php echo $_GET['uproom']; ?> aggiornata con successo</p>
        <?php } ?>

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
                  <td>
                    <a href="<?php echo $base_path . '/show/show.php?id=' . $stanza['id']; ?>">View</a>

                    <a href="<?php echo $base_path . '/update/edit.php?id=' . $stanza['id']; ?>">Update</a>

                    <form action="<?php echo $base_path . '/delete/delete.php'; ?>" method="post">
                      <input type="hidden" name="formid" value="<?php echo $stanza['id'] ?>">
                      <input type="submit" value="Delete">
                    </form>
                  </td>
                </tr>  

             <?php } ?>

          </tbody>
  
        </table>
        <!-- fine lista stanze -->

  </main>


    
</body>
</html>