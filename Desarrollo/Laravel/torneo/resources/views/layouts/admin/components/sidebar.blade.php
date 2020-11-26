<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html" key="t-default">Default</a></li>
                        <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                        <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('localidad.create')}}" key="t-horizontal">Agregar localidad</a></li>
                        <li><a href="{{route('localidad.index')}}" key="t-vertical">Modificar localidad</a></li>

                    </ul>
                </li>




            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
