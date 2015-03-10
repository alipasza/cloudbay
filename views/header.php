<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>CloudBay</title>
        <!-- ikona na zakladce w WebBrowser -->
        <link rel="icon" href="<?php echo URL; ?>public/images/cloudbay-favicon.png" type="image/png">
        <!-- css-y -->
        <link rel='stylesheet' href="<?php echo URL; ?>public/css/familyTitilliumWeb.css" type='text/css'>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap-social.css" type="text/css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/devicons.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/minimalist.css" type="text/css">

        <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" type="text/css">

        <!-- skrypty -->
        <script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
        <script src="<?php echo URL; ?>public/js/bootstrap.min.js "></script>
        <script src="<?php echo URL; ?>public/js/jquery.expander.min.js "></script>
        <script src="<?php echo URL; ?>public/js/flowplayer.min.js"></script>
        <script src="<?php echo URL; ?>public/js/site.js"></script>

        <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" '
                . 'src="' . URL . 'views/' . $js . '"></script>';
            }
        }
        ?>
    </head>
    <body id="<?php echo $bodyName; ?>">
        <div class="lang-switcher">
								<a class="language" href="http://www.kir.pl/en/" title="Eng">Eng</a>
							</div>
        <div class="overlay hide"></div>
        <div id="top"></div>
        <div id="header">
            <div class="navbar" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo URL; ?>">
                            <img id="logo"  accesskey="" src="<?php echo URL; ?>public/images/logo-md.png" alt="CloudBay logo">
                            <img id="logo-ico" class="hide" src="<?php echo URL; ?>public/images/cloudbay-ico.png" alt="CloudBay ico">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav pull-left nav-public">
                            <li><a class="btn btn-login" href="<?php echo URL; ?>services">Services</a></li>
                            <li><a class="btn btn-login" href="<?php echo URL; ?>customers">Customers</a></li>
                            <li><a class="btn btn-login" href="<?php echo URL; ?>community">Community</a></li>
                            <li><a class="btn btn-login" href="<?php echo URL; ?>live">Live Training</a></li>
                        </ul>

                        <ul class="nav navbar-nav pull-right">
                            <?php if (Session::get('loggedIn') == true): ?>

                                <!--    <li class="mar-right-10"><a class="btn btn-primary" href="<?php echo URL; ?>dashboard">Dashboard</a></li>
                                    <li class="mar-right-10"><a class="btn btn-primary" href="<?php echo URL; ?>dashboard/logout">Logout</a></li> -->

                                <li class="mar-right-10">
                                    <a class="btn btn-primary" href="<?php echo URL; ?>dashboard#available-courses">Dashboard</a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="btn btn-primary" href="#">alipasza <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo URL; ?>dashboard/account"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
                                        <li><a href="<?php echo URL; ?>dashboard/support"><span class="glyphicon glyphicon-comment"></span> Support</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo URL; ?>dashboard/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                    </ul>
                                </li>

                            <?php else: ?>                            
                                <li class="mar-right-10"><a class="btn btn-login" href="<?php echo URL; ?>login">Login</a></li>
                                <?php endif; ?>
                        </ul>

                    </div><!-- /navbar-collapse -->
                </div>
            </div>
        </div>
