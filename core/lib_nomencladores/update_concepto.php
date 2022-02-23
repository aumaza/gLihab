<?php include "../connection/connection.php";
      include "lib_nomencladores.php";
      
           
      if($conn){
      
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      $cod_concepto = mysqli_real_escape_string($conn,$_POST['cod_concepto']);
      $tipo_concepto = mysqli_real_escape_string($conn,$_POST['tipo_concepto']);
      $descripcion = mysqli_real_escape_string($conn,$_POST['descripcion']);
      $porcentaje = mysqli_real_escape_string($conn,$_POST['porcentaje']);
         
           
      if(($id == '') ||
            ($cod_concepto == '') ||
                ($tipo_concepto == '') ||
                    ($descripcion == '') || 
                        ($porcentaje == '')){
                    
                        echo 5; // hay campos vacios
                    
    }else{
        updateConcepto($id,$cod_concepto,$tipo_concepto,$descripcion,$porcentaje,$conn);
        
    }
    }else{
        echo 13; //error de conexion
    }





?>
