<?php  include "../connection/connection.php";
       include "lib_nomencladores.php";
       
       if($conn){
       
            if(isset($_POST['sector'])){
                
                $sector = mysqli_real_escape_string($conn, $_POST['sector']);
                $sql = "SELECT categoria FROM glh_agrupamientos WHERE sector = '$sector' group by categoria ASC";
                mysqli_select_db($conn,'gnu_lihab');
                $query = mysqli_query($conn, $sql);

                if($query){
                
                while($row = mysqli_fetch_array($query)){
                    
                    echo '<option value="'.$row[categoria].'">'.$row[categoria].'</option>';
                }
                }else{
                    echo "error";
                }
            }
            
            if(isset($_POST['categoria'])){
            
                $categoria = mysqli_real_escape_string($conn, $_POST['categoria']);
                $sql_1 = "SELECT nivel FROM glh_agrupamientos WHERE categoria = '$categoria' group by nivel ASC";
                mysqli_select_db($conn,'gnu_lihab');
                $query_1 = mysqli_query($conn, $sql_1);

                if($query_1){
                
                while($row_1 = mysqli_fetch_array($query_1)){
                    
                    echo '<option value="'.$row_1[nivel].'">'.$row_1[nivel].'</option>';
                }
                }else{
                    echo "error";
                }
            
            }
        
        
        }else{
        
            echo "Sin conexion";
        
        }
        
        mysqli_close($conn);

?>
