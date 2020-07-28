<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>



<main>
    <h2> Modifica stanza numero 123</h2>

    <form action="<?php echo $base_path . '/update/update.php'; ?>" method="post">

       <input type="hidden" name="roomid" value="<?php echo $room['id']; ?>"> 

       <div>
        <label>Numero di stanza</label>
        <input type="text" name="roomnumber" value="<?php echo $room['room_number']; ?>"> 
       </div>

       <div>
        <label>Piano</label>
        <input type="text" name="roomfloor" value="<?php echo $room['floor']; ?>"> 
       </div>

       <div>
        <label>Posti letto</label>
        <input type="text" name="roombeds" value="<?php echo $room['beds']; ?>"> 
       </div>
       
       <div>
        <input type="submit" value="Salva">
       </div>
    </form>
</main>