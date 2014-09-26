        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cliente interno</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Agregar nuevo
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo $url; ?>cliente_interno/add" method="POST">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input name="nombre" class="form-control">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label>Cliente asociado</label>
                                            <select name="cliente_asociado" class="form-control">
                                                <?php foreach ($clientes as $key => $value) : ?>
                                                    <option value="<?php echo $value['NOMBRE']; ?>"><?php echo $value['NOMBRE']; ?></option>
                                                <?php endforeach; ?>
                                            </select>  
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