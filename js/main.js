// Variables que almacenaran los campos del formulario
let nombre, descripcion, categoria, precio;
// Boton submit que envia metodo POST
const btn_submit = document.getElementById('btn-submit');


///////////////////////////////////////////////////////////////////////////////////////
// Variable encargada de validar si los campos están vacíos
/*
  1. Traer los campos del formulario con su atributo value y textContent 
  2. Si los cuatro campos son true a vacío retorna false y no envía método POST
*/
function validar(){
  nombre = document.getElementById('nombre').value;
  descripcion = document.getElementById('descripcion').value;
  categoria = document.getElementById('categoria').value;
  precio = document.getElementById('precio').value;

  if (nombre === '' || descripcion === '' || categoria === '' || precio === '') {
    alert('Todos los campos son requeridos.');
    return false;
  }

}

//////////////////////////////////////////////////////////////////////////////////////
// Variable encargada de activar y desactivar el botón submit
/*
  1. Traer los campos del formulario con su atributo value
  2. Validar que length de su atributo value sea mayor a 0, así detecta contenido en el campo y activa el botón, en caso de ser 0 se desactiva nuevamente
*/
function activar(){
  nombre = document.getElementById('nombre');
  descripcion = document.getElementById('descripcion');
  categoria = document.getElementById('categoria');
  precio = document.getElementById('precio');

  if (nombre.value.length > 0 || descripcion.value.length > 0 || categoria.value.length || precio.value.length) {
    btn_submit.disabled=false;
  }else{
    btn_submit.disabled=true;
  }
}