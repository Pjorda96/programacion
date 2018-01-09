<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RETO-Bucles</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <div class="w3-container">
      <h1>RETO - Bucles</h1>
      <div class="w3-card-4" style="width:50%;">
        <header class="w3-container w3-blue">
          <h1>For</h1>
        </header>
        <div class="w3-container">
          <p>
            <?php
              for ($i=1; $i <= 10; $i++) {
                echo ($i*2)." ";
              }
            ?>
          </p>
        </div>
      </div>
      <div class="w3-card-4" style="width:50%;">
        <header class="w3-container w3-blue">
          <h1>While</h1>
        </header>
        <div class="w3-container">
          <p>
            <?php
              $i=1;
              while ($i <= 10) {
                echo ($i*2)." ";
                $i++;
              }
            ?>
          </p>
        </div>
      </div>
      <div class="w3-card-4" style="width:50%;">
        <header class="w3-container w3-blue">
          <h1>Do-While</h1>
        </header>
        <div class="w3-container">
          <p>
            <?php
              $i=1;
              do {
                echo ($i*2)." ";
                $i++;
              } while ($i <= 10);
            ?>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
