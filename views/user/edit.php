<h1>User: Edit</h1>

<form method="post" action="<?php echo URL; ?>user/editSave/">
    <label>Id</label><input disabled="true" type="text" name="id" value="<?php echo print_r($this->user['id']); ?>" /><br/>
    <label>Login</label><input type="text" name="login" value="<?php echo print_r($this->user['login']); ?>" /><br/>
    <label>Password</label><input type="text" name="password" /><br/>
    <label>Role</label>
    <select name="role"> 
        <option value="default" <?php if ($this->user['role'] == 'default') echo 'selected'; ?>>Default</option>
        <option value="admin" <?php if ($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
        <option value="owner" <?php if ($this->user['role'] == 'owner') echo 'selected'; ?>>Owner</option>
    </select><br/>
    <label>&nbsp;</label><input type="submit" />

</form>