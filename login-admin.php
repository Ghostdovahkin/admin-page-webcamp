<?php
if(isset($_POST['login-admin'])) {
   $usuario = $_POST['usuario'];
   $password = $_POST['password'];
   
   try{
    include_once 'funciones/funciones.php';
    $stmt = $conn->prepare("SELECT * FROM admins WHERE usuario = ?;");
    $stmt->bind_param("s" , $usuario);
    $stmt->execute();
    $stmt->bind_result($id, $usuario_admin , $nombre_admin ,  $password_admin , $editado ,$nivel);
    if($stmt->affected_rows){
        $existe = $stmt->fetch();
        if($existe){ 
           if(password_verify($password, $password_admin)){
               session_start();
               $_SESSION['usuario'] = $usuario_admin;
               $_SESSION['nombre'] = $nombre_admin;
               $_SESSION['nivel'] = $nivel;
               $_SESSION['id'] = $id; 
               $respuesta = array(
                   
                       'respuesta' => 'exitoso',
                       'usuario' => 'nombre_admin'
                   );
               
           }else {
               $respuesta = array(
                   'respuesta' => 'password_incorrecto'
               );
           }
        } else {
            $respuesta = array(
                'respuesta' => 'no_existe'
            );
        }
    }
    $stmt->close();
    $conn->close();
   }catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}
die(json_encode($respuesta));
   }
