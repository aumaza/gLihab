<?php include "../../core/connection/connection.php";
      include "lib_password.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>gLihab - Olvidé mi Password</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Olvidaste tu Password?</h1>
                                        <p class="mb-4">No hay problema, nosotros nos ocupamos!. Ingresá el email con el que te registramos oportunamente, tipeá tu nueva password y la renovas de forma sencilla.</p>
                                    </div>
                                    
                                    <form  id="fr_nuevo_password_ajax" method="POST" class="user">
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="user" name="user" aria-describedby="emailHelp" placeholder="Ingresá tu email..." required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="pass_1" name="pass_1" aria-describedby="emailHelp" placeholder="Ingresá el Password nuevo" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="pass_2" name="pass_2" aria-describedby="emailHelp" placeholder="Repetí el Password que tipeaste arriba" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success btn-user btn-block" id="add_nuevo_password" name="add_nuevo_password"> Reset Password</button><hr>
                                        
                                    </form>
                                    
                                    <a href="../../#" class="btn btn-primary btn-user btn-block"> Volver a Inicio</a>
                                    
                                    <hr>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Password Javascript -->
    <script src="password.js"></script>
    
    <!-- Bootstrap core JavaScript-->
    
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
