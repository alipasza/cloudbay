<?php

class Dashboard extends Controller {

    function __construct() {

        parent:: __construct();
        $this->view->timezone = $this->view->errinfo = $this->view->info = '';
        Session::init();
        $loggedIn = Session::get('loggedIn');
        if ($loggedIn == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }

        $this->view->js = array('dashboard/js/default.js');
    }

    public function index() {

        $this->view->render('dashboard/index');
    }

    public function logout() {

        Session::destroy();
        header('location: ../login');
        exit;
    }

    public function account($arg1 = '') {

        $this->view->timezone = Session::get('timezone');
        $this->view->errinfo = $this->view->info = '';
        
        $this->view->info = Session::get("info");
        unset($_SESSION['info']);
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if ($arg1 == 'doTimezone') {
                $this->doTimezone();
                return;
            }
            /*
                $res = $this->model->writeTimeZoneToUser();
                if ($res == true) {
                    Session::set('timezone', $_POST['timezone']);
                    $this->view->render('dashboard/account', 'page-account', 'Timezone updated');
                    //header('location: ' . URL . 'dashboard'); // header powoduje GETa a w FORM jest POST wiec aby to byl GET trzeba ustawic 'location'
                    return;
                } else {
                    $this->view->render('dashboard/account', 'page-account', 'Timezone NOT updated: ' . Session::get('email') . ', ' . $_POST['timezone']);
                    return;
                }
            }
            $this->view->render('dashboard/account', 'page-account', '');
            return;*/
        }
        $this->view->render('dashboard/account', 'page-account');
        return;
    }

    function doTimezone() {

        //$_POST['ala']=$_POST['timezone'];
        $res = $this->model->writeTimeZoneToUser();
        
        if ($res == true) {
            Session::set('timezone', $_POST['timezone']);
            Session::set('info', 'Timezone updated');
        } else {
            $this->view->errinfo = 'Timezone NOT updated';
        }
        //$this->view->render('dashboard/account', 'page-account');
        header('location: ' . URL . 'dashboard/account'); // header powoduje GETa a w FORM jest POST wiec aby to byl GET trzeba ustawic 'location' 
        return;
    }

    function xhrInsert() {
        //echo '<br>bez szalu w Dashboard.xhrInsert()';
        $this->model->xhrInsert();
    }

    function xhrGetListings() {
        //echo '<br>bez szalu w Dashboard.xhrGetListings()';
        $d1 = $this->model->xhrGetListings();
        print_r($d1);
    }

    function xhrDeleteListing() {
        $this->model->xhrDeleteListing();
    }

    function user() {
        $this->view->render('user/index');
    }

}

?>