function espaciosVacios() {

  var nombre = document.getElementById('nombre').value;
  var apellidos = document.getElementById('apellido').value;
  var edad = document.getElementById('edad').value;
  var curso = document.getElementById('curso').value;
  var usuario = document.getElementById('usuario').value;

  if (nombre.length == 0) {
    alert("Error,  rellena el campo nombre");
    return false;
  }

  if (apellidos.length == 0) {
    alert("Error, rellena el campo apellidos");
    return false;
  }

  if (edad.length == 0) {
    alert("Error, rellena el campo edad");
    return false;
  }

  if (curso.length == 0) {
    alert("Error, rellena el campo curso");
    return false;
  }

  if (usuario.length == 0) {
    alert("Error, rellena el campo usuario");
    return false;
  }

}
