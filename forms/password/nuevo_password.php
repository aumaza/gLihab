<?php include "../../core/connection/connection.php";
      include "lib_password.php";
      
      if($conn){
      
      $user = mysqli_real_escape_string($conn,$_POST['user']);
      $password_1 = mysqli_real_escape_string($conn,$_POST['pass_1']);
      $password_2 = mysqli_real_escape_string($conn,$_POST['pass_2']);
      
      if(($user == '') || 
                ($password_1 == '') || 
                    ($password_2 == '')){
                    
                        echo 2; // hay campos vacios
                    
    }else{
    
        if((strlen($password_1) == 15) && (strlen($password_2) == 15)){
        
            if(strcmp($password_2,$password_1) == 0){
                
                $password = password_hash($password_1, PASSWORD_BCRYPT);            
                updatePassword($user,$password,$conn);
                
            }else{
            
                echo 4; // los password no coinciden
            }
            
        }
        if((strlen($password_1) < 15) && (strlen($password_2) < 15)){
        
            echo 5; // password con menos de 15 caracteres
        }
        if((strlen($password_1) > 15) && (strlen($password_2) > 15)){
            echo 6; // password con mas de 15 caracteres
        }
    
    }

    }else{
        echo 7; //error de conexion
    }





?>
