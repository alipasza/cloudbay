<?php

class Dashboard extends Controller {

    function __construct() {

        parent:: __construct();
        $this->view->timezone = $this->view->errinfo = $this->view->info = '';
        $this->view->tabno = '';
        Session::init();
        $loggedIn = Session::get('loggedIn');
        if ($loggedIn == false) {
            //Session::destroy();
            Session::del("email");
            Session::del("role");
            Session::del("loggedIn");
            Session::del("joindatetime");
            Session::del("timezone");
            Session::del("info");

            header('location: ../login');
            exit;
        }

        $this->view->js = array('dashboard/js/default.js');
    }

    public function index() {

        $this->view->render('dashboard/index', 'page-dashboard');
    }

    public function support() {

        $this->view->render('dashboard/support', 'page-support');
    }

    public function logout() {

        //Session::destroy();
        Session::del("email");
        Session::del("role");
        Session::del("loggedIn");
        Session::del("joindatetime");
        Session::del("timezone");
        Session::del("info");

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
        }
        $this->view->render('dashboard/account', 'page-account');
        return;
    }

    function doTimezone() {

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