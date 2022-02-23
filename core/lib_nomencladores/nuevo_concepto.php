<?php include "../connection/connection.php";
      include "lib_nomencladores.php";
      
           
      if($conn){
      
      $tipo_concepto = mysqli_real_escape_string($conn,$_POST['tipo_concepto']);
      $descripcion = mysqli_real_escape_string($conn,$_POST['descripcion']);
      $porcentaje = mysqli_real_escape_string($conn,$_POST['porcentaje']);
      
           
      if(($tipo_concepto == '') ||
            ($descripcion == '') || 
                ($porcentaje == '')){
                    
                        echo 5; // hay campos vacios
                    
    }else{
        addNewConcepto($tipo_concepto,$descripcion,$porcentaje,$conn);
    }
    }else{
        echo 13; //error de conexion
    }





?>
