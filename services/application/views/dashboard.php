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

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Tareas</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de Tareas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>                                            
                                            <th>Cliente</th>                                            
                                            <th>Cliente Interno</th>                                            
                                            <th>Trabajo</th>                                            
                                            <th>Pieza</th>                                            
                                            <th>Cantidad</th>                                            
                                            <th>Observaciones</th>                                            
                                            <th>Mes</th>                                            
                                            <th>Año</th>                                            
                                            <th>Usuario</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tareas as $key => $value) : ?>
                                            <tr class="odd gradeX">                                                
                                                <td><?php echo $value['CLIENTE']; ?></td>                                                
                                                <td><?php echo $value['CLIENTE_INTERNO']; ?></td>                                                
                                                <td><?php echo $value['TRABAJO']; ?></td>                                                
                                                <td><?php echo $value['PIEZA']; ?></td>                                                
                                                <td><?php echo $value['CANTIDAD']; ?></td>                                                
                                                <td><?php echo $value['OBSERVACIONES']; ?></td>                                                
                                                <td><?php echo $value['MES']; ?></td>                                                
                                                <td><?php echo $value['ANIO']; ?></td>                                                
                                                <td><?php echo $value['USER']; ?></td>                                                
                                            </tr>
                                        <?php endforeach; ?>                                                                
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>                    
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
    $(function() {
        $('#dataTables-example').dataTable();
    });
    </script>