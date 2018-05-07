function espaciosVacios() {

  var nombre = document.getElementById('nombre').value;
  var edad = document.getElementById('edad').value;

  if (nombre.length == 0) {
    alert("Error,  rellena el campo nombre");
    return false;
  }

  if (edad.length == 0) {
    alert("Error, rellena el campo edad");
    return false;
  }

  if (edad > 6 || edad <0) {
      alert("Edad entre 1 y 6");
      return false;
  }
}
