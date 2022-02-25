<?php include "../connection/connection.php";
      include "lib_gremios.php";
      
           
      if($conn){
      //creamos el objeto
      $gremio = new gremios();
      
      // captura de datos
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      $cod_gremio = mysqli_real_escape_string($conn,$_POST['cod_gremio']);
      $descripcion = mysqli_real_escape_string($conn,$_POST['descripcion']);
      
      // pasar a mayusculas
      $cod = strtoupper($cod_gremio);
      $nombre = strtoupper($descripcion);
      
      
      // se verifica que los datos no estén vacios
      if(($id == '') ||
            ($cod == '') ||
                ($nombre == '')){
                   echo 5; // hay campos vacios
                    
    }else{
        $gremio->updateGremio($id,$gremio,$cod,$nombre,$conn);
    }
    }else{
        echo 13; //error de conexion
    }





?>
