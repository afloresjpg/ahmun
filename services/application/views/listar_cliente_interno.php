        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cliente Interno</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de clientes internos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Cliente Interno ID</th>
                                            <th>Nombre</th>                                            
                                            <th>Cliente</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($clientes_internos as $key => $value) : ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $value['CLIENTE_INTERNO_ID']; ?></td>
                                                <td><?php echo $value['NOMBRE']; ?></td>                                                
                                                <td><?php echo $value['CLIENTE_ASOCIADO']; ?></td>                                                
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