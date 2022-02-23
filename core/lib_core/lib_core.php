<?php

function modal_logIn(){

    echo '<!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ingresar a GNU LiHab</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
           <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">Usuario:</label>
                    <input type="text" class="form-control" name="user" placeholder="Ingrese su usuario" id="user">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Ingrese su password" id="pwd">
                </div>
                
                <button type="submit" class="btn btn-primary btn-block" name="A">Ingresar</button>
                </form> 
          
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="forms/password/forgot-password.php"><button type="button" class="btn btn-warning">Olvidé mi Password</button></a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>';


}


function modal_logout(){

    echo '<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Desea Desconectarse?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Logout" si está seguro que desea terminar la sesion.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                    <a href="../../logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
                </div>
            </div>
        </div>
    </div>';

}



/*
** Funcion de validación de ingreso
*/
function logIn($user,$pass,$conn){
    
    $_SESSION['user'] = $user;
	$_SESSION['pass'] = $pass;
	
	mysqli_select_db($conn,'gnu_lihab');
	$sql_1 = "select password from glh_usuarios where user = '$user'";
	$query_1 = mysqli_query($conn,$sql_1);
	while($row = mysqli_fetch_array($query_1)){
        $hash = $row['password'];
	}
	
    
    
	$sql = "SELECT * FROM glh_usuarios where user = '$user' and role = 1";
	$q = mysqli_query($conn,$sql);
	
	$query = "SELECT * FROM glh_usuarios where user = '$user' and role = 0";
	$retval = mysqli_query($conn,$query);
	
	
	
	if(!$q && !$retval){	
                echo '<div class="container"><div class="alert alert-danger" role="alert">';
				echo "<strong>Atención!  </strong>" .$_SESSION["user"];
				echo "<br>";
				echo '<span class="pull-center ">
                        <img src="core/icons/status/security-low.png"  class="img-reponsive img-rounded"><strong> Usuario Bloqueado. Contacte al Administrador.</strong></span>';
				echo "</div></div>";
				exit;
			
			}
		
			if(($user = mysqli_fetch_assoc($retval)) && (password_verify($pass,$hash))){
				

				echo '<div class="alert alert-danger" role="alert">';
				echo "<strong>Atención!  </strong>" .$_SESSION["user"];
				echo "<br>";
				echo '<span class="pull-center "><img src="core/icons/status/security-low.png"  class="img-reponsive img-rounded"><strong> Usuario Bloqueado. Contacte al Administrador.</strong>';
				echo "</div>";
				exit;
			}

			if(($user = mysqli_fetch_assoc($q)) && (password_verify($pass,$hash))){
                
                               
				if($user['entorno'] == 'ADM'){
                  
				echo "<br>";
				echo '<div class="container"><div class="alert alert-success" role="alert">';
				echo '<button class="btn btn-success">
				      <span class="spinner-border spinner-border-sm"></span>
				      </button>';
				echo "<strong> Bienvenido!  </strong>" .$_SESSION['user'];
				echo "<strong> Aguarde un Instante...</strong>";
				echo "<br>";
				echo "</div></div>";
  				echo '<meta http-equiv="refresh" content="5;URL=core/admin/main/main.php "/>';
				
			}if($user['entorno'] == 'EMP'){
				
				echo '<div class="container">
                        <div class="alert alert-success" role="alert">';
				echo '<button class="btn btn-success">
				      <span class="spinner-border spinner-border-sm"></span>
				      </button>';
				echo "<strong> Bienvenido!  </strong>" .$_SESSION["user"];
				echo "<strong> Aguarde un Instante...</strong>";
				echo "<br>";
				echo "</div></div>";
  				echo '<meta http-equiv="refresh" content="5;URL=core/employes/main/main.php "/>';
				
			}
			if($user['entorno'] == 'PER'){
				
				echo '<div class="container">
                        <div class="alert alert-success" role="alert">';
				echo '<button class="btn btn-success">
				      <span class="spinner-border spinner-border-sm"></span>
				      </button>';
				echo "<strong> Bienvenido!  </strong>" .$_SESSION["user"];
				echo "<strong> Aguarde un Instante...</strong>";
				echo "<br>";
				echo "</div></div>";
  				echo '<meta http-equiv="refresh" content="5;URL=core/humnan_resources/main/main.php "/>';
				
			}
			if($user['entorno'] == 'LIQ'){
				
				echo '<div class="container">
                        <div class="alert alert-success" role="alert">';
				echo '<button class="btn btn-success">
				      <span class="spinner-border spinner-border-sm"></span>
				      </button>';
				echo "<strong> Bienvenido!  </strong>" .$_SESSION["user"];
				echo "<strong> Aguarde un Instante...</strong>";
				echo "<br>";
				echo "</div></div>";
  				echo '<meta http-equiv="refresh" content="5;URL=core/salary_settlement/main/main.php "/>';
				
			}
			if($user['entorno'] == 'MED'){
				
				echo '<div class="container">
                        <div class="alert alert-success" role="alert">';
				echo '<button class="btn btn-success">
				      <span class="spinner-border spinner-border-sm"></span>
				      </button>';
				echo "<strong> Bienvenido!  </strong>" .$_SESSION["user"];
				echo "<strong> Aguarde un Instante...</strong>";
				echo "<br>";
				echo "</div></div>";
  				echo '<meta http-equiv="refresh" content="5;URL=core/occupational_medicine/main/main.php "/>';
				
			}
			}else{
				echo '<div class="container">
                        <div class="alert alert-danger" role="alert">';
				echo '<span class="pull-center "><img src="core/icons/status/dialog-warning.png"  class="img-reponsive img-rounded"> Usuario o Contraseña Incorrecta. Reintente Por Favor....';
				echo "</div></div>";
				}
}


?>
