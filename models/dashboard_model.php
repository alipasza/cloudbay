<?php

class Dashboard_model extends Model {

    function __construct() {
        parent::__construct();
    }

    function writeTimeZoneToUser() {

        $email = Session::get('email');
        $tz = $_POST['timezone'];

        $sth = $this->db->prepare("UPDATE users SET timezone=:tz WHERE login = :email");
        if ($sth->execute(array(
                    ':tz' => $tz,
                    ':email' => $email
                ))
        ) {
            return true;
        } else {
            return false;
        }
    }

    function xhrInsert() {

        $text = $_POST['text'];
        //echo '<br>Metoda Dashboard_model.xhrInsert() wstawia do tabeli DATA pole text='.$text;

        $sth = $this->db->prepare('INSERT INTO mvc.data (text) VALUES (:text)');
        $sth->execute(array(':text' => $text));

        $data = array('text' => $text, 'id' => $this->db->lastInsertId());
        echo json_encode($data);
        //echo $text;
    }

    function xhrGetListings() {

        //echo '<br>Metoda Dashboard_model.xhrGetListings() listuje tabele DATA';
        $sth = $this->db->prepare('SELECT id,text FROM data');
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        //echo 'Pobrano='. sizeof($data);
        return json_encode($data);
    }

    function xhrDeleteListing() {

        $id = $_POST['id'];
        $sth = $this->db->prepare('DELETE FROM data WHERE id="' . $id . '"');
        $sth->execute();
    }

}
