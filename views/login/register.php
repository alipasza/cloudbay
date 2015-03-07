<!-- views/login/register.php -->
<div id="login-intro">
    <div class="container container-fluid inner">
        <div class="row">
            <div id="alert-danger" class="col-md-4 col-md-offset-2">
                <div id="alert-danger" class="alert alert-danger" <?php if (strlen($msg)==0): ?>style="display:none"<?php endif; ?>><?php echo $msg;?></div>
            </div>
        </div>        
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <form id="form-register" method="post" class="form-signin" action="<?php echo URL; ?>login/register">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Register</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-center">
                                Login with your CloudBay account.
                            </p>
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" id="alias" name="alias" autofocus="autofocus" placeholder="Alias" value="<?php echo $this->alias;?>"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" id="email" name="email" placeholder="Email" value="<?php echo $this->email;?>"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" id="password" name="password" placeholder="Password" value="<?php echo $this->password;?>"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" name="confirm_password" placeholder="Confirm Password" value="<?php echo $this->confirm_password;?>"/>
                            </div>                            
                            <!--<div class="form-group">
                                <label class="form-group">Role</label>
                                <select name="role"> 
                                    <option value="default" class="form-control input-lg">Default</option>
                                    <option value="admin" class="form-control input-lg">Admin</option>
                                </select>
                            </div>-->
                            <input type="submit" value="Log In" class="btn btn-lg btn-primary btn-block" />
                            <hr/>
                            <p>
                                Registering agree to the <a target="_blank" href="<?php echo URL; ?>index/terms">Terms</a>.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
