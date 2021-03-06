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
                    <img src="images/logo-icon.png" alt="homepage" class="light-logo" />
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
                        <i class="ti-menu"></i>
                    </a>
                </li>

                <!-- ============================================================== -->
                <!-- Notificaciones -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="mdi mdi-message"></i>
                        <div class="notify">
                            <span class="heartbit"></span>
                            <span class="point"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu mailbox animated bounceInDown">
                        <ul>
                            <li>
                                <div class="drop-title">Notifications</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <!-- Mensaje -->
                                    <a href="#">
                                        <div class="btn btn-danger btn-circle">
                                            <i class="fa fa-link"></i>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Luanch Admin</h5>
                                            <span class="mail-desc">Just see the my new admin!</span>
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
            <!-- Usuario -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            <img src="images/users/1.jpg" alt="user" class="profile-pic m-r-5" />Administrador
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
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-format-line-weight"></i>
                        <span class="hide-menu">Proyectos </span>
                    </a>
                </li>
                <!-- ============================================================== -->
                <!-- Gestion administrador -->
                <!-- ============================================================== -->
                {{-- if (admin) --}}
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Panel de Aplicación</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('nuevo-proyecto') }}">Nuevo Proyecto</a>
                        </li>
                        <li>
                            <a href="{{ route('usuarios') }}">Gestión Usuarios</a>
                        </li>
                        <li>
                            <a href="{{ route('clientes') }}">Gestión Clientes</a>
                        </li>
                    </ul>
                </li>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings">
            <i class="ti-settings"></i>
        </a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email">
            <i class="mdi mdi-gmail"></i>
        </a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout">
            <i class="mdi mdi-power"></i>
        </a>
    </div>
    <!-- End Bottom points-->
</aside>
@endsection 

@section('contenido')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="contenido-pagina">

        <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card p-3">
                        <div class="card-body">
                            <div class="d-flex flex-row" style="justify-content: center;">
                                <div class="round align-self-center round-success">
                                    <i class="ti-wallet"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">Desarollo</h3>
                                    <div class="row m-l-2">
                                        <h5 class="text-muted m-b-0 text-success">en proceso</h5><span class="label label-rounded label-success m-l-3">5</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card p-3">
                        <div class="card-body">
                            <div class="d-flex flex-row" style="justify-content: center;">
                                <div class="round align-self-center round-primary">
                                    <i class="ti-settings"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">Cola</h3>
                                    <div class="row m-l-2">
                                        <h5 class="text-muted m-b-0 text-primary">pendientes</h5>
                                        <span class="label label-rounded label-primary m-l-3">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div> 

		<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Proyecto</th>
								<th class="column2">Fecha Comienzo</th>
								<th class="column3">Fecha Entrega</th>
								<th class="column4">Dominio</th>
								<th class="column5">Contacto</th>
								<th class="column6">Estado</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">
                                        {{-- <a href="{{ route('project', [$proyecto->slug]) }}"> {{ $proyecto->nombre }}</a> --}}
                                        <a href="{{ route('project', ['albellons']) }}">
                                        Albellons
                                    </a>
                                    </td>
									<td class="column2">20/04/2018</td>
									<td class="column3">26/06/2018</td>
									<td class="column4"><a href="">www.dominio.com</a></td>
									<td class="column5">Pedro</td>
									<td class="column6">
                                        <div class="progress m-t-5">
                                            <div class="progress-bar bg-warning" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                        </div></td>
								</tr>
								<tr>
									<td class="column1">Albellons</td>
									<td class="column2">20/04/2018</td>
									<td class="column3">26/06/2018</td>
									<td class="column4"><a href="">www.dominio.com</a></td>
									<td class="column5">Pedro</td>
									<td class="column6">
                                        <div class="progress m-t-5">
                                            <div class="progress-bar bg-danger" style="width: 20%; height:15px;" role="progressbar">10%</div>
                                        </div></td>
								</tr>
								<tr>
									<td class="column1">Albellons</td>
									<td class="column2">20/04/2018</td>
									<td class="column3">26/06/2018</td>
									<td class="column4"><a href="">www.dominio.com</a></td>
									<td class="column5">Pedro</td>
									<td class="column6">
                                        <div class="progress m-t-5">
                                            <div class="progress-bar bg-success" style="width: 100%; height:15px;" role="progressbar">100%</div>
                                        </div></td>
								</tr>
								<tr>
									<td class="column1">Albellons</td>
									<td class="column2">20/04/2018</td>
									<td class="column3">26/06/2018</td>
									<td class="column4"><a href="">www.dominio.com</a></td>
									<td class="column5">Pedro</td>
									<td class="column6">
                                        <div class="progress m-t-5">
                                            <div class="progress-bar bg-danger" style="width: 35%; height:15px;" role="progressbar">40%</div>
                                        </div></td>
								</tr>
								
						</tbody>
					</table>
		</div>
</div>
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
{{--
<footer class="footer text-center">
    © 2017 Monster Admin by wrappixel.com
</footer> --}}
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection