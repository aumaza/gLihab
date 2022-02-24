<?php include "../connection/connection.php";
      include "lib_nomencladores.php";
      
           
      if($conn){
      
      // captura las variables
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      $importe = mysqli_real_escape_string($conn,$_POST['importe']);
      
      // convierte a mayusculas cada string
      $importe = floatval($importe);
      
      // verifica que no estén null
      if($importe == ''){
         echo 5; // hay campos vacios
      }else{
        
            if(is_float($importe)){
                // si todo es correcto añade el nuevo registro
                updateImporteCategoria($id,$importe,$conn);
            }else{
                echo 9; // el importe debe ser un valor con decimales
            }
            
        
    }
    }else{
        echo 13; //error de conexion
    }





?>
