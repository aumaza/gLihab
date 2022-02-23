<?php include "../connection/connection.php";
      include "lib_nomencladores.php";
      
           
      if($conn){
      
      // captura las variables
      $sector = mysqli_real_escape_string($conn,$_POST['sector']);
      $categoria = mysqli_real_escape_string($conn,$_POST['categoria']);
      $nivel = mysqli_real_escape_string($conn,$_POST['nivel']);
      $banda_hetaria = mysqli_real_escape_string($conn,$_POST['banda_hetaria']);
      $hrs_jornada = mysqli_real_escape_string($conn,$_POST['hrs_jornada']);
      $importe = mysqli_real_escape_string($conn,$_POST['importe']);
      
      // convierte a mayusculas cada string
      $sector = strtoupper($sector);
      $categoria = strtoupper($categoria);
      $nivel = strtoupper($nivel);
      $importe = floatval($importe);
      $hrs_jornada = intval($hrs_jornada);
      
      // verifica que no estén null
      if(($sector == '') ||
            ($categoria == '') || 
                ($nivel == '') ||
                    ($banda_hetaria == '') ||
                        ($hrs_jornada == '') ||
                            ($importe == '')){
                    
                        echo 5; // hay campos vacios
                                
    }else{
        
            if(is_float($importe)){
                // si todo es correcto añade el nuevo registro
                addNewCategoria($sector,$categoria,$nivel,$banda_hetaria,$hrs_jornada,$importe,$conn);
            }else{
                echo 9; // el importe debe ser un valor con decimales
            }
            
        
    }
    }else{
        echo 13; //error de conexion
    }





?>
