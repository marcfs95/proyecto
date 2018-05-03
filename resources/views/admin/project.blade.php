@extends('layouts.monsterMaster')

@section('navbar')
<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="javascript:void(0)">
                <!-- Logo icon -->
                <b>
                    <img src="{{asset('images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                {{-- <span>
                    <img src="images/logo-text.png" alt="homepage" class="ligth-logo" />
                </span> --}}
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">

            <ul class="navbar-nav mr-auto mt-md-0 ">
                <!-- This is  -->
                <li class="nav-item">
                    <a class="nav-link nav-toggler text-muted waves-effect waves-dark" href="javascript:void(0)">
                        <i class="ti-layout-menu-v"></i>
                    </a>
                </li>

                <!-- ============================================================== -->
                <!-- Notificaciones -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="mdi mdi-message"></i>
                        {{-- si hay notificaciones mostramos icono rojo --}}
                        {{-- <div class="notify">
                            <span class="heartbit"></span>
                            <span class="point"></span>
                        </div> --}}
                    </a>
                    <div class="dropdown-menu mailbox animated bounceInDown">
                        <ul>
                            <li>
                                <div class="drop-title">Notificaciones</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <!-- Mensaje -->
                                    <a href="#">
                                        <div class="btn btn-danger btn-circle">
                                            <i class="fa fa-link"></i>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Desarrolo terminado</h5>
                                            <span class="mail-desc">avisar cliente!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center" href="javascript:void(0);">
                                    <strong>Todas las notificaciones</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Mensajes -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- Usuario -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            <img src="{{asset('images/users/1.jpg')}}" alt="user" class="profile-pic m-r-5" />Administrador
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </li>
            </ul>
        </div>
    </nav>
</header>
@endsection 

@section('aside')
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">NOMBRE DEL PROYECTO</li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Panel administracion</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="ui-cards.html">Modificar proyecto</a></li>
                            <li><a href="ui-cards.html">Asignar nuevo usuario</a></li>
                            <li><a href="ui-cards.html">Asignar nuevo cliente</a></li>
                            <li><a href="ui-cards.html">Notificacion</a></li>
                            <li><a href="ui-buttons.html">Git</a></li>
                        </ul>
                    </li>
                    <li class="nav-devider"></li>
                        <li>
                            <a href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Información general </span></a>
                        </li>
                    <li>
                        <a href="#" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Usuarios <span class="label label-rounded label-success">4</span></span></a>
                    </li>
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Zona cliente</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="app-email.html">Mailbox</a></li>
                            <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                            <li><a href="app-compose.html">Compose Mail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Estructura</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="ui-cards.html">Paginas</a></li>
                            <li><a href="ui-Usar-card.html">Carpetas</a></li>
                            <li><a href="ui-buttons.html">Git</a></li>
                        </ul>
                    </li>
                    <li class="nav-devider"></li>
                    
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer">
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
        </div>
        <!-- End Bottom points-->
    </aside>  
@endsection

@section('contenido')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
        <div class="contenido-pagina">

                <div class="row page-titles">
                        <div class="col-md-6 col-8 align-self-center">
                            {{-- <h3 class="text-themecolor m-b-0 m-t-0">Nombre de proyecto</h3> --}}
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/landing') }}">Inicio</a></li>
                                <li class="breadcrumb-item active"> nombre de proyecto</li>
                            </ol>
                        </div>
                </div>
                <!-- ============================================================== -->
                <!-- Stats departamentos  -->
                <!-- ============================================================== -->
                <div class="row">
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Daily Sales</h4>
                                    <div class="text-right">
                                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> $120</h2>
                                        <span class="text-muted">Todays Income</span>
                                    </div>
                                    <span class="text-success">80%</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Weekly Sales</h4>
                                    <div class="text-right">
                                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> $5,000</h2>
                                        <span class="text-muted">Todays Income</span>
                                    </div>
                                    <span class="text-info">30%</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Monthly Sales</h4>
                                    <div class="text-right">
                                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-purple"></i> $8,000</h2>
                                        <span class="text-muted">Todays Income</span>
                                    </div>
                                    <span class="text-purple">60%</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Yearly Sales</h4>
                                    <div class="text-right">
                                        <h2 class="font-light m-b-0"><i class="ti-arrow-down text-danger"></i> $12,000</h2>
                                        <span class="text-muted">Todays Income</span>
                                    </div>
                                    <span class="text-danger">80%</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                <!-- ============================================================== -->
                <!-- Fin stats departamentos  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Tareas a realizar  -->
                <!-- ============================================================== -->
                <div class="card-body m-t-50">
                        <button class="pull-right btn btn-sm btn-rounded btn-success" data-toggle="modal" data-target="#myModal">Add Task</button>
                        <h4 class="card-title">Lista de Tareas</h4>
                        <!-- ============================================================== -->
                        <!-- To do list widgets -->
                        <!-- ============================================================== -->
                        <div class="to-do-widget m-t-20">
                            <!-- .modal for add task -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Añadir tarea</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email address</label>
                                                    <input type="email" class="form-control" placeholder="Enter email">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                        <label for="inputSchedule" class=""> <span>Primera tarea</span> </label>
                                    </div>
                                    <ul class="assignedto">
                                        <li><img src="../storage/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                        <li><img src="../storage/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                    </ul>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                        <label for="inputCall" class=""> <span>Give Purchase report to</span> <span class="label label-light-danger">Today</span> </label>
                                    </div>
                                    <ul class="assignedto">
                                        <li><img src="../storage/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                    </ul>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                        <label for="inputBook" class=""> <span>Book flight for holiday</span> </label>
                                    </div>
                                    <div class="item-date"> 26 jun 2017</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                <!-- ============================================================== -->
                <!-- Fin Tareas a realizar  -->
                <!-- ============================================================== -->
                
                </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection
