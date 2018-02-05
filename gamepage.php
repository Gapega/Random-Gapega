<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body><center>
    <?php $numero=1; $maxtentativi=7; 
    $random_number=mt_rand(1,100);
    echo $random_number;
    ?>
    <h1>
    Gioco dell'indovina numero    
    </h1>
    <p>
      Tentativo n.<?php echo $numero;?><br> <b>Inserisci il numero</b>
    </p>
    <p>
      <form action="" method="post">
    <input type="input"/><br>
        <input type="submit" value="Conferma" />
</form>
    </p>
    </center>
  </body>
</html>