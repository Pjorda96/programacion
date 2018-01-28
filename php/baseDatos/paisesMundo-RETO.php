<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paises del mundo</title>
    <style>
      * {
        box-sizing: border-box;
      }
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
      }

      li {
          float: left;
      }

      li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }

      li a:hover:not(.active) {
          background-color: #111;
      }
      .active {
          background-color: #4CAF50;
      }
      .column {
        float: left;
        padding: 10px;
        height: 30px;
      }
      .left {
        width: 25%;
      }
      .right {
        width: 75%;
      }
    </style>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php $pantalla="superficie"; ?>
    <ul>
      <li><a class="<?php if ($pantalla=="superficie") echo "active";?>" href="paisesMundo-RETO.php">Superficie</a></li>
      <li><a class="<?php if ($pantalla=="jap") echo "active";?>" href="paisesMundo-RETO-2.php">Japón</a></li>
    </ul>
    <h1>Paises del mundo</h1>
    <h3>Ordenados por Superficie</h3>
    <div id="myfirstchart" style="height: 250px;">
      <?php
      $world=new mysqli("localhost","root","","world");
      if ($world->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $world->connect_error;
      } else {
        //interactuar con la base de datos
        $resultado = $world->query("select Name, SurfaceArea from country order by SurfaceArea desc");
      }
      ?>
    </div>
    <script type="text/javascript">
    Morris.Bar({
      // ID of the element in which to draw the chart.
      element: 'paisesMundo',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: [
        <?php foreach($resultado as $fila):?>
          { y: '<?=$fila['Name']?>', a: <?=$fila['SurfaceArea']?>},
        <?php endforeach; ?>
      ],
      // The name of the data record attribute that contains x-values.
      xkey: 'y',
      // A list of names of data record attributes that contain y-values.
      ykeys: ['a'],
      // Labels for the ykeys -- will be displayed when you hover over the
      // chart.
      labels: ['Área']
    });
    </script>
  </body>
</html>
