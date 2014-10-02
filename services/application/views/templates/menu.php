<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a class="<?php if($page == 'dashboard') { echo 'active'; } ?>" href="<?php echo $url; ?>dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!--<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Gráficos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        <!-- </li>-->                        
                        <?php if($user_session['admin'] == 1) : ?>
                        <li>
                            <a href="<?php echo $url; ?>usuarios/listar" class="<?php if($page == 'usuario') { echo 'active'; } ?>"><i class="fa fa-table fa-fw"></i>Usuarios</a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="<?php echo $url; ?>clientes/listar" class="<?php if($page == 'cliente') { echo 'active'; } ?>"><i class="fa fa-table fa-fw"></i>Clientes</a>
                        </li>
                        <li>
                            <a href="<?php echo $url; ?>cliente_interno/listar" class="<?php if($page == 'cliente_interno') { echo 'active'; } ?>"><i class="fa fa-table fa-fw"></i>Cliente Interno</a>
                        </li>
                        <li>
                            <a href="<?php echo $url; ?>piezas/listar" class="<?php if($page == 'pieza') { echo 'active'; } ?>"><i class="fa fa-table fa-fw"></i>Piezas</a>
                        </li>                                                
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>Agregar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <?php if($user_session['admin'] == 1) : ?>
                                    <li>
                                        <a href="<?php echo $url; ?>usuarios">Usuario</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url; ?>clientes">Cliente</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url; ?>cliente_interno">Cliente Interno</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url; ?>piezas">Pieza</a>
                                    </li>                                
                                <?php endif; ?>
                                <?php if($user_session['admin'] == 0) : ?>
                                    <li>
                                        <a href="<?php echo $url; ?>tarea">Tarea</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>   
                        <?php if($user_session['admin'] == 0) : ?>                     
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>Editar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                                
                                <li>
                                    <a href="<?php echo $url; ?>tarea/listar">Tarea</a>
                                </li>                                             
                            </ul>
                        </li>   
                        <?php endif; ?>                       
                        <!--<li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        <!--</li> -->
                        <!--<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                <!--</li>
                            </ul>
                            <!-- /.nav-second-level -->
                        <!--</li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        <!--</li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>