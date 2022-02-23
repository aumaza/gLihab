<?php include "../connection/connection.php";
      include "lib_nomencladores.php";
      
           
      if($conn){
      
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      $razon_social = mysqli_real_escape_string($conn,$_POST['razon_social']);
      $tipo_sociedad = mysqli_real_escape_string($conn,$_POST['tipo_sociedad']);
      $cuit = mysqli_real_escape_string($conn,$_POST['cuit']);
      $direccion = mysqli_real_escape_string($conn,$_POST['direccion']);
      $cod_prov = mysqli_real_escape_string($conn,$_POST['cod_provincia']);
      $cod_loc = mysqli_real_escape_string($conn,$_POST['cod_localidad']);
      
           
      if(($razon_social == '') ||
            ($tipo_sociedad == '') || 
                ($cuit == '') ||
                    ($direccion == '') ||
                        ($cod_prov == '') ||
                            ($cod_loc == '')){
                    
                        echo 5; // hay campos vacios
                    
    }else{
        updateEmpresa($id,$razon_social,$tipo_sociedad,$cuit,$direccion,$cod_prov,$cod_loc,$conn);
    }
    }else{
        echo 13; //error de conexion
    }





?>
