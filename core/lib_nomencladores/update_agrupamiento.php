<?php include "../connection/connection.php";
      include "lib_nomencladores.php";
      
           
      if($conn){
      
      // captura las variables
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      $sector = mysqli_real_escape_string($conn,$_POST['sector']);
      $categoria = mysqli_real_escape_string($conn,$_POST['categoria']);
      $nivel = mysqli_real_escape_string($conn,$_POST['nivel']);
      
      // convierte a mayusculas cada string
      $sector = strtoupper($sector);
      $categoria = strtoupper($categoria);
      $nivel = strtoupper($nivel);
      
      // verifica que no estén null
      if(($id == '') ||
            ($sector == '') ||
                ($categoria == '') || 
                    ($nivel == '')){
                    
                        echo 5; // hay campos vacios
                    
    }else{
        // si todo es correcto añade el nuevo registro
        updateAgrupamiento($id,$sector,$categoria,$nivel,$conn);
    }
    }else{
        echo 13; //error de conexion
    }





?>
