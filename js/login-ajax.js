$(document).ready(function(){
  
})
$('#login-admin').on('submit', function(e){
      //Evitamos que abra el archivo del action insert-admin.php porque lo vamos a solicitar por ajax
      e.preventDefault();
      // console.log("Click!!");
      var datos = $(this).serializeArray();
      // console.log(datos);
      $.ajax({
      type: $(this).attr('method'), // leemos el metodo de envio POST
      data: datos, // indicamos los datos recavados del formulario
      url: $(this).attr('action'),  // a donde se van a enviar los datos
      datatype: 'json', // el tipo de dato a enviar
      success: function(data) {     // cuando la llamada sea exitosa con data retornamos 
      var resultado = JSON.parse(data);       // guardamos los datos en una variable
      if (resultado.respuesta == 'exitoso') {
        swal(
          'Login correcto',
          'bienvenido',
          'success'
        )
        setTimeout(function(){
          window.location.href = 'admin-area.php';
        }, 2000);
      } else {
      swal(
                   'Error!',
                   'Usuario o password incorrectos',
                   'error'
      
      )
        }
    
      }
    
    })
    
    });