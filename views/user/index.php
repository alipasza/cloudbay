<div id="login-intro">
    <div class="container container-fluid inner">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <form method="post" class="form-login" action="<?php echo URL; ?>user/create">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-center">
                                Login with your ABC account.
                            </p>
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" name="login" placeholder="Login" />
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" name="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label class="form-group">Role</label>
                                <select name="role"> 
                                    <option value="default" class="form-control input-lg">Default</option>
                                    <option value="admin" class="form-control input-lg">Admin</option>
                                </select>
                            </div>
                            <input type="submit" value="Log In" class="btn btn-lg btn-primary btn-block" />
                            <br/>
                            <p class="text-center">
                                <a href="/user/register">Register</a>
                                &nbsp; &nbsp;
                                <a href="/user/password">Forgot Password</a>
                            </p>    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="title-bar" class="hide">
    <div class="container container-fluid">
        <div class="col-md-12">


        </div>
    </div>
</div>

<div class="container container-fluid hide">
    <div class="col-md-12">

    </div>
</div>

<hr/>
<table>
    <?php
    foreach ($this->userList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['id'] . '</td>';
        echo '<td>' . $value['login'] . '</td>';
        echo '<td>' . $value['role'] . '</td>';
        echo '<td>'
        . '<a href="' . URL . 'user/edit/' . $value['id'] . '">Edit</a>&nbsp;'
        . '<a href="' . URL . 'user/delete/' . $value['id'] . '">Delete</a></td>';
        echo '</tr>';
    }
    ?>
</table>
