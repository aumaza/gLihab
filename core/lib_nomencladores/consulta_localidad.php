<?php  include "../connection/connection.php";
       include "lib_nomencladores.php";
       
       if($conn){
       
        $cod_provincia = mysqli_real_escape_string($conn, $_POST['cod_provincia']);
        $sql = "SELECT cod_localidad, nombre FROM glh_localidades WHERE cod_prov = '$cod_provincia' order by nombre ASC";
        mysqli_select_db($conn,'gnu_lihab');
        $query = mysqli_query($conn, $sql);

        if($query){
        
        while($row = mysqli_fetch_array($query)){
            
            echo '<option value="'.$row[cod_localidad].'">'.$row[nombre].'</option>';
        }
        }else{
            echo "error";
        }
        }else{
        
            echo "Sin conexion";
        
        }
        
        mysqli_close($conn);

?>
