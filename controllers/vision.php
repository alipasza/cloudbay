<?php

class Vision Extends Controller {

    function __construct() {

        parent:: __construct();
    }

    public function index($par1 = '') {

        $this->view->render('vision/index', 'page-discover');
    }

    public function strategy() {

        $this->view->render('vision/strategy', 'page-discover-action-learn');
        return;
    }

    public function benefits() {

        $this->view->render('vision/benefits', 'page-discover-action-benefit');
    }

}
