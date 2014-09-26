        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Usuarios</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre(s)</th>
                                            <th>Apellido(s)</th>
                                            <th>Nombre de Usuario</th>
                                            <th>E-mail</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($usuarios as $key => $value) : ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $value['NOMBRE']; ?></td>
                                                <td><?php echo $value['APELLIDO']; ?></td>
                                                <td><?php echo $value['NOMBRE_USUARIO']; ?></td>
                                                <td><?php echo $value['EMAIL']; ?></td>
                                                <td><?php echo $value['PASSWORD']; ?></td>
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