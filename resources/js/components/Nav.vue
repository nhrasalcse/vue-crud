<template>
    <nav class="side-navbar">
        <div class="side-navbar-wrapper">
            <!-- Sidebar Header    -->
            <div class="sidenav-header d-flex align-items-center justify-content-center">
                <!-- User Info-->
                <div class="sidenav-header-inner text-center"><img :src="'public/backend/img/avatar-7.jpg'" alt="person" class="img-fluid rounded-circle">
                    <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
            </div>
            <!-- Sidebar Navigation Menus-->
            <div class="main-menu">
                <h5 class="sidenav-heading">Main</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled">
                    <li><router-link :to="{name :'Home'}"><i class="icon-home"></i>Home</router-link></li>
                    <li><router-link :to="{name:'Form'}"> <i class="icon-form"></i>Forms</router-link></li>
                    <li><router-link :to="{ name: 'Charts'}"> <i class="fa fa-bar-chart"></i>Charts</router-link></li>
                    <li><router-link :to="{ name: 'tables'}"><i class="icon-grid"></i>Tables</router-link></li>
                    <li><router-link :to="{ name: 'crud'}"><i class="icon-grid"></i>CRUD</router-link></li>
                    <!-- <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                      </ul>
                    </li> -->
                    <li><router-link :to="{ name: 'login'}"><i class="icon-interface-windows"></i>Login page</router-link></li>
                    <li> <a href="#"> <i class="icon-mail"></i>Demo
                        <div class="badge badge-warning">6 New</div></a></li>
                </ul>
            </div>
            <div class="admin-menu">
                <h5 class="sidenav-heading">Second menu</h5>
                <ul id="side-admin-menu" class="side-menu list-unstyled">
                    <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
                    <li> <a href="#"> <i class="icon-flask"> </i>Demo
                        <div class="badge badge-info">Special</div></a></li>
                    <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
                    <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
                </ul>
            </div>
        </div>
    </nav>
</template>
