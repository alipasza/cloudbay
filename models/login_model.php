<?php

class Login_Model extends Model {

    function __construct() {
        parent:: __construct();
        //echo '<br>Login_Model(models\login_model.php):konstruktor';
    }

    public function isLoginRegistered($login, $password, &$role, &$joindatetime, &$timezone) {

        $sth = $this->db->prepare("SELECT id, role, DATE_FORMAT(joindatetime,'%d %b %Y %T') AS joindatetime, timezone FROM users WHERE login = :login AND password = MD5(:password)");
        $sth->execute(array(
            ':login' => $login,
            ':password' => $password
        ));

        $data = $sth->fetch();
        $role = $data['role'];
        $joindatetime = $data['joindatetime'];
        $timezone = $data['timezone'];
        $count = $sth->rowCount();

        if ($count > 0) {
            return true;
        } else {
            return false;
        }
        return false;
    }
    
    public function RegisterLogin($alias, $login, $password, &$role = 'default') {

        $sth = $this->db->prepare("INSERT INTO users (alias, login , password , role) VALUES (:alias, :login, :password, :role)");
        if ( $sth->execute(array(
            ':alias' => $alias,
            ':login' => $login,
            ':password' => MD5($password),
            ':role' => $role
        ))
                ) {
            return true;
        }
        return false;
    }
    
    public function isEmailAlreadyRegistered($login) {
        $sth = $this->db->prepare("SELECT id FROM users WHERE login = :login");
        $sth->execute(array(
            ':login' => $login
        ));

        $count = $sth->rowCount();

        if ($count > 0) {
            return true;
        }
        return false;
    }

}

?>