<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figuritas</title>
  </head>
  <body>
    <div class="fig1">
      <h4>Figura 1: Muy muy sencilla</h4>
      <?php
      $i=1;
      $j=1;
      while ($i <= 5) {
        echo "*"."<br>";
        $i++;
      }
      ?>
    </div>
    <div class="fig2">
      <h4>Figura 2: Sencilla</h4>
      <?php
      for ($i=1; $i <= 5; $i++) {
        for ($j=1; $j <= 5; $j++) {
          echo "*";
        }
        echo "<br>";
      }
      ?>
    </div>
    <div class="fig3">
      <h4>Figura 3: Sencilla</h4>
      <?php
      for ($i=1; $i <= 7; $i++) {
        for ($j=1; $j <= $i; $j++) {
          echo "*";
        }
        echo "<br>";
      }
      ?>
    </div>
    <div class="fig4">
      <h4>Figura 4: Normal</h4>
      <?php
      for ($i=0; $i <= 2; $i++) {
        echo "*";
        for ($j=1; $j <= ($i*2); $j++) {
          echo "*";
        }
        echo "<br>";
      }
      for ($i=2; $i > 1; $i--) {
        echo "*";
        for ($j=2; $j >= 1; $j--) {
          echo "*";
        }
        echo "<br>";
      }
      echo "*"."<br>";
      ?>
      <!-- Tengo que intentarlo con recursividad -->
    </div>
    <div class="fig5">
      <h4>Figura 5: Normal</h4>
      <?php
      $k=5;
      for ($i=1; $i <= $k; $i++) {
        for ($j=1; $j <= ($k-$i); $j++) {
          echo "_";
        }
        for ($j=1; $j < $i; $j++) {
          echo "*";
        }
        echo "*";
        for ($j=1; $j < $i; $j++) {
          echo "*";
        }
        for ($j=1; $j <= ($k-$i); $j++) {
          echo "_";
        }
        echo "<br>";
      }
      ?>
    </div>
  </body>
</html>
