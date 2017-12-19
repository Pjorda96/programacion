<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Amunt Valencia</title>
    <style>
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
</style>
  </head>
  <body>
    <?php $pantalla="news";
    ?>
    <ul>
      <li><a class="<?php if ($pantalla=="home") echo "active";?>" href="index.php">Home</a></li>
      <li><a class="<?php if ($pantalla=="news") echo "active";?>" href="news.php">News</a></li>
      <li><a class="<?php if ($pantalla=="contact") echo "active";?>" href="contact.php">Contact</a></li>
      <li style="float:right"><a href="#about">About</a></li>
    </ul>
    <h1>El Valencia gana la liga</h1>
    <p>El valencia ganan la liga por tercer año consecutivo y el Madrid queda al borde del descenso.</p>

  </body>
</html>
