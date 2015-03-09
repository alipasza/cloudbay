<!-- views/login/index.php -->
<div id="login-intro">
    <div class="container container-fluid inner">
        <div class="row">
            <div id="alert-danger" class="col-md-4 col-md-offset-2">
                <div id="alert-danger" class="alert alert-danger" <?php if (strlen($msg)==0): ?>style="display:none"<?php endif; ?>><?php echo $msg;?></div>
            </div>
        </div>  
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <form id="form-login" method="post" class="form-login" action="<?php echo URL; ?>login/index" onload="FocusOnLogin()">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-center">
                                Login with your CloudBay account.
                            </p>
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" id="email" name="email" placeholder="Email" value="<?php echo $this->email;?>" <?php if (strlen($this->email)==0):?>autofocus="autofocus"<?php endif;?>/>
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" type="password" id="password" name="password" placeholder="Password" value="<?php echo $this->password;?>" <?php if (strlen($this->email)!=0):?>autofocus="autofocus"<?php endif;?>/>
                            </div>
                            <!--<div class="form-group">
                                <label class="form-group">Role</label>
                                <select name="role"> 
                                    <option value="default" class="form-control input-lg">Default</option>
                                    <option value="admin" class="form-control input-lg">Admin</option>
                                </select>
                            </div>-->
                            <input type="submit" value="Log In" class="btn btn-lg btn-primary btn-block" />
                            <br/>
                            <p class="text-center">
                                <a href="<?php echo URL; ?>login/register">Register</a>
                                &nbsp; &nbsp;
                                <a href="<?php echo URL; ?>login/password">Forgot Password</a>
                            </p>    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
