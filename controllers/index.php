<?php

class Index extends Controller {

    function __construct() {

        parent:: __construct();
    }

    public function index() {

        $this->view->render('index/index', 'page-index');
    }

    public function terms() {

        $this->view->render('index/terms', 'page-index-action-terms');
    }
    public function details() {

        $this->view->render('index/index','page-details');
    }

}

?>