<?php

class Terms extends Controller {

    function __construct() {

        parent:: __construct();
    }

    public function index() {

        $this->view->render('terms/index', 'page-index-action-terms');
    }

}

?>