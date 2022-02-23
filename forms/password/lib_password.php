<?php 

/*
** PERSISTENCIA A BASE DE DATOS
*/
function updatePassword($user,$password,$conn){

    mysqli_select_db($conn,'gnu_lihab');
    
    $sql = "select user from glh_usuarios where user = '$user'";
    $query = mysqli_query($conn,$sql);
    
    
    if($query){
    
        $resp = mysqli_num_rows($query);
    
    if($resp == 0){
    
        echo 3; // no existe registro de usuario
    
    }else if($resp == 1){
    
        $sql_1 = "update glh_usuarios set password = '$password' where user = '$user'";
        $query_1 = mysqli_query($conn,$sql_1);
    
    if($query_1){
        
        echo 1; // password actualizado satisfactoriamente
    
    }else{
    
        echo -1; // hubo un problema al actualizar el password
    }

    }
    }
    
}



?>
