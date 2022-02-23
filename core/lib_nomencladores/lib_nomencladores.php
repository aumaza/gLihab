<?php

/*
** LISTAR MUNICIPIOS
*/
function municipios($conn){

if($conn){
	
	
	$sql = "SELECT * FROM glh_municipios";
    	mysqli_select_db($conn,'gnu_glihab');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Municipios</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Código Municipio</th>
		    <th class='text-nowrap text-center'>Nombre</th>
		    <th class='text-nowrap text-center'>Nombre Municipio</th>
		    <th class='text-nowrap text-center'>Código Provincia</th>
		    <th>&nbsp;</th>
		    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['cod_municipio']."</td>";
			 echo "<td align=center>".$fila['descripcion']."</td>";
			 echo "<td align=center>".$fila['municipio']."</td>";
			 
			 $sql_1 = "select provincia from glh_provincias where cod_prov = '$fila[cod_provincia]'";
			 $query_1 = mysqli_query($conn,$sql_1);
			 while($row = mysqli_fetch_array($query_1)){
			 echo '<td align=center><a href="#" data-toggle="tooltip" data-placement="left" title="'.$row['provincia'].'">'.$fila['cod_provincia'].'</td>';
			 }
			 echo "<td class='text-nowrap'>";
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<button type="button" class="btn btn-primary">Cantidad de Municipios:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}


/*
** LISTAR LOCALIDADES
*/
function localidades($conn){

if($conn){
	
	
	$sql = "SELECT * FROM glh_localidades";
    	mysqli_select_db($conn,'gnu_glihab');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Localidades</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Código Depto.</th>
		    <th class='text-nowrap text-center'>Departamento</th>
		    <th class='text-nowrap text-center'>Cod_Localidad</th>
		    <th class='text-nowrap text-center'>Localidad</th>
		    <th>&nbsp;</th>
		    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['cod_dpto']."</td>";
			 echo "<td align=center>".$fila['dpto_nombre']."</td>";
			 echo "<td align=center>".$fila['cod_localidad']."</td>";
			 echo "<td align=center>".$fila['localidad_nombre']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<button type="button" class="btn btn-primary">Cantidad de Localidades:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}


/*
** LISTAR PROVINCIAS
*/
function provincias($conn){

if($conn){
	
	
	$sql = "SELECT * FROM glh_provincias";
    	mysqli_select_db($conn,'gnu_glihab');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Provincias</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Código Provincia</th>
		    <th class='text-nowrap text-center'>Provincia</th>
		    <th>&nbsp;</th>
		    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['cod_prov']."</td>";
			 echo "<td align=center>".$fila['provincia']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<button type="button" class="btn btn-primary">Cantidad de Provincias:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}

// ==================================================================================================================================== //
// CATEGORIAS PARA PUESTOS DE TRABAJO
/*
** LISTAR CATEGORIAS
*/
function categorias($conn){

if($conn){
	
	$sql = "SELECT * FROM glh_categorias";
    	mysqli_select_db($conn,'gnu_glihab');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Categorías</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Sector</th>
		    <th class='text-nowrap text-center'>Categoría</th>
		    <th class='text-nowrap text-center'>Nivel</th>
		    <th class='text-nowrap text-center'>Haber Básico</th>
		    <th>&nbsp;</th>
		    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['sector']."</td>";
			 echo "<td align=center>".$fila['categoria']."</td>";
			 echo "<td align=center>".$fila['nivel']."</td>";
			 echo "<td align=center>".$fila['importe']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo '<form action="#" method="POST">
                    <input type="hidden" name="id" value="'.$fila['id'].'" >
                <button type="submit" class="btn btn-primary btn-sm" name="editar_categoria" data-toggle="tooltip" data-placement="right" title="Editar Datos de Categoría">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/document-edit.png" /> Editar</button>
              </form>';
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<form action="#" method="POST">
                <input type="hidden" value="Remunerativo" name="concepto">
                <button type="submit" class="btn btn-warning btn-sm" name="nueva_categoría" data-toggle="tooltip" data-placement="right" title="Agregar Nueva Categoría">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Nueva Categoría</button>
              </form><br>';
		echo '<button type="button" class="btn btn-primary">Cantidad de Categorías:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}


// ==================================================================================================================================== //


/*
** formulario de alta de categorías
*/
function formAltaCategorias(){

    

    echo '<div class="container">
            <div class="alert alert-secondary">
            Alta de Empresa
            </div>
                                   
            <form id="fr_add_new_categoria_ajax" method="POST">
            
             
            <div class="container">     
                <div class="row">
                    <div class="col-sm-6">
                    
                                                                  
                        <div class="form-group">
                            <label for="convenio">Convenio:</label>
                            <input type="text" class="form-control" id="convenio" name="convenio" placeholder="Ingrese el Nombre del Convenio" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="banda_hetaria">Banda Hetaria:</label>
                            <select class="form-control" id="banda_hetaria" name="banda_hetaria" required>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="16">Menores 16</option>
                                <option value="17">Menores 17</option>
                                <option value="18">Adultos</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="hrs_jornada">Horas Jornada:</label>
                            <select class="form-control" id="hrs_jornada" name="hrs_jornada" required>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="6">6 Horas</option>
                                <option value="8">8 Horas</option>
                                <option value="9">9 Horas</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="categoria">Categoría:</label>
                            <select class="form-control" id="categoria" name="categoria" required>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="Maestranza">Mestranza</option>
                                <option value="Administrativo">Administrativo</option>
                                <option value="Cajero">Cajero</option>
                                <option value="Auxiliar">Auxiliar</option>
                                <option value="Auxiliar Especializado">Auxiliar Especializado</option>
                                <option value="Vendedor">Vendedor</option>
                                <option value="Cajeros">Cajeros</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                        <label for="provincia">Provincias</label>
                        <select class="form-control" name="cod_provincia" id="cod_provincia" onchange="CargarLocalidad(this.value);" required>
                        <option value="" disabled selected>Seleccionar</option>';
                        
                        
                        $query = "SELECT cod_prov, provincia FROM glh_provincias order by provincia ASC";
                        mysqli_select_db($conn,'gnu_lihab');
                        $res = mysqli_query($conn,$query);

                        if($res){
                            while($valores = mysqli_fetch_array($res)){
                                echo '<option value="'.$valores[cod_prov].'" >'.$valores[provincia].'</option>';
                            }
                            }
                        
                    echo '</select>
                            </div><hr>
                            
                            <div class="form-group">
                                <label for="localidad">Localidades:</label>
                                <select class="form-control" name="cod_localidad" id="cod_localidad" required>
                                    <div id="respuesta"></div>
                                </select>
                            </div><hr>
                                      
                    
                    </div>
                </div>
                </div><hr>
                
                <button type="submit" class="btn btn-secondary btn-block" id="add_new_empresa" name="agregar_empresa">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Agregar</button>
            </form>
           
            </div>';


}


// ==================================================================================================================================== //
// AGRUPAMIENTOS
/*
** LISTAR AGRUPAMIENTOS
*/
function agrupamientos($conn){

if($conn){
	
	$sql = "SELECT * FROM glh_agrupamientos";
    	mysqli_select_db($conn,'gnu_glihab');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Agrupamientos</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Sector / Gremio</th>
		    <th class='text-nowrap text-center'>Categoría</th>
		    <th class='text-nowrap text-center'>Nivel</th>
		    <th>&nbsp;</th>
		    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['sector']."</td>";
			 echo "<td align=center>".$fila['categoria']."</td>";
			 echo "<td align=center>".$fila['nivel']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo '<form action="#" method="POST">
                    <input type="hidden" name="id" value="'.$fila['id'].'" >
                <button type="submit" class="btn btn-primary btn-sm" name="editar_agrupamiento" data-toggle="tooltip" data-placement="right" title="Editar Agrupamiento">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/document-edit.png" /> Editar</button>
              </form>';
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<form action="#" method="POST">
                
                <button type="submit" class="btn btn-warning btn-sm" name="nuevo_agrupamiento" data-toggle="tooltip" data-placement="right" title="Agregar Nuevo Agrupamiento">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Alta Agrupamiento</button>
              </form><br>';
		echo '<button type="button" class="btn btn-primary">Cantidad de Agrupamientos:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}

// FORMULARIOS AGRUPAMIENTOS
/*
** formulario de alta de AGRUPAMIENTOS
*/
function formAltaAgrupamiento(){

    echo '<div class="container">
            <div class="alert alert-secondary">
            Alta de Agrupamiento
            </div>
                                   
            <form id="fr_add_new_agrupamiento_ajax" method="POST">
            
             
            <div class="container">     
                <div class="row">
                    <div class="col-sm-6">
                    
                                          
                        <div class="form-group">
                            <label for="sector">Sector / Gremio:</label>
                            <input type="text" class="form-control" id="sector" name="sector" placeholder="Ingrese el Sector/Gremio Ej.: UOM" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="categoria">Categoría:</label>
                            <input type="text" class="form-control" id="categoria" placeholder="Ingrese la categoría. Ej.: Administrativo" name="categoria" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="nivel">Nivel:</label>
                            <input type="text" class="form-control" id="nivel" placeholder="Ingrese el nivel. Ej.: A" name="nivel" required>
                        </div>
                                      
                    
                    </div>
                </div>
                </div><hr>
                
                <button type="submit" class="btn btn-secondary btn-block" id="add_new_agrupamiento" name="new_agrupamiento">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Agregar</button>
            </form>
           
            </div>';


}


/*
** formulario de edicion de AGRUPAMIENTOS
*/
function formEditAgrupamiento($id,$conn){

    $sql = "select * from glh_agrupamientos where id = '$id'";
    mysqli_select_db($conn,'gnu_lihab');
    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query)){
        $sector = $row['sector'];
        $categoria = $row['categoria'];
        $nivel = $row['nivel'];
    }

    echo '<div class="container">
            <div class="alert alert-secondary">
            Editar Agrupamiento
            </div>
                                   
            <form id="fr_update_agrupamiento_ajax" method="POST">
            <input type="hidden" value="'.$id.'" id="id" name="id" required>
             
            <div class="container">     
                <div class="row">
                    <div class="col-sm-6">
                    
                                          
                        <div class="form-group">
                            <label for="sector">Sector / Gremio:</label>
                            <input type="text" class="form-control" id="edit_sector" name="sector" placeholder="Ingrese el Sector/Gremio Ej.: UOM" value="'.$sector.'" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEditAgrupamiento("edit_sector")>Habilitar</button><hr>
                        </div>
                    
                        <div class="form-group">
                            <label for="categoria">Categoría:</label>
                            <input type="text" class="form-control" id="edit_categoria" placeholder="Ingrese la categoría. Ej.: Administrativo" name="categoria" value="'.$categoria.'" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEditAgrupamiento("edit_categoria")>Habilitar</button><hr>
                        </div>
                        
                        <div class="form-group">
                            <label for="nivel">Nivel:</label>
                            <input type="text" class="form-control" id="edit_nivel" placeholder="Ingrese el nivel. Ej.: A" name="nivel" value="'.$nivel.'" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEditAgrupamiento("edit_nivel")>Habilitar</button><hr>
                        </div>
                                      
                    
                    </div>
                </div>
                </div><hr>
                
                <button type="submit" class="btn btn-secondary btn-block" id="update_agrupamiento" name="edit_agrupamiento">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Guardar</button>
            </form>
           
            </div>';


}



// PERSISTENCIA AGRUPAMIENTOS
function addNewAgrupamiento($sector,$categoria,$nivel,$conn){
    
    mysqli_select_db($conn,'gnu_lihab');
    $sql = "select * from glh_agrupamientos where sector = '$sector' and categoria = '$categoria' and nivel = '$nivel'";
    $query = mysqli_query($conn,$sql);
    
    
      
    if($query){  
      
      $rows = mysqli_num_rows($query);
      
    if($rows == 0){
    
        $sql_2 = "INSERT INTO glh_agrupamientos ".
                 "(sector,
                   categoria,
                   nivel
                   )".
                 "VALUES ".
                 "('$sector',
                   '$categoria',
                   '$nivel'
                  )";
                 
                 $query_2 = mysqli_query($conn,$sql_2);
                        
            if($query_2){
                echo 1; // registro insertado correctamente
            }else{
                echo -1; // hubo un problema al insertar el registro
            }
    
    }else if($rows == 1){
        
            echo 4; // registro existente
    }
    }else{
        echo 7; // no se pudo realizar la consulta
    }
    
}

/*
** ACTUALIZA AGRUPAMIENTO EN BASE DE DATOS
*/
function updateAgrupamiento($id,$sector,$categoria,$nivel,$conn){

    if($conn){
    
    $sql = "update glh_agrupamientos
            set 
            sector = '$sector',
            categoria = '$categoria',
            nivel = '$nivel'
            where id = '$id'";
    mysqli_select_db($conn,'gnu_lihab');
    $query = mysqli_query($conn,$sql);
    
    if($query){
        echo 1; // registro actualizado correctamente
    }else{
        echo -1; // no se pudo actualizar registro
    }
    }else{
        echo 7; // no hay conexion a la base de datos
    }
}


// ==================================================================================================================================== //
// CONCEPTOS 
/*
** CONCEPTOS REMUNERATICOS
*/
function conceptosRemunerativos($conn){

if($conn){
	
	$sql = "SELECT * FROM glh_conceptos where tipo_concepto = 'Remunerativo'";
    	mysqli_select_db($conn,'gnu_glihab');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Conceptos Remunerativos</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Código Concepto</th>
		    <th class='text-nowrap text-center'>Tipo Concepto</th>
		    <th class='text-nowrap text-center'>Descripción</th>
		    <th class='text-nowrap text-center'>Porcentaje</th>
		    <th>&nbsp;</th>
		    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['cod_concepto']."</td>";
			 echo "<td align=center>".$fila['tipo_concepto']."</td>";
			 echo "<td align=center>".$fila['descripcion']."</td>";
			 echo "<td align=center>".$fila['porcentaje']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo '<form action="#" method="POST">
                    <input type="hidden" name="id" value="'.$fila['id'].'" >
                <button type="submit" class="btn btn-primary btn-sm" name="editar_concepto" data-toggle="tooltip" data-placement="right" title="Editar Concepto">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/document-edit.png" /> Editar</button>
              </form>';
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<form action="#" method="POST">
                <input type="hidden" value="Remunerativo" name="concepto">
                <button type="submit" class="btn btn-warning btn-sm" name="nuevo_concepto" data-toggle="tooltip" data-placement="right" title="Agregar Nuevo Concepto">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Alta Concepto</button>
              </form><br>';
		echo '<button type="button" class="btn btn-primary">Cantidad de Conceptos:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}


/*
** CONCEPTOS NO REMUNERATIVOS
*/
function conceptosNoRemunerativos($conn){

if($conn){
	
	$sql = "SELECT * FROM glh_conceptos where tipo_concepto = 'No Remunerativo'";
    	mysqli_select_db($conn,'gnu_glihab');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Conceptos No Remunerativos</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Código Concepto</th>
		    <th class='text-nowrap text-center'>Tipo Concepto</th>
		    <th class='text-nowrap text-center'>Descripción</th>
		    <th class='text-nowrap text-center'>Porcentaje</th>
		    <th>&nbsp;</th>
		    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['cod_concepto']."</td>";
			 echo "<td align=center>".$fila['tipo_concepto']."</td>";
			 echo "<td align=center>".$fila['descripcion']."</td>";
			 echo "<td align=center>".$fila['porcentaje']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo '<form action="#" method="POST">
                    <input type="hidden" name="id" value="'.$fila['id'].'" >
                <button type="submit" class="btn btn-primary btn-sm" name="editar_concepto" data-toggle="tooltip" data-placement="right" title="Editar Concepto">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/document-edit.png" /> Editar</button>
              </form>';
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<form action="#" method="POST">
                <input type="hidden" value="No Remunerativo" name="concepto">
                <button type="submit" class="btn btn-warning btn-sm" name="nuevo_concepto" data-toggle="tooltip" data-placement="right" title="Agregar Nuevo Concepto">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Alta Concepto</button>
              </form><br>';
		echo '<button type="button" class="btn btn-primary">Cantidad de Conceptos:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}


/*
** CONCEPTOS OTROS
*/
function conceptosOtros($conn){

if($conn){
	
	$sql = "SELECT * FROM glh_conceptos where tipo_concepto = 'Otros'";
    	mysqli_select_db($conn,'gnu_glihab');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Conceptos Otros (Aquellos que no están encuadrados dentro de las otras categorías)</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Código Concepto</th>
		    <th class='text-nowrap text-center'>Tipo Concepto</th>
		    <th class='text-nowrap text-center'>Descripción</th>
		    <th class='text-nowrap text-center'>Porcentaje</th>
		    <th>&nbsp;</th>
		    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['cod_concepto']."</td>";
			 echo "<td align=center>".$fila['tipo_concepto']."</td>";
			 echo "<td align=center>".$fila['descripcion']."</td>";
			 echo "<td align=center>".$fila['porcentaje']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo '<form action="#" method="POST">
                    <input type="hidden" name="id" value="'.$fila['id'].'" >
                <button type="submit" class="btn btn-primary btn-sm" name="editar_concepto" data-toggle="tooltip" data-placement="right" title="Editar Concepto">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/document-edit.png" /> Editar</button>
              </form>';
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<form action="#" method="POST">
                <input type="hidden" value="Otros" name="concepto">
                <button type="submit" class="btn btn-warning btn-sm" name="nuevo_concepto" data-toggle="tooltip" data-placement="right" title="Agregar Nuevo Concepto">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Alta Concepto</button>
              </form><br>';
		echo '<button type="button" class="btn btn-primary">Cantidad de Conceptos:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}


/*
** CONCEPTOS CONVENIO
*/
function conceptosConvenio($conn){

if($conn){
	
	$sql = "SELECT * FROM glh_conceptos where tipo_concepto = 'Convenio'";
    	mysqli_select_db($conn,'gnu_glihab');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Conceptos Otorgados por Convenio</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Código Concepto</th>
		    <th class='text-nowrap text-center'>Tipo Concepto</th>
		    <th class='text-nowrap text-center'>Descripción</th>
		    <th class='text-nowrap text-center'>Porcentaje</th>
		    <th>&nbsp;</th>
		    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['cod_concepto']."</td>";
			 echo "<td align=center>".$fila['tipo_concepto']."</td>";
			 echo "<td align=center>".$fila['descripcion']."</td>";
			 echo "<td align=center>".$fila['porcentaje']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo '<form action="#" method="POST">
                    <input type="hidden" name="id" value="'.$fila['id'].'" >
                <button type="submit" class="btn btn-primary btn-sm" name="editar_concepto" data-toggle="tooltip" data-placement="right" title="Editar Concepto">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/document-edit.png" /> Editar</button>
              </form>';
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<form action="#" method="POST">
                <input type="hidden" value="Convenio" name="concepto">
                <button type="submit" class="btn btn-warning btn-sm" name="nuevo_concepto" data-toggle="tooltip" data-placement="right" title="Agregar Nuevo Concepto">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Alta Concepto</button>
              </form><br>';
		echo '<button type="button" class="btn btn-primary">Cantidad de Conceptos:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}


// ==================================================================================================================================== //
// EMPRESAS
/*
** LISTAR EMPRESAS
*/
function empresas($conn){

if($conn){
	
	$sql = "SELECT * FROM glh_empresas";
    	mysqli_select_db($conn,'gnu_glihab');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="card-body">
            <h2> Listado de Empresas</h2><hr>
          <div class="table-responsive"><br>';
            
            echo "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>Razón Social</th>
		    <th class='text-nowrap text-center'>Tipo Sociedad</th>
		    <th class='text-nowrap text-center'>CUIT</th>
		    <th class='text-nowrap text-center'>Dirección</th>
		    <th class='text-nowrap text-center'>Código Localidad</th>
		    <th class='text-nowrap text-center'>Código Provincia</th>
		    <th>&nbsp;</th>
		    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['razon_social']."</td>";
			 echo "<td align=center>".$fila['tipo_sociedad']."</td>";
			 echo "<td align=center>".$fila['cuit']."</td>";
			 echo "<td align=center>".$fila['direccion']."</td>";
			 
			 $sql_1 = "select nombre from glh_localidades where cod_localidad = '$fila[cod_localidad]'";
			 $query_1 = mysqli_query($conn,$sql_1);
			 while($row_1 = mysqli_fetch_array($query_1)){
			 echo '<td align=center><a href="#" data-toggle="tooltip" data-placement="left" title="'.$row_1['nombre'].'">'.$fila['cod_localidad'].'</td>';
			 }
             
             
             $sql_2 = "select provincia from glh_provincias where cod_prov = '$fila[cod_provincia]'";
			 $query_2 = mysqli_query($conn,$sql_2);
			 while($row_2 = mysqli_fetch_array($query_2)){
			 echo '<td align=center><a href="#" data-toggle="tooltip" data-placement="left" title="'.$row_2['provincia'].'">'.$fila['cod_provincia'].'</td>';
			 }
             
			 echo "<td class='text-nowrap'>";
			 echo '<form action="#" method="POST">
                    <input type="hidden" name="id" value="'.$fila['id'].'" >
                
                <button type="submit" class="btn btn-primary btn-sm" name="editar_empresa" data-toggle="tooltip" data-placement="right" title="Editar Empresa">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/document-edit.png" /> Editar</button>
                
              </form>';
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<form action="#" method="POST">
                
                <button type="submit" class="btn btn-warning btn-sm" name="nueva_empresa" data-toggle="tooltip" data-placement="right" title="Agregar Nueva Empresa">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Alta Empresa</button>
              </form><br>';
		echo '<button type="button" class="btn btn-primary">Cantidad de Empresas:  ' .$count; echo '</button>';
		echo '</div></div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}

// ==================================================================================================================================== //
// FORMULARIOS EMPRESAS
/*
** formulario de alta de empresas
*/
function formAltaEmpresas($conn){

    

    echo '<div class="container">
            <div class="alert alert-secondary">
            Alta de Empresa
            </div>
                                   
            <form id="fr_add_new_empresa_ajax" method="POST">
            
             
            <div class="container">     
                <div class="row">
                    <div class="col-sm-6">
                    
                                          
                        <div class="form-group">
                            <label for="razon_social">Razón Social:</label>
                            <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Ingrese el Nombre de la Empresa" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="tipo_sociedad">Tipo de Sociedad:</label>
                            <select class="form-control" id="tipo_sociedad" name="tipo_sociedad" required>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="SA">Sociedad Anónima</option>
                                <option value="SCS">Sociedad Comandita Simple</option>
                                <option value="SRL">Sociedad de Responsabilidad Limitada</option>
                                <option value="SNC">Sociedad de Nombre Colectivo</option>
                                <option value="SCA">Sociedad de Comandita por Acciones</option>
                                <option value="SRL">Sociedad de Responsabilidad Limitada</option>
                                <option value="SAS">Sociedad por Acciones Simplificada</option>
                                <option value="COOP">Cooperativa</option>
                                <option value="SSFL">Sociedad sin Fines de Lucro</option>
                                <option value="FUN">Fundación</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="cuit">CUIT:</label>
                            <input type="text" class="form-control" id="cuit" placeholder="Ingrese el Nro de CUIT sin puntos ni guiones como separación" name="cuit" maxlength="11" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Ingrese la dirección de la Empresa" name="direccion" required>
                        </div>
                        
                        <div class="form-group">
                        <label for="provincia">Provincias</label>
                        <select class="form-control" name="cod_provincia" id="cod_provincia" onchange="CargarLocalidad(this.value);" required>
                        <option value="" disabled selected>Seleccionar</option>';
                        
                        
                        $query = "SELECT cod_prov, provincia FROM glh_provincias order by provincia ASC";
                        mysqli_select_db($conn,'gnu_lihab');
                        $res = mysqli_query($conn,$query);

                        if($res){
                            while($valores = mysqli_fetch_array($res)){
                                echo '<option value="'.$valores[cod_prov].'" >'.$valores[provincia].'</option>';
                            }
                            }
                        
                    echo '</select>
                            </div><hr>
                            
                            <div class="form-group">
                                <label for="localidad">Localidades:</label>
                                <select class="form-control" name="cod_localidad" id="cod_localidad" required>
                                    <div id="respuesta"></div>
                                </select>
                            </div><hr>
                                      
                    
                    </div>
                </div>
                </div><hr>
                
                <button type="submit" class="btn btn-secondary btn-block" id="add_new_empresa" name="agregar_empresa">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Agregar</button>
            </form>
           
            </div>';


}



/*
** formulario de edición de empresas
*/
function formEditarEmpresas($id,$conn){

    $sql = "select * from glh_empresas where id = '$id'";
    mysqli_select_db($conn,'gnu_lihab');
    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query)){
        $razon_social = $row['razon_social'];
        $tipo_sociedad = $row['tipo_sociedad'];
        $cuit = $row['cuit'];
        $direccion = $row['direccion'];
        $cod_provincia = $row['cod_provincia'];
    }
    

    echo '<div class="container">
            <div class="alert alert-secondary">
            Editar Empresa
            </div>
                                   
            <form id="fr_edit_empresa_ajax" method="POST">
            <input type="hidden" value="'.$id.'" name="id" id="id">
             
            <div class="container">     
                <div class="row">
                    <div class="col-sm-6">
                    
                                          
                        <div class="form-group">
                            <label for="razon_social">Razón Social:</label>
                            <input type="text" class="form-control" id="edit_razon_social" name="razon_social" placeholder="Ingrese el Nombre de la Empresa" value="'.$razon_social.'" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEditEmpresa("edit_razon_social")>Editar</button><hr>
                        </div>
                    
                        <div class="form-group">
                            <label for="tipo_sociedad">Tipo de Sociedad:</label>
                            <select class="form-control" id="edit_tipo_sociedad" name="tipo_sociedad" required disabled>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="SA"   '.($tipo_sociedad == "SA" ? "selected" : ""). '>Sociedad Anónima</option>
                                <option value="SCS"  '.($tipo_sociedad == "SCS" ? "selected" : ""). '>Sociedad Comandita Simple</option>
                                <option value="SRL"  '.($tipo_sociedad == "SRL" ? "selected" : ""). '>Sociedad de Responsabilidad Limitada</option>
                                <option value="SNC"  '.($tipo_sociedad == "SNC" ? "selected" : ""). '>Sociedad de Nombre Colectivo</option>
                                <option value="SCA"  '.($tipo_sociedad == "SCA" ? "selected" : ""). '>Sociedad de Comandita por Acciones</option>
                                <option value="SRL"  '.($tipo_sociedad == "SRL" ? "selected" : ""). '>Sociedad de Responsabilidad Limitada</option>
                                <option value="SAS"  '.($tipo_sociedad == "SAS" ? "selected" : ""). '>Sociedad por Acciones Simplificada</option>
                                <option value="COOP" '.($tipo_sociedad == "COOP" ? "selected" : ""). '>Cooperativa</option>
                                <option value="SSFL" '.($tipo_sociedad == "SSFL" ? "selected" : ""). '>Sociedad sin Fines de Lucro</option>
                                <option value="FUN"  '.($tipo_sociedad == "FUN" ? "selected" : ""). '>Fundación</option>
                            </select>
                            <button type="button" class="btn btn-warning" onclick=callEditEmpresa("edit_tipo_sociedad")>Editar</button><hr>
                        </div>
                        
                        <div class="form-group">
                            <label for="cuit">CUIT:</label>
                            <input type="text" class="form-control" id="edit_cuit" placeholder="Ingrese el Nro de CUIT sin puntos ni guiones como separación" name="cuit" value="'.$cuit.'" maxlength="11" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEditEmpresa("edit_cuit")>Editar</button><hr>
                        </div>
                        
                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" class="form-control" id="edit_direccion" placeholder="Ingrese la dirección de la Empresa" name="direccion" value="'.$direccion.'" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEditEmpresa("edit_direccion")>Editar</button><hr>
                        </div>
                        
                        <div class="form-group">
                        <label for="provincia">Provincias</label>
                        <select class="form-control" name="cod_provincia" id="edit_cod_provincia" onchange="CargarLocalidad(this.value);" required disabled>
                        <option value="" disabled selected>Seleccionar</option>';
                        
                        
                        $query = "SELECT cod_prov, provincia FROM glh_provincias order by provincia ASC";
                        mysqli_select_db($conn,'gnu_lihab');
                        $res = mysqli_query($conn,$query);

                        if($res){
                            while($valores = mysqli_fetch_array($res)){
                                echo '<option value="'.$valores[cod_prov].'" '.("'.$cod_provincia.'" == "'.$valores[cod_prov].'" ? "selected" : "").'>'.$valores[provincia].'</option>';
                            }
                            }
                        
                    echo '</select>
                    <button type="button" class="btn btn-warning" onclick=callEditEmpresa("edit_cod_provincia")>Editar</button>
                            </div><hr>
                            
                            <div class="form-group">
                                <label for="localidad">Localidades:</label>
                                <select class="form-control" name="cod_localidad" id="cod_localidad" required>
                                    <div id="respuesta"></div>
                                </select>
                            </div>
                                      
                    
                    </div>
                </div>
                </div><hr>
                
                <button type="submit" class="btn btn-secondary btn-block" id="update_empresa" name="update_empresa">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/document-save-as.png" /> Guardar</button>
            </form>
           
            </div>';


}


// ==================================================================================================================================== //
// PERSISTENCIA EMPRESAS
function addNewEmpresa($razon_social,$tipo_sociedad,$cuit,$direccion,$cod_prov,$cod_loc,$conn){
    
    mysqli_select_db($conn,'gnu_lihab');
    $sql = "select cuit from glh_empresas where cuit = '$cuit'";
    $query = mysqli_query($conn,$sql);
    
    
      
    if($query){  
      
      $rows = mysqli_num_rows($query);
      
    if($rows == 0){
    
        $sql_2 = "INSERT INTO glh_empresas ".
                 "(razon_social,tipo_sociedad,cuit,direccion,cod_localidad,cod_provincia)".
                 "VALUES ".
                 "('$razon_social','$tipo_sociedad','$cuit','$direccion','$cod_loc','$cod_prov')";
                 
                 $query_2 = mysqli_query($conn,$sql_2);
                        
            if($query_2){
                echo 1; // registro insertado correctamente
            }else{
                echo -1; // hubo un problema al insertar el registro
            }
    
    }else if($rows == 1){
        
            echo 4; // empresa existente
    }
    }else{
        echo 7; // no se pudo realizar la consulta
    }
    
}

/*
** ACTUALIZAR EMPRESA EN BASE DE DATOS
*/
function updateEmpresa($id,$razon_social,$tipo_sociedad,$cuit,$direccion,$cod_prov,$cod_loc,$conn){

    if($conn){

    mysqli_select_db($conn,'gnu_lihab');
    $sql = "update glh_empresas set 
            razon_social = '$razon_social', 
            tipo_sociedad = '$tipo_sociedad', 
            cuit = '$cuit', 
            direccion = '$direccion', 
            cod_provincia = '$cod_prov',
            cod_localidad = '$cod_loc'
            where id = '$id'";
    $query = mysqli_query($conn,$sql);
    
    if($query){
                echo 1; // registro insertado correctamente
            }else{
                echo -1; // hubo un problema al insertar el registro
            }
    }else{
        echo 7; // no hay conexion
    }

}

// ==================================================================================================================================== //
// FORMULARIO CONCEPTOS
/*
** formulario de alta de conceptos
*/
function altaConceptos($concepto){

    

    echo '<div class="container">
            <div class="alert alert-secondary">
            Alta de Concepto
            </div>
                                   
            <form id="fr_add_new_concepto_ajax" method="POST">
            
             
            <div class="container">     
                <div class="row">
                    <div class="col-sm-6">
                    
                                          
                        <div class="form-group">
                            <label for="tipo_concepto">Tipo Concepto:</label>
                            <input type="text" class="form-control" id="tipo_concepto" name="tipo_concepto" value="'.$concepto.'" readonly required>
                        </div>
                    
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" class="form-control" id="descripcion" placeholder="Ingrese descripción del concepto" name="descripcion" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="porcentaje">Porcentaje:</label>
                            <input type="number" class="form-control" id="porcentaje" placeholder="Ingrese el porcentaje como un valor entero" name="porcentaje" required>
                        </div>
                                      
                    
                    </div>
                </div>
                </div><hr>
                
                <button type="submit" class="btn btn-secondary btn-block" id="add_new_concepto" name="agregar_empleado">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/list-add.png" /> Agregar</button>
            </form>
           
            </div>';


}


/*
** formulario de edición de conceptos
*/
function formEditConceptos($id,$conn){

    $sql = "select * from glh_conceptos where id = '$id'";
    mysqli_select_db($conn,'gnu_lihab');
    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query)){
        $cod_concepto = $row['cod_concepto'];
        $tipo_concepto = $row['tipo_concepto'];
        $descripcion = $row['descripcion'];
        $porcentaje = $row['porcentaje'];
    }

    echo '<div class="container">
            <div class="alert alert-secondary">
            Editar Concepto
            </div>
                                   
            <form id="fr_edit_concepto_ajax" method="POST">
            
             <input type="hidden" id="id" name="id" value="'.$id.'" required>
            
            <div class="container">     
                <div class="row">
                    <div class="col-sm-6">
                    
                        <div class="form-group">
                            <label for="cod_concepto">Código Concepto:</label>
                            <input type="text" class="form-control" id="edit_cod_concepto" name="cod_concepto" value="'.$cod_concepto.'" required readonly>
                        </div>
                                          
                        <div class="form-group">
                            <label for="tipo_concepto">Tipo Concepto:</label>
                            <input type="text" class="form-control" id="edit_tipo_concepto" name="tipo_concepto" value="'.$tipo_concepto.'" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEdit("edit_tipo_concepto")>Editar</button>
                        </div>
                    
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" class="form-control" id="edit_descripcion" name="descripcion" value="'.$descripcion.'" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEdit("edit_descripcion")>Editar</button>
                        </div>
                        
                        <div class="form-group">
                            <label for="porcentaje">Porcentaje:</label>
                            <input type="number" class="form-control" id="edit_porcentaje" name="porcentaje" value="'.$porcentaje.'" required readonly>
                            <button type="button" class="btn btn-warning" onclick=callEdit("edit_porcentaje")>Editar</button>
                        </div>
                                      
                    
                    </div>
                </div>
                </div><hr>
                
                <button type="submit" class="btn btn-secondary btn-block" id="update_concepto" name="editar_concepto">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/document-save-as.png" /> Aceptar</button>
                <button type="submit" class="btn btn-primary btn-block" id="update_concepto" name="remunerativos">
                    <img class="img-reponsive img-rounded" src="../../icons/actions/arrow-left.png" /> Volver a Conceptos</button>
            </form>
           
            </div>';


}

// ====================================================================== //
// PERSISTENCIA CONCEPTOS//
// ====================================================================== //
/*
** PERSISTENCIA A BASE DE NUEVO CONCEPTO
*/

function addNewConcepto($tipo_concepto,$descripcion,$porcentaje,$conn){
    
    
   
    $sql = "select descripcion from glh_conceptos where descripcion = '$descripcion'";
    mysqli_select_db($conn,'gnu_lihab');
    $query = mysqli_query($conn,$sql);
    
    
    
    $sql_1 = "select max(cod_concepto) as cod_concepto from glh_conceptos where tipo_concepto = '$tipo_concepto'";
    mysqli_select_db($conn,'gnu_lihab');
    $query_1 = mysqli_query($conn,$sql_1);
    while($row = mysqli_fetch_array($query_1)){
        $codigo = $row['cod_concepto'];
    }
    
    
    
                  if($tipo_concepto === 'Remunerativo'){
                
                            //$cod_concepto = 1001; // los conceptos REMUNERATIVOS estarán en el rango de 1000
                            
                            if(($codigo == 'NULL') || ($codigo == 0)){
                                
                                $codigo = 1001;
                            
                            }
                            else if($codigo != 0){
                            
                                $codigo += 1;
                            }
                    }
                    
                    
                    if($tipo_concepto === 'No Remunerativo'){
                        
                            $cod_concepto = 2001; // los conceptos NO REMUNERATIVOS estarán en el rango de 2000
                                                       
                            
                            if(($codigo == 'NULL') || ($codigo == 0)){
                            
                                $codigo = $cod_concepto;
                            
                            }
                            else if($codigo != 0){
                            
                                $codigo += 1;
                            }
                    }
                    
                    
                    if($tipo_concepto === 'Otro'){
                    
                            $cod_concepto = 3001; // los conceptos OTROS estarán en el rango de 3000
                            
                            if(($codigo == 'NULL') || ($codigo == 0)){
                                
                                $codigo = $cod_concepto;
                            
                            }
                            else if($codigo != 0){
                            
                                $codigo += 1;
                            }
                    }
                    
                    if($tipo_concepto === 'Convenio'){
                        
                            $cod_concepto = 4001; // los conceptos CONVENIO estarán en el rango de 4000

                            if(($codigo == 'NULL') || ($codigo == 0)){
                                
                                $codigo = $cod_concepto;
                            
                            }
                            else if($codigo != 0){
                            
                                $codigo += 1;
                            }
                    }
    
    if($query){
    
        $resp = mysqli_num_rows($query);
        
        if($resp == 0){
        
                
            $sql_1 = "INSERT INTO glh_conceptos ".
                        "(cod_concepto,tipo_concepto,descripcion,porcentaje)".
                        "VALUES ".
                        "('$codigo','$tipo_concepto','$descripcion','$porcentaje')";
                         $query_1 = mysqli_query($conn,$sql_1);
                        
            if($query_1){
                echo 1; // registro insertado correctamente
            }else{
                echo -1; // hubo un problema al insertar el registro
            }
        
        }else if($resp == 1){
        
            echo 4; // concepto existente
        }
    }else{
        echo 7; // no se ha podido conectar
    }

}


/*
** PERSISTENCIA ACTUALIZAR CONCEPTO EN BASE
*/
function updateConcepto($id,$cod_concepto,$tipo_concepto,$descripcion,$porcentaje,$conn){
    
    if($conn){
    
            mysqli_select_db($conn,'gnu_glihab');
            $sql = "update glh_conceptos set cod_concepto = '$cod_concepto', tipo_concepto = '$tipo_concepto', descripcion = '$descripcion', porcentaje = '$porcentaje' where id = '$id'";
            $query = mysqli_query($conn,$sql);
            
            if($query){
                echo 1; // registro actualizado exitosamente
            }else{
                echo -1; // no se pudo realizar la actualización
            }   
    }else{
        echo 7; // error de conexion
    }

}
?>
