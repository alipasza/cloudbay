<?php

class Index extends Controller {

    function __construct() {

        parent:: __construct();
    }

    public function index() {
        require 'libs/cache/top-cache.php'; 
        $this->view->render('index/index', 'page-index');
        require 'libs/cache/bottom-cache.php'; 
    }

    public function aboutus() {

        $this->view->render('index/terms', 'page-index-action-terms');
    }
    public function details() {

        $this->view->render('index/index','page-details');
    }

}
?>