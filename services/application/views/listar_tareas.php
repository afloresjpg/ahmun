        <div id="page-wrapper">

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
                                            <th>Acciones</th>                 
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
                                                <td>
                                                    <a href="#" data-id="<?php echo $value['TAREA_ID']; ?>" class="edit">Editar</a> |
                                                    <a href="#" data-id="<?php echo $value['TAREA_ID']; ?>" class="eliminar">Eliminar</a>
                                                </td>                                              
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

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Editar Tarea</h4>
                </div>
                <div class="modal-body">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" action="<?php echo $url; ?>tarea/edit" method="POST">                                            
                                                <div class="form-group">
                                                    <label>Cliente</label>
                                                    <select name="cliente" class="form-control" id="cliente" selected="">
                                                        <option>Seleccione un cliente</option>                                                        
                                                    </select>
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>           
                                                <div class="form-group" id="cliente_i">
                                                    <label>Cliente Interno</label>
                                                    <select name="cliente_interno" class="form-control" id="cliente_interno">
                                                                                                   
                                                    </select>
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>                  
                                                <div class="form-group">
                                                    <label>Trabajo</label>
                                                    <input name="trabajo" id="task" class="form-control">
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>                           
                                                <div class="form-group">
                                                    <label>Pieza</label>
                                                    <select name="pieza" class="form-control" id="pieza">
                                                                                     
                                                    </select>                   
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>             
                                                <div class="form-group">
                                                    <label>Observaciones</label>
                                                    <textarea name="observaciones" class="form-control" id="observaciones"></textarea>
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>                           
                                                <div class="form-group">
                                                    <label>Mes</label>
                                                    <select name="mes" class="form-control" id="mes">
                                                        <option value="Enero">Enero</option>
                                                        <option value="Febrero">Febrero</option>
                                                        <option value="Marzo">Marzo</option>
                                                        <option value="Abril">Abril</option>
                                                        <option value="Mayo">Mayo</option>
                                                        <option value="Junio">Junio</option>
                                                        <option value="Julio">Julio</option>
                                                        <option value="Agosto">Agosto</option>
                                                        <option value="Septiembre">Septiembre</option>
                                                        <option value="Octubre">Octubre</option>
                                                        <option value="Noviembre">Noviembre</option>
                                                        <option value="Diciembre">Diciembre</option>
                                                    </select>
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>                
                                                <div class="form-group">
                                                    <label>Cantidad</label>
                                                    <input name="cantidad" class="form-control" id="cantidad">
                                                </div>                                                           
                                                <button type="reset" class="btn btn-default">Reset</button>
                                            </form>
                                        </div>                                
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <div class="panel-footer">
                                    <div class="alert" id="alert">
                                        
                                    </div>
                                </div>                                  
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->                
                </div>                                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <div class="modal" id="myModalDelete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Eliminar Tarea</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        ¿Esta seguro/a que desea eliminar esta tarea?
                    </div>
                    <div class="panel-footer">
                        <div class="alert" id="alert-delete">
                            
                        </div>
                    </div>  
                </div>                      

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="delete">Si</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">    
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

    <script type="text/javascript">

    $(function() {
        $('#dataTables-example').dataTable();

        var id;        

        $('.edit').click(function(e) {
            e.preventDefault();
            id = $(this).data('id');
            $('#myModal').modal('show');            
        });

        $('.eliminar').click(function(e) {
            e.preventDefault();
            id = $(this).data('id');
            $('#myModalDelete').modal('show');            
        });

        $('#delete').click(function() {
            $.ajax({
                url: "<?php echo $url.'tarea/delete' ?>",
                type: 'POST',
                dataType: 'json',
                data: {id: id},
            }).done(function(data) {
                if(data['result']['type'] == 'success') {                    
                    $('.panel-footer').show();
                    $('#alert-delete').addClass('alert alert-success').text(data['result']['message']);
                }
            }); 
        });

        $('#myModal').on('show.bs.modal', function (e) {                

            $('.panel-footer').hide();
            $('.panel-footer').children('#alert').removeClass();
            
           $.ajax({
               url: "<?php echo $url.'tarea/getTareaById' ?>",
               type: 'POST',
               dataType: 'json',
               data: {id: id}
           }).done(function(data) {                            
                $('#task').val(data['TRABAJO']);                               
                $('#observaciones').val(data['OBSERVACIONES']);     
                $('#cantidad').val(data['CANTIDAD']);                     
           });                             

           $.ajax({
                url: "<?php echo $url.'clientes/getClientes' ?>",
                type: 'POST',
                dataType: 'json'                
            }).done(function(data) {                
                $('#cliente').empty();
                var select = $('<option></option>').text('Seleccione un cliente');                    
                $('#cliente').append(select);
                $.each(data, function(index, val) {                    
                    var opt = $('<option></option>').attr('id', val['NOMBRE']).val(val['CLIENTE_ID']).text(val['NOMBRE']);                    
                    $('#cliente').append(opt);
                });

                $('#cliente').change(function() {
                    var str = $(this).find('option').filter(':selected').val();              
                    $.ajax({
                        url: "<?php echo $url.'tarea/getClienteInterno' ?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {cliente: str}
                    })            
                    .done(function(data) {                                
                        $('#cliente_i').show();
                        $('#cliente_interno').empty();
                        $.each(data['cliente'], function(index, val) {                    
                            var opt = $('<option></option>').val(val['NOMBRE']).text(val['NOMBRE']);                    
                            $('#cliente_interno').append(opt);
                        });
                    });
                });
            });        

            $.ajax({
                url: "<?php echo $url.'piezas/getPiezas' ?>",
                type: 'POST',
                dataType: 'json'                
            }).done(function(data) {                
                $('#pieza').empty();
                $.each(data, function(index, val) {                    
                    var opt = $('<option></option>').attr('id', val['NOMBRE']).val(val['NOMBRE']).text(val['NOMBRE']);                    
                    $('#pieza').append(opt);
                });
            });        

            $.ajax({
                url: "<?php echo $url.'tarea/getTrabajos' ?>",
                type: 'POST',
                dataType: 'json'                
            }).done(function(data) {                
                var x = new Array();                
                $.each(data, function(index, val) {                    
                    x.push(val['NOMBRE']);
                });                
                $("#task").autocomplete({
                    source: x
                });                
            });                    
        });        

        $('#save').click(function() {            
            
            cliente = $('#cliente').val();
            cliente_interno = $('#cliente_interno').val();
            trabajo = $('#task').val();
            pieza = $('#pieza').val();
            observacion = $('#observaciones').val();
            mes = $('#mes').val();
            cantidad = $('#cantidad').val();                  
            
            if(cliente == null || cliente_interno == null || trabajo == null || pieza == null || observacion == null || mes == null || cantidad == null) {
                $('.panel-footer').show();
                $('#alert').addClass('alert alert-danger').text('Alguno de los campos es incorrtecto.');
            } else {
                $.ajax({
                    url: "<?php echo $url.'tarea/edit' ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: id,
                        cliente: cliente,
                        cliente_interno: cliente_interno,
                        trabajo: trabajo,
                        pieza: pieza,
                        observacion: observacion,
                        mes: mes,
                        cantidad: cantidad
                    }
                }).done(function(data) {
                    
                    if(data['result']['type'] == 'success') {
                        $('.panel-footer').show();
                        $('#alert').addClass('alert alert-success').text(data['result']['message']);
                    }
                });                
            }

        });

    });
    </script>