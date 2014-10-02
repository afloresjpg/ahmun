        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tareas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Agregar nueva
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo $url; ?>tarea/add" method="POST">                                            
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <select name="cliente" class="form-control" id="cliente">
                                                <option>Seleccione un cliente</option>
                                                <?php foreach ($clientes as $key => $value) : ?>
                                                    <option value="<?php echo $value['CLIENTE_ID']; ?>"><?php echo $value['NOMBRE']; ?></option>
                                                <?php endforeach; ?>                                                    
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
                                                <?php foreach ($piezas as $key => $value) : ?>
                                                    <option value="<?php echo $value['NOMBRE']; ?>"><?php echo $value['NOMBRE']; ?></option>
                                                <?php endforeach; ?>                                 
                                            </select>                   
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>             
                                        <div class="form-group">
                                            <label>Observaciones</label>
                                            <textarea name="observaciones" class="form-control"></textarea>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>                           
                                        <div class="form-group">
                                            <label>Mes</label>
                                            <select name="mes" class="form-control">
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
                                            <input name="cantidad" class="form-control">
                                        </div>           
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->                        
                        <?php if(isset($result)) : ?>
                            <div class="panel-footer">
                            <?php if($result['type'] == 'error') : ?>                                
                                <div class="alert alert-danger">
                                    <?php if($result['type'] == 'error') : ?>
                                        <strong>Error:</strong> <?php echo $result['message']; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if($result['type'] == 'success') : ?>                                
                                <div class="alert alert-success">
                                    <?php if($result['type'] == 'success') : ?>
                                        <?php echo $result['message']; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>    
                            </div>      
                        <?php endif; ?>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">    
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script type="text/javascript">

        $(function() {
            $('#cliente_i').hide();
     
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

        $('#cliente').change(function() {
            var str = $('option').filter(':selected').val();            
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

    </script>