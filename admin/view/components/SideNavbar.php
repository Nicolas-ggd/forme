<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">

        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#"
                   class="d-block"><?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] .' '. $_SESSION['user_lastname'] : 'user'; ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="?action=homeIndex" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>



                </li>
                <li class="nav-item">

                    <a href="?action=home" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>

                        <p>
                            პროდუქცია
                        </p>
                    </a>


                </li>
                <li class="nav-item">

                    <a href="?action=userSkills" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>

                        <p>
                            უნარები
                        </p>
                    </a>


                </li>
                <li class="nav-item">

                    <a href="#" class="nav-link">
                        <i class="fas fa-user mx-1"></i>

                        <p class="mx-1">
                            მომხმარებელი
                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>



                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?action=usersPage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>მომხმარებლები</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?action=permision" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>უფლებები</p>
                            </a>
                        </li>

                    </ul>


                </li>
                <li class="nav-item">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>

                        <p class="mx-1">
                            სიახლეები
                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>



                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?action=news" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>სიახლეები</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?action=category" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>კატეგორიები</p>
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>