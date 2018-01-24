<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enviar Formulario</title>
  </head>
  <body>
    <form action="formularioRETO.php" method="post">
      <select name="Continent">
        <option value="">--Selecciona una--</option>
        <option value="Africa">Africa</option>
        <option value="Antartica">Antartica</option>
        <option value="Asia">Asia</option>
        <option value="Europe">Europe</option>
        <option value="North America">North America</option>
        <option value="Oceania">Oceania</option>
        <option value="South America">South America</option>
      </select><br>
      <input type="text" name="SurfaceArea" value="" placeholder="Escribe un superficie"><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
