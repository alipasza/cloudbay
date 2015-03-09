<?php

class Live Extends Controller {

    function __construct() {

        parent:: __construct();
    }

    public function index($par1 = '') {

        $this->view->render('live/index', 'page-live');
    }

}