<?php

class gremios{

    // variables de la clase
    private $cod_gremio = '';
    private $descripcion = '';
   
    // constructor desparametrizado
    function __constructor(){
        $this->cod_gremio = '';
        $this->descripcion = '';
    }
    
    // setters
    private function set_cod_gremio($cod){
        $this->cod_gremio = $cod;
    }
    
    private function set_descripcion($nombre){
        $this->descripcion = $nombre;
    }
    
    // getters
    private function get_cod_gremio($var){
        return $this->cod_gremio = $var;
    }
    
    private function get_descripcion($var){
        return $this->descripcion = $var;
    }
    
    // métodos de la clase
    
    
    /*
    **listar todos los gremios
    */
    public function listarGremios($gremio,$conn){

    
                if($conn){
                
                
                $sql = "select * from glh_gremios";
                mysqli_select_db($conn,'gnu_lihab');
                $query = mysqli_query($conn,$sql);
                //mostramos fila x fila
                $count = 0;
                echo '<div class="card-body">
                        <h2> Gremios</h2><hr>
                    <div class="table-responsive"><br>';
                        
                        echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
                        echo "<thead>
                        <th class='text-nowrap text-center'>Código Gremio</th>
                        <th class='text-nowrap text-center'>Descripción</th>
                        <th>&nbsp;</th>
                        </thead>";


                while($fila = mysqli_fetch_array($query)){
                        // Listado normal
                        echo "<tr>";
                        echo "<td align=center>".$gremio->get_cod_gremio($fila['cod_gremio'])."</td>";
                        echo "<td align=center>".$gremio->get_descripcion($fila['descripcion'])."</td>";
                        echo "<td class='text-nowrap'>";
                        echo '<form action="#" method="POST">
                                <input type="hidden" name="id" value="'.$fila['id'].'" >
                                <button type="submit" class="btn btn-primary btn-sm" name="editar_gremio" data-toggle="tooltip" data-placement="right" title="Editar Datos del Gremio">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/document-edit.png" /> Editar</button>
                        </form>';
                        echo "</td>";
                        $count++;
                    }

                    echo "</table>";
                    echo "<br>";
                    echo '<form action="#" method="POST">
                            
                            <button type="submit" class="btn btn-warning btn-sm" name="nuevo_gremio" data-toggle="tooltip" data-placement="right" title="Agregar Nueva Categoría">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Nuevo Gremio</button>
                        </form><br>';
                    echo '<button type="button" class="btn btn-primary">Cantidad de Gremios:  ' .$count; echo '</button>';
                    echo '</div></div>';
                    
                    }else{
                    echo 'Connection Failure...';
                    }

                mysqli_close($conn);

    }

/*
** funcion que muestra formulario de carga de nuevo gremio
*/

    public function formAltaGremio(){
    
        echo '<div class="container">
            <div class="alert alert-secondary">
            Alta de Gremio
            </div>
                                   
            <form id="fr_add_new_gremio_ajax" method="POST">
            
             
            <div class="container">     
                <div class="row">
                    <div class="col-sm-6">
                    
                                          
                        <div class="form-group">
                            <label for="cod_gremio">Sector / Gremio:</label>
                            <input type="text" class="form-control" id="cod_gremio" name="cod_gremio" placeholder="Ingrese la sigla del Gremio Ej.: UOM" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" class="form-control" id="descripcion" placeholder="Ingrese la descripción del Gremio. Ej.: Unión Obrera Metalúrgica" name="descripcion" required>
                        </div>
                        
                    </div>
                </div>
                </div><hr>
                
                <button type="submit" class="btn btn-secondary btn-block" id="add_new_gremio" name="new_gremio">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Agregar</button>
            </form>
           
            </div>';   
    
    }
    
    
    
    
    public function formEditGremio($id,$gremio,$conn){
        
        $sql = "select * from glh_gremios where id = '$id'";
        mysqli_select_db($conn,'gnu_lihab');
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($query);
              
        echo '<div class="container">
            <div class="alert alert-secondary">
            Editar Gremio
            </div>
          
            <form id="fr_update_gremio_ajax" method="POST">
            <input type="hidden" id="id" name="id" value="'.$id.'" required>
            
            <div class="container">     
                <div class="row">
                    <div class="col-sm-6">
                    
                                          
                        <div class="form-group">
                            <label for="cod_gremio">Sector / Gremio:</label>
                            <input type="text" class="form-control" id="edit_cod_gremio" name="cod_gremio" placeholder="Ingrese la sigla del Gremio Ej.: UOM" value="'.$gremio->get_cod_gremio($row['cod_gremio']).'" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEditGremio("edit_cod_gremio")>Habilitar</button><hr>
                        </div>
                    
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" class="form-control" id="edit_descripcion" placeholder="Ingrese la descripción del Gremio. Ej.: Unión Obrera Metalúrgica" name="descripcion" value="'.$gremio->get_descripcion($row['descripcion']).'" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEditGremio("edit_descripcion")>Habilitar</button><hr>
                        </div>
                        
                    </div>
                </div>
                </div><hr>
                
                <button type="submit" class="btn btn-secondary btn-block" id="update_gremio" name="update_gremio">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/document-save-as.png" /> Guardar</button>
            </form>
           
            </div>';
    
    }
    
    /*
    ** agregar registro a la base de datos
    */
    public function addGremio($gremio,$cod,$nombre,$conn){
    
        if($conn){
        
            mysqli_select_db($conn,'gnu_lihab');
            $sql = "select * from glh_gremios where cod_gremio = '$cod' or descripcion = '$nombre'";
            $query = mysqli_query($conn,$sql);
        
            if($query){
                
                $rows = mysqli_num_rows($query);
                
                if($rows == 0){
                    
                    $sql_2 = "INSERT INTO glh_gremios ".
                    "(cod_gremio,
                      descripcion
                    )".
                    "VALUES ".
                    "($gremio->set_cod_gremio('$cod'),
                      $gremio->set_descripcion('$nombre')
                    )";
                    
                    $query_2 = mysqli_query($conn,$sql_2);
                        
                    if($query_2){
                        echo 1; // registro insertado correctamente
                    }else{
                        echo -1; // hubo un problema al insertar el registro
                    }
                    
                }else{
                    echo 4; // registro existente
                }
            
            }
        
        }else{
            echo 7; // no hay conexion
        }
    
    } // end funcion
    
    
    public function updateGremio($id,$gremio,$cod,$nombre,$conn){
    
        if($conn){

            $sql = "update glh_gremios set cod_gremio = $gremio->set_cod_gremio('$cod'), descripcion = $gremio->set_descripcion('$nombre') where id = '$id'";
            mysqli_select_db($conn,'gnu_glihab');
            $query = mysqli_query($conn,$sql);
            
            if($query){
                echo 1; // registro actualizado correctamente
            }else{
                echo -1; // hubo un problema al actualizar el registro
            }
            
        }else{
           echo 7; // no es posible conectarse a la base de datos
        }
    
    }

    
    
    
    
} // end class gremios





?>
