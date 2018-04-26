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
                    <span>
                        <img src="images/logo-text.png" alt="homepage" class="ligth-logo" />
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- Notificaciones -->
                <!-- ============================================================== -->                
                <ul class="navbar-nav mr-auto mt-md-0 ">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    {{-- <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-message"></i></a> </li> --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
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
                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Todas las notificaciones</strong> <i class="fa fa-angle-right"></i> </a>
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
                        {{-- <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/1.jpg" alt="user" class="profile-pic m-r-5" /> Doe</a>
                        --}}
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                <img src="images/users/1.jpg" alt="user" class="profile-pic m-r-5" />Administrador <span class="caret"></span>
                            </a>
                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
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
                        <a href="#" aria-expanded="false"><i class="mdi mdi-format-line-weight"></i><span class="hide-menu">Proyectos </span></a>
                    </li>
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Panel de Aplicación</span></a>
                          <ul aria-expanded="false" class="collapse">
                              <li><a href="#">Gestión Usuarios</a></li>
                              <li><a href="#">Gestión Clientes</a></li>
                          </ul>
                    </li>
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
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row" style="justify-content: center;">
                                        <div class="round align-self-center round-success"><i class="ti-wallet"></i>
                                        </div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0">Desarollo</h3>
                                            <h5 class="text-muted m-b-0">en proceso</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row" style="justify-content: center;">
                                            <div class="round align-self-center round-info"><i class="ti-settings"></i>
                                            </div>
                                            <div class="m-l-10 align-self-center">
                                                <h3 class="m-b-0">Cola</h3>
                                                <h5 class="text-muted m-b-0">pendientes</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row" style="justify-content: center;">
                                        <div class="round align-self-center round-success"><i class="ti-wallet"></i>
                                        </div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0">Desarollo</h3>
                                            <h5 class="text-muted m-b-0">en proceso</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row" style="justify-content: center;">
                                            <div class="round align-self-center round-info"><i class="ti-settings"></i>
                                            </div>
                                            <div class="m-l-10 align-self-center">
                                                <h3 class="m-b-0">Cola</h3>
                                                <h5 class="text-muted m-b-0">pendientes</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>

            </div>
            <!-- Row -->
            {{-- <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Table</h4>
                        <h6 class="card-subtitle">Data table example</h6>
                        <div class="table-responsive m-t-40">
                            <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                                <div class="dataTables_length" id="myTable_length"><label>Show <select name="myTable_length" aria-controls="myTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="myTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="myTable"></label></div>
                                <table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 396px;">Name</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 582px;">Position</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 303px;">Office</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 167px;">Age</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 291px;">Start date</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 253px;">Salary</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries
                                </div>
                                <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate">
                                    <a class="paginate_button previous disabled" aria-controls="myTable" data-dt-idx="0" tabindex="0" id="myTable_previous">
                                        Previous
                                    </a>
                                        <span>
                                            <a class="paginate_button current" aria-controls="myTable" data-dt-idx="1" tabindex="0">
                                                1
                                            </a>
                                            <a class="paginate_button " aria-controls="myTable" data-dt-idx="2" tabindex="0">
                                                2
                                            </a>
                                            <a class="paginate_button " aria-controls="myTable" data-dt-idx="3" tabindex="0">
                                                3
                                            </a>
                                            <a class="paginate_button " aria-controls="myTable" data-dt-idx="4" tabindex="0">
                                                4
                                            </a>
                                            <a class="paginate_button " aria-controls="myTable" data-dt-idx="5" tabindex="0">
                                                5
                                            </a>
                                            <a class="paginate_button " aria-controls="myTable" data-dt-idx="6" tabindex="0">
                                                6
                                            </a>
                                        </span>
                                        <a class="paginate_button next" aria-controls="myTable" data-dt-idx="7" tabindex="0" id="myTable_next">
                                            Next
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> --}}
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        {{-- <footer class="footer text-center">
            © 2017 Monster Admin by wrappixel.com
        </footer> --}}
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection