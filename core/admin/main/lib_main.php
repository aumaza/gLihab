<?php

/*
** DASHBOARD HEADING
*/
function mainDashboardHeading(){
    
    echo '<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Espacio de Administrador</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
          </div>';
}


/*
** TOP NAV BAR
*/
function topNavBar($nombre){

    echo '<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem Ive been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last months report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they arent good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> '.$nombre.'</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>';

}


/*
** CRAGADOR DEL FOOTER
*/
function mainFooter(){

    echo '<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; GNU LiHab</span>
                    </div><hr>
                    
                    <div class="copyright text-center my-auto">
                        <span>Desarrollo: Slackzone Development</span>
                    </div>
                    
                </div>
          </footer>';


}


/*
** SOLICITUDES PENDIENTES
*/
function mainPendinRequest($conn){

    echo '<div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2 animate__animated animate__flipInX">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests
                            </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                    </div>
                </div>
            </div>
            </div>';
        
}


/*
** TAREAS
*/
function mainTask($conn){

    echo '<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2 animate__animated animate__flipInX">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

}


/*
** GANANCIAS ANUALES
*/
function mainAnualEarning($conn){

    echo '<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2 animate__animated animate__flipInX">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

}


/*
** GANANCIAS MENSUALES
*/
function mainMensualEarning($conn){

    echo '<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 animate__animated animate__flipInX">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

}


// ================================================================================================================================================= //
// SIDE BAR //

/*
** CAJA DE MODULOS
*/
function mainModules(){

    echo '<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Módulos de Trabajo</span>
                </a>
                
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <form action="#" method="POST">                        
                         <!-- administracion de personal -->
                        <div class="dropdown dropright btn-block">
                        <button type="button" class="btn btn-light btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                        <img class="img-reponsive img-rounded" src="../../icons/actions/resource-group.png" /> Admin. Personal
                        </button>
                        <div class="dropdown-menu">
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="empleados">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/meeting-attending.png" /> Empleados</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="licencias">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/view-time-schedule.png" /> Licencias</button>
                        </div>
                        </div>
                        
                        <!-- liquidaciones -->
                        <div class="dropdown dropright btn-block">
                        <button type="button" class="btn btn-light btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                        <img class="img-reponsive img-rounded" src="../../icons/actions/view-financial-transfer.png" /> Liquidaciones</button>
                        
                        <div class="dropdown-menu">
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="suelos">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/view-financial-list.png" /> Sueldos</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="aguinaldos">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/view-loan-asset.png" /> Aguinaldos</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="vacaciones">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/view-loan-asset.png" /> Vacaciones</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="ganancias">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/view-loan.png" /> Ganancias</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="egresos">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/view-bank-account.png" /> Egresos</button>
                        </div>
                        </div>
                        
                        <!-- servicio medico -->
                        <div class="dropdown dropright btn-block">
                        <button type="button" class="btn btn-light btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                        <img class="img-reponsive img-rounded" src="../../icons/emblems/emblem-favorite.png" /> Servicio Médico</button>
                        
                        <div class="dropdown-menu">
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="preocupacional">
                                <img class="img-reponsive img-rounded" src="../../icons/categories/applications-science.png" /> Preocupacional</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="art">
                                <img class="img-reponsive img-rounded" src="../../icons/categories/applications-engineering.png" /> ART</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="altas_medicas">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/story-editor.png" /> Altas Médicas</button>
                        </div>
                        </div>
                        
                        </form>
                        
                        
                    </div>
                </div>
            </li>';
}


/*
** CAJA DE HERRAMIENTAS
*/
function mainTools(){
    
    echo '<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Módulos de Sistema</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <h6 class="collapse-header">Sistema Interno:</h6>
                        
                        <form action="#" method="POST">                        
                         
                         <!-- administracion de personal -->
                        <div class="dropdown dropright btn-block">
                        <button type="button" class="btn btn-light btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                        <img class="img-reponsive img-rounded" src="../../icons/actions/tab-duplicate.png" /> Tablas Base
                        </button>
                        <div class="dropdown-menu">
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="empresas">
                                <img class="img-reponsive img-rounded" src="../../icons/categories/preferences-system.png" /> Empresas</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="categorias">
                                <img class="img-reponsive img-rounded" src="../../icons/categories/applications-engineering.png" /> Categorías</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="agrupamientos">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/code-class.png" /> Agrupamientos</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="provincias">
                                <img class="img-reponsive img-rounded" src="../../icons/emblems/argentina_map32x32.png" /> Provincias</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="localidades">
                                <img class="img-reponsive img-rounded" src="../../icons/emblems/location32x32.png" /> Localidades</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="municipios">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/view-bank.png" /> Municipios</button>
                        </div>
                        </div>
                        
                        <!-- liquidaciones -->
                        <div class="dropdown dropright btn-block">
                        <button type="button" class="btn btn-light btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                        <img class="img-reponsive img-rounded" src="../../icons/apps/preferences-plugin.png" /> Conceptos</button>
                        
                        <div class="dropdown-menu">
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="remunerativos">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/edit-table-delete-row.png" /> Remunerativos</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="no_remunerativos">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/edit-table-insert-row-above.png" /> No Remunerativos</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="otros">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/code-block.png" /> Otros</button>
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="convenio">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/code-class.png" /> Convenio</button>
                            
                        </div>
                        </div>
                        
                        <!-- servicio medico -->
                        <div class="dropdown dropright btn-block">
                        <button type="button" class="btn btn-light btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
                        <img class="img-reponsive img-rounded" src="../../icons/categories/accord.png" /> Convenios</button>
                        
                        <div class="dropdown-menu">
                            <button type="submit" class="btn btn-light btn-sm btn-block" name="convenios">
                                <img class="img-reponsive img-rounded" src="../../icons/actions/view-list-tree.png" /> Listar Convenios</button>
                            
                        </div>
                        </div>
                        
                        </form>
                        
                        
                    </div>
                </div>
            </li>';

}


/*
** CAJA DE AGREGADOS
*/
function mainAddons(){
    
    echo '<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Administrador de Archivos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                    </div>
                </div>
            </li>';
}

?>