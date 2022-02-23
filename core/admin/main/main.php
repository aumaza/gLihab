<?php session_start();
      ini_set('display_errors', 1);
      include "../../connection/connection.php";
      include "../../lib_core/lib_core.php";
      include "lib_main.php";
      include "../../lib_empleados/lib_empleados.php";
      include "../../lib_nomencladores/lib_nomencladores.php";
      
      $usuario = $_SESSION['user'];
	       
      $sql = "select * from glh_usuarios where user = '$usuario'";
	mysqli_select_db($conn,$dbase);
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($query)){
	      $nombre = $row['nombre'];
	}
	
	
	
	if($usuario == null || $usuario == ''){
	echo '<!DOCTYPE html>
        <html lang="es">
        <head>
        <title>GNU LiHab - Administración de Personal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../../../img/favicon.png" />
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">';
       
        echo '</head><body>';
        echo '<br><div class="container">
                <div class="alert alert-danger" role="alert">';
        echo '<p align="center">
		<img src="../../icons/status/task-attempt.png"  class="img-reponsive img-rounded"> 
		  Su sesión a caducado. Por favor, inicie sesión nuevamente</p>';
        echo '<a href="../../logout.php"><hr>
		<button type="buton" class="btn btn-secondary btn-block">
		  <img src="../../icons/status/dialog-password.png"  class="img-reponsive img-rounded"> Iniciar</button></a>';	
        echo "</div></div>";
        die();
        echo '</body></html>';
	}




?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GNU LiHab - Espacio de Administrador</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <!-- Jquery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    

</head>

<body id="page-top">

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="main.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">GNU LiHab</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tablero Principal</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menú
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php mainModules(); ?>

            <!-- Nav Item - Utilities Collapse Menu -->
            <?php mainTools(); ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php mainAddons(); ?>

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            
        </ul>
        <!-- End of Sidebar -->
<!--  /////////////////////////////////////////////////////////////////////////////////////////////////////  -->
        
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php topNavBar($nombre); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php mainDashboardHeading(); ?>
                    <!-- End Page Heading -->

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <?php mainMensualEarning($conn); ?>
                        <!-- End Earnings (Monthly) Card Example -->

                        <!-- Earnings (Monthly) Card Example -->
                        <?php mainAnualEarning($conn); ?>
                        <!-- End Earnings (Monthly) Card Example -->

                        <!-- Earnings  Tasks -->
                        <?php mainTask($conn); ?>
                        <!-- End Earnings  Tasks -->    
                        
                        <!-- Pending Requests Card Example -->
                        <?php mainPendinRequest($conn); ?>
                        <!-- End Pending Requests Card Example -->
                        
                        
                    </div><hr>
                    <!--  End Row Contents   -->
                    
                    
<!-- Main Menu -->
    <div class="row">

    <?php
    
        if($conn){
        
            // EMPLEADOS //
            // listar empleados
            if(isset($_POST['empleados'])){
                empleados($conn);
            }
            if(isset($_POST['nuevo_empleado'])){
                altaEmpleado();
            }
        
            
            
            // TABLAS BASE DEL SISTEMA //
            // ESPACIO ABM EMPRESAS
            if(isset($_POST['empresas'])){
                empresas($conn);
            }
            if(isset($_POST['nueva_empresa'])){
                formAltaEmpresas($conn);
            }
            if(isset($_POST['editar_empresa'])){
                $id = mysqli_real_escape_string($conn,$_POST['id']);
                formEditarEmpresas($id,$conn);
            }
            
            
            // ESPACIO LISTAR TABLAS BASES
            if(isset($_POST['municipios'])){
                municipios($conn);
            }
            if(isset($_POST['localidades'])){
                localidades($conn);
            }
            if(isset($_POST['provincias'])){
                provincias($conn);
            }
            if(isset($_POST['remunerativos'])){
                conceptosRemunerativos($conn);
            }
            if(isset($_POST['no_remunerativos'])){
                conceptosNoRemunerativos($conn);
            }
            if(isset($_POST['otros'])){
                conceptosOtros($conn);
            }
            if(isset($_POST['convenio'])){
                conceptosConvenio($conn);
            }
            
            // ESPACIO CONCEPTOS //
            if(isset($_POST['nuevo_concepto'])){
                $concepto = mysqli_real_escape_string($conn,$_POST['concepto']);
                altaConceptos($concepto);
            }
            if(isset($_POST['editar_concepto'])){
                $id = mysqli_real_escape_string($conn,$_POST['id']);
                formEditConceptos($id,$conn);
            }
            
            // ESPACIO CATEGORIAS
            if(isset($_POST['categorias'])){
                categorias($conn);
            }
            if(isset($_POST['nueva_categoria'])){
                formAltaCategorias($conn);
            }
            
            
            // ESPACIO AGRUPAMIENTOS
            if(isset($_POST['agrupamientos'])){
                agrupamientos($conn);
            }
            if(isset($_POST['nuevo_agrupamiento'])){
                formAltaAgrupamiento();
            }
            if(isset($_POST['editar_agrupamiento'])){
                $id = mysqli_real_escape_string($conn,$_POST['id']);
                formEditAgrupamiento($id,$conn);
            }
        
        
        
        
        
        
        
        }else{
        
            mysqli_error($conn);
        
        }
    
    
    
    
    
    
    
    
    
    ?>
    
    
    
    
                
                
     </div>
<!-- End Main Manu  -->
                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php mainFooter(); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
    <!-- Sistem JavaScript-->
    <script src="../../lib_nomencladores/lib_nomencladores.js"></script>
    <!-- Bootstrap core JavaScript-->
    
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    
    

</body>

 <?php modal_logout(); ?>

</html>
