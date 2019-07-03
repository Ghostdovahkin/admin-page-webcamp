$(document).ready(function () {
    $('#guardar-registro').on('submit', function(e){
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
     console.log(data);
    console.log(resultado); // mostramos los resultados en consola
    if (resultado.respuesta == 'exito') {
      swal(
        'Correcto!',
        'Se guardo correctamente',
        'success'
      )
      
    } else {
    swal(
                 'Error!',
                 'Hubo un error',
                 'error'
    
    )
      }
    }
    })
    });
    //se ejecuta cuando hay un archivo
    $('#guardar-registro-archivo').on('submit', function(e){
      //Evitamos que abra el archivo del action insert-admin.php porque lo vamos a solicitar por ajax
      e.preventDefault();
      // console.log("Click!!");
      var datos = new FormData(this);
      // console.log(datos);
      $.ajax({
      type: $(this).attr('method'), // leemos el metodo de envio POST
      data: datos, // indicamos los datos recavados del formulario
      url: $(this).attr('action'),  // a donde se van a enviar los datos
      datatype: 'json', // el tipo de dato a enviar
      contentType: false,
      processData: false,
      async: true,
      cache: false,
      success: function(data) {     // cuando la llamada sea exitosa con data retornamos 
      var resultado = JSON.parse(data);       // guardamos los datos en una variable
       console.log(data);
      console.log(resultado); // mostramos los resultados en consola
      if (resultado.respuesta == 'exito') {
        swal(
          'Correcto!',
          'Se guardo correctamente',
          'success'
        )
        
      } else {
      swal(
                   'Error!',
                   'Hubo un error',
                   'error'
      
      )
        }
      }
      })
      });
   
    $('.borrar_registro').on('click', function(e){
      e.preventDefault();//cancela la apertura de una posible ventana
      var id = $(this).attr('data-id');
      var tipo = $(this).attr('data-tipo');
      swal({
        title: 'Estás Seguro?',
        text: "Esto no se puede deshacer!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borrar!!',
        cancelButtonText: 'No, Cancelar',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false,
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
        $.ajax({
                        type:'post',
                        data: {
                            id: id,
                            registro : 'eliminar'
                        },
                        url: 'modelo-'+tipo+'.php',
                        success: function(data){
                          console.log(data);
                            var resultado = JSON.parse(data);
                            if(resultado.respuesta == 'exito'){
                                swal(
                                    'Eliminado!',
                                    'Se eliminó el registro de la dase de datos.',
                                    'success'
                                )
                                jQuery('[data-id="'+resultado.id_eliminado+'"]').parents('tr').remove();
                            }                       
                        }
                   })
        } else if (result.dismiss === 'cancel') {
          swal(
            'Cancelado',
            'No se eliminó el registro',
            'error'
          )
        }
      })
  });
});
    