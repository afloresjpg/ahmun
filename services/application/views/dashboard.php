        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_clientes; ?></div>
                                    <div>Clientes</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php if($user_session['admin'] == 1){ echo $url.'clientes'; } else { echo $url.'clientes/listar'; } ?>">
                            <div class="panel-footer">
                                <?php if($user_session['admin'] == 1) : ?>
                                <span class="pull-left">Agregar nuevo</span>
                                <?php else : ?>
                                <span class="pull-left">Ver todos</span>
                                <?php endif; ?>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_clientes_internos; ?></div>
                                    <div>Clientes internos</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php if($user_session['admin'] == 1){ echo $url.'cliente_interno'; } else { echo $url.'cliente_interno/listar'; } ?>">
                            <div class="panel-footer">
                                <?php if($user_session['admin'] == 1) : ?>
                                <span class="pull-left">Agregar nuevo</span>
                                <?php else : ?>
                                <span class="pull-left">Ver todos</span>
                                <?php endif; ?>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_piezas; ?></div>
                                    <div>Piezas</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php if($user_session['admin'] == 1){ echo $url.'piezas'; } else { echo $url.'piezas/listar'; } ?>">
                            <div class="panel-footer">
                                <?php if($user_session['admin'] == 1) : ?>
                                <span class="pull-left">Agregar nuevo</span>
                                <?php else : ?>
                                <span class="pull-left">Ver todos</span>
                                <?php endif; ?>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_usuarios; ?></div>
                                    <div>Usuarios</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php if($user_session['admin'] == 1){ echo $url.'usuarios'; } else { echo $url.'usuarios/listar'; } ?>">
                            <div class="panel-footer">
                                <?php if($user_session['admin'] == 1) : ?>
                                <span class="pull-left">Agregar nuevo</span>
                                <?php else : ?>
                                <span class="pull-left">Ver todos</span>
                                <?php endif; ?>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
