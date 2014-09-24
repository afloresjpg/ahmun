   
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">                        
                        <form role="form" action="<?php $url; ?>login" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" id="login" value="Login ">
                            </fieldset>
                        </form>
                    </div>
                    <?php if(isset($result)) : ?>
                    <div class="panel-footer">
                        <div class="alert alert-danger">
                            <?php if($result['type'] == 'error') : ?>
                                <strong>Error:</strong> <?php echo $result['message']; ?>
                            <?php endif; ?>
                        </div>
                    </div>  
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>        