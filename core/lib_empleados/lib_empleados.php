<?php

function calcularAnios($fecha){
    
  
    $fecha_actual = date("Y-m-d");
    $anios = date_diff(date_create($fecha), date_create($fecha_actual));
    return $anios = $anios->format('%y');
  
    //return $anios;

}


/*
** funcion lista todos los empleados
*/
function empleados($conn){

if($conn){
	
	$sql = "SELECT * FROM glh_empleados";
    mysqli_select_db($conn,'gnu_glihab');
    $resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Empleados</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Nombre y Apellido</th>
		    <th class='text-nowrap text-center'>Fecha Nacimiento</th>
		    <th class='text-nowrap text-center'>Género</th>
		    <th class='text-nowrap text-center'>DNI</th>
		    <th>&nbsp;</th>
		    </thead>";

	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['nombre']."</td>";
			 echo "<td align=center>".$fila['fecha_nac']."</td>";
			 echo "<td align=center>".$fila['genero']."</td>";
			 echo "<td align=center>".$fila['dni']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo '<form action="#" method="POST">
                    <input type="hidden" name="id" value="'.$fila['id'].'" >
                <button type="submit" class="btn btn-primary btn-sm" name="info_empleado" data-toggle="tooltip" data-placement="right" title="Para ver Datos Completos del Empleado haga click aquí">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/view-ldap-resource.png" /> Datos Empleado</button>
              </form>';
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<form action="#" method="POST">
                <button type="submit" class="btn btn-warning btn-sm" name="nuevo_empleado" data-toggle="tooltip" data-placement="right" title="Completar ficha de Alta Empleado">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Alta Empleado</button>
              </form><br>';
		echo '<button type="button" class="btn btn-primary">Cantidad de Empleados:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}






// FORMULARIOS //
/*
** formulario de alta de empleado
*/
function altaEmpleado(){

    echo '<div class="container">
            <div class="alert alert-secondary">
            Alta de Empleado
            </div>
                                   
            <form action="#" method="POST">
            
            <div class="container">     
                <div class="row">
                    <div class="col-sm-6">
                    
                    <h3> Datos Personales</h3>
                    <div class="form-group">
                        <label for="email">Nombre y Apellido:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese Nombre y Apellido" name="nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">DNI:</label>
                        <input type="text" class="form-control" id="dni" placeholder="Ingrese DNI sin puntos" name="dni" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">CUIL/CUIT:</label>
                        <input type="text" class="form-control" id="cuil" placeholder="Ingrese CUIL sin puntos ni guiones" name="cuil" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ej: 1144445555" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Móvil:</label>
                        <input type="text" class="form-control" id="movil" name="movil" placeholder="Ej: 1133337777" required>
                    </div>
                    
                    <div class="form-group">
                            <label for="sel1">Estado Civil:</label>
                            <select class="form-control" id="sel1" name="estado_civil">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="Soltero/a">Soltero/a</option>
                                <option value="Casado/a">Casado/a</option>
                                <option value="Divorciado/a">Divoricado/a</option>
                            </select>
                            </div>
                            
                    <div class="form-group">
                            <label for="sel1">Nivel de Estudio:</label>
                            <select class="form-control" id="sel1" name="nivel_estudio">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="Primario">Primario</option>
                                <option value="Secundario Completo">Secundario Completo</option>
                                <option value="Secundario Incompleto">Secundario Incompleto</option>
                                <option value="Universitario Completo">Universitario Completo</option>
                                <option value="Universitario Incompleto">Universitario Incompleto</option>
                                <option value="Terciario Completo">Terciario Completo</option>
                                <option value="Terciario Incompleto">Terciario Incompleto</option>
                                <option value="Postgrado">Postgrado</option>
                                <option value="Maestria">Maestría</option>
                                <option value="Doctorado">Doctorado</option>
                            </select>
                            </div>
                    
                    <div class="form-group">
                        <label for="email">Título Obtenido:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Categoria:</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Nivel Categoria:</label>
                        <input type="text" class="form-control" id="nivel_categoria" name="nivel_categoria" required>
                    </div>
                    
                    <div class="form-group">
                            <label for="email">Fecha Ingreso:</label>
                            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
                    </div>
                    
                    </div>
                
                
                
                        <div class="col-sm-6">
                
                        <div class="form-group">
                            <label for="email">Fecha Nacimiento:</label>
                            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required>
                        </div>
                        
                         <div class="form-group">
                            <label for="sel1">Género:</label>
                            <select class="form-control" id="sel1" name="genero">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Otro">Otro</option>
                            </select>
                            </div>
                            
                            
                            
                             <div class="form-group">
                            <label for="pwd">Dirección:</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>
                            
                            <p>Entre calles</p><hr>
                             <div class="form-group">
                            <label for="pwd">Calle 1:</label>
                            <input type="text" class="form-control" id="calle_1" name="calle_1">
                            </div>
                            
                            <div class="form-group">
                            <label for="pwd">Calle 2:</label>
                            <input type="text" class="form-control" id="calle_2" name="calle_2">
                            </div>
                            
                            <div class="form-group">
                            <label for="pwd">Localidad:</label>
                            <input type="text" class="form-control" id="localidad" name="localidad">
                            </div>
                            
                            <div class="form-group">
                            <label for="pwd">Provincia:</label>
                            <input type="text" class="form-control" id="provincia" name="provincia">
                            </div>
                            
                            <div class="form-group">
                            <label for="sel1">Familiares:</label>
                            <select class="form-control" id="sel1" name="familiares">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                            </div>
                            
                            <div class="form-group">
                            <label for="pwd">Cantidad Hijos:</label>
                            <input type="number" class="form-control" min="0" id="cant_hijos" name="cant_hijos" required>
                            </div>
                            
                            <div class="form-group">
                            <label for="pwd">Correo Electrónico:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el email del empleado" required>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-secondary btn-block" name="agregar_empleado">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Agregar</button>
            </form>
           
            </div>';


}



/*
** formulario de consulta de datos de empleado
*/
function datosEmpleado($id,$conn){

    // consultamos los datos del empleado
    $sql = "select * from glh_empleados where id = '$id'";
    mysqli_select_db($conn,'gnu_glihab');
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
    
    
    $edad = calcularAnios($row['fecha_nac']);
    $antiguedad = calcularAnios($row['fecha_ingreso']);
    
    echo '<div class="container">     
          <div class="row">
          <div class="col-sm-10">
        
            <div class="alert alert-success">
            <h4><img class="img-reponsive img-rounded" src="../../icons/actions/view-ldap-resource.png" /> <strong>Empleado</strong>: '.$row['nombre'].'</h4><hr>
            
            <form action"#" method="POST">
            <input type="hidden" name="id" value="'.$id.'">
            <button type="submit" class="btn btn-primary" name="editar_empleado">
            <img class="img-reponsive img-rounded" src="../../icons/actions/document-edit.png" /> Editar</button>
            </form>
            </div>
            
            
            <div id="accordion">
                        
            <div class="card">
            <div class="card-header bg-dark text-white">
                <a class="card-link" data-toggle="collapse" href="#collapseDatosPersonales">
                <img class="img-reponsive img-rounded" src="../../icons/apps/office-address-book.png" /> Datos Personales
                </a>
            </div>
            <div id="collapseDatosPersonales" class="collapse" data-parent="#accordion">
                <div class="card-body">
                
                <div class="row">
                <div class="col-sm-4"><br>
                    <label for="usr"><strong>Fecha Nacimiento</strong>:</label>
                    <input type="date" class="form-control" value="'.$row['fecha_nac'].'" readonly><hr>
                    
                    <label for="usr"><strong>Edad</strong>:</label>
                    <input type="text" class="form-control" value="'.$edad.'" readonly><hr>
                    
                    <label for="usr"><strong>DNI</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['dni'].'" readonly><hr>
                    
                    <label for="usr"><strong>CUIL / CUIT</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['cuil'].'" readonly><hr>
                    
                    <label for="usr"><strong>Estado Civil</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['estado_civil'].'" readonly><hr>
                    
                    <label for="usr"><strong>Género</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['genero'].'" readonly><br>
               </div>
                
                <div class="col-sm-4"><br>
                    <label for="usr"><strong>Teléfono</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['telefono'].'" readonly><hr>
                    
                    <label for="usr"><strong>Móvil</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['movil'].'" readonly><hr>
                    
                    <label for="usr"><strong>Familiares</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['familiares'].'" readonly><hr>
                    
                    <label for="usr"><strong>Hijos</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['hijos_cant'].'" readonly><hr>
                    
                    <form action"#" method="POST">
                    <input type="hidden" name="id" value="'.$id.'">
                    <button type="submit" class="btn btn-primary btn-block" name="info_familiares">
                        <img class="img-reponsive img-rounded" src="../../icons/actions/view-process-users.png" /> Info familiares</button>
                    </form>
                </div>
                
                <div class="col-sm-4"><br>
                    <label for="usr"><strong>Dirección</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['direccion'].'" readonly><hr>
                    
                    <label for="usr"><strong>Entre Calle</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['calle_1'].'" readonly><hr>
                    
                    <label for="usr"><strong>Y Calle</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['calle_2'].'" readonly><hr>
                    
                    <label for="usr"><strong>Localidad</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['localidad'].'" readonly><hr>
                    
                    <label for="usr"><strong>Provincia</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['provincia'].'" readonly><br>
                
                
                </div>
                </div>
                
                </div>
            </div>
            </div>
            
            <div class="card">
            <div class="card-header bg-dark text-dark">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseEstudios">
                <img class="img-reponsive img-rounded" src="../../icons/categories/applications-education-university.png" /> Estudios Alcanzados
            </a>
            </div>
            <div id="collapseEstudios" class="collapse" data-parent="#accordion">
                <div class="card-body">
                
                <div class="row">
                <div class="col-sm-6"><br>
                    <label for="usr"><strong>Nivel de Estudio</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['nivel_estudios'].'" readonly><hr>
                    
                    <label for="usr"><strong>Título Obtenido</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['titulo_nombre'].'" readonly><hr>
                    
                    <form action"#" method="POST">
                    <input type="hidden" name="id" value="'.$id.'">
                    <button type="submit" class="btn btn-primary btn-block" name="cursos_realizados">
                        <img class="img-reponsive img-rounded" src="../../icons/actions/view-certificate.png" /> Capacitación</button>
                    </form>
                </div>
                </div>
                
                </div>
            </div>
            </div>
            
            <div class="card">
            <div class="card-header bg-dark text-dark">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseLaborales">
                <img class="img-reponsive img-rounded" src="../../icons/categories/applications-engineering.png" /> Datos Laborales
                </a>
            </div>
            <div id="collapseLaborales" class="collapse" data-parent="#accordion">
                <div class="card-body">
                
                <div class="row">
                <div class="col-sm-4""><br>
                    <label for="usr"><strong>Fecha Ingreso</strong>:</label>
                    <input type="date" class="form-control" value="'.$row['fecha_ingreso'].'" readonly><hr>
                    
                    <br>
                    <label for="usr"><strong>Antiguedad</strong>:</label>
                    <input type="text" class="form-control" value="'.$antiguedad.'" readonly><br>
                
                </div>
                <div class="col-sm-4""><br>
                    <label for="usr"><strong>Categoría</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['categoria'].'" readonly><hr>
                    
                    <br>
                    <label for="usr"><strong>Nivel</strong>:</label>
                    <input type="text" class="form-control" value="'.$row['nivel_categoria'].'" readonly><hr>
                    
                    <form action"#" method="POST">
                    <input type="hidden" name="id" value="'.$id.'">
                    <button type="submit" class="btn btn-primary btn-block" name="info_extra_laboral">
                        <img class="img-reponsive img-rounded" src="../../icons/actions/view-pim-contacts.png" /> Datos de Revista</button>
                    </form>
                    
                    </div>';
                    
               if($row['egreso'] != ''){     
                
               echo '<div class="col-sm-4"><br>
                        <form action="#" method="POST">
                        <input type="hidden" name="id" value="'.$id.'">
                            <div class="form-group">
                                <label for="email">Fecha Egreso:</label>
                                <input type="date" class="form-control" value="'.$row['egreso'].'">
                            </div><hr>
                        
                            <button type="submit" class="btn btn-primary btn-block" name="datos_egreso"> Info Egreso</button>
                            </form> 
                        
                        </div>';
                }
                
                echo '</div>
                
                </div>
            </div>
            </div>
            
        </div>
                    
         
          </div>
          </div>
          </div>';



}




// ========================================================================================== //
// PERSISTENCIA //


function addEmpleado($nombre,$dni,$cuil,$telefono,$movil,$estado_civil,$nivel_estudio,$titulo,$categoria,$nivel_categoria,$fecha_ingreso,$fecha_nac,$genero,$direccion,$provincia,$calle_1,$calle_2,$localidad,$familiares,$cant_hijos,$conn){

          
    
    $sql = "insert into glh_empleados ".
            "(nombre,fecha_nac,genero,cuil,dni,direccion,calle_1,calle_2,localidad,provincia,tel,movil,estado_civil,nivel_estudios,titulo_nombre,categoria,nivel_categoria,fecha_ingreso,hijos_cant,familiares)".
		"VALUES ".
      "('$nombre','$fecha_nac','$genero','$cuil','$dni','$direccion','$calle_1','$calle_2','$localidad','$provincia','$telefono','$movil','$estado_civil','$nivel_estudio','$titulo','$categoria','$nivel_categoria','$fecha_ingreso','$cant_hijos','$familiares')";
      
      mysqli_select_db($conn,'gnu_glihab');
      $query = mysqli_query($conn,$sql);
      
      if($query){
            
            echo "<br>";
		    echo '<div class="container">';
		    echo '<div class="alert alert-success" alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
		    echo '<img class="img-reponsive img-rounded" src="../../icons/actions/dialog-ok-apply.png" /> Alta del Empleado realizada Satisfactoriamente.';
		    echo "</div>";
		    echo "</div>";
	
	}else{
            
            echo '<div class="container">';
            echo '<div class="alert alert-warning" alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
			echo '<img class="img-reponsive img-rounded" src="../../icons/status/task-attempt.png" /> Hubo un problema al realizar el alta del empleado. '  .mysqli_error($conn);
			echo "</div>";
			echo "</div>";
	}
    
}




?>
