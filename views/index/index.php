<!-- view/index/index.php -->
<div id="main-intro">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-12 inner">
                <h1 class="title"><?php echo $this->ltext[Session::get("lang")]['index-title'];?></h1>
                <p class="subtitle"><?php echo $this->ltext[Session::get("lang")]['index-subtitle'];?></p>

                <div class="pad-top-20">
                    <a class="btn btn-xl btn-default" href="<?php echo URL; ?>login/register"><?php echo $this->ltext[Session::get("lang")]['index-createaccount'];?></a>
                    <h4>PHP mvc, HTML, jQuery, mySQL &amp; Microsoft Azure or Google Cloud !</h4>

                </div>
            </div>
        </div>
    </div>
</div>


<div id="title-bar" class="hide">
    <div class="container container-fluid">
        <div class="col-md-12">


        </div>
    </div>
</div>

<div class="container container-fluid hide">
    <div class="col-md-12">

    </div>
</div>

<div class="container container-fluid hide">
    <div class="col-md-12">
    </div>
</div>


<div class="discover">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo URL; ?>vision"><img src="<?php echo URL; ?>public/ico/lamp.png" class="img-responsive" alt="Vision"></a>
                <h3><a href="<?php echo URL; ?>vision">Vision</a></h3>
                <p class="text-center">
                    Your vision is our mission ! In a perfect world there would be no need for any IT system. Unfortunately, we can not change the world, but we can try to offer the perfect solution 
                </p>
            </div>
            <div class="col-md-4">
                <a href="<?php echo URL; ?>vision/strategy"><img src="<?php echo URL; ?>public/ico/thinking-gears.png" class="img-responsive" alt="Strategy"></a>
                <h3><a href="<?php echo URL; ?>vision/strategy">Stategy &amp; Techology</a></h3>
                <p class="text-center">
                    There's a difference between a business management or operations strategy and a Customer Relationship strategy. We're sure that the common goal we all have is that we want to get and keep customers. A CRM strategy and solution will enable that effectively and efficiently.
                    <a href="http://youtube.com/cloudbaydesign" target="_blank">40,000+ YouTube Subscribers</a> can't be wrong.
                </p>
            </div>
            <div class="col-md-4">
                <a href="<?php echo URL; ?>vision/benefits"><img src="<?php echo URL; ?>public/ico/application-gears.png" class="img-responsive" alt="Benefit"></a>
                <h3><a href="<?php echo URL; ?>vision/benefits">Benefits</a></h3>
                <p class="text-center">
                    If you’re not familiar with the advantages of a customer relationship management system here are a few that can motivate any business: Customer Acquisition, Customer Satisfaction, Competitive Advantage, Efficiency, Security ...
                </p>
            </div>
        </div>
    </div>
</div>

<div class="spacer-80"></div>

<div class="container container-fluid">
    <div class="row">

        <div class="col-md-3 col-md-offset-1 featured-course text-center">
            <a href="http://www.google.pl" class="fadeover">
                <img class="img-responsive img-thumbnail" src="<?php echo URL; ?>public/images/php-punch-in-the-face-sm.jpg" alt="businessX">
            </a>
        </div>
        <div class="col-md-3 featured-course text-center">
            <a href="http://www.google.pl" class="fadeover">
                <img class="img-responsive img-thumbnail" src="<?php echo URL; ?>public/images/php-codeigniter-sm.jpg" alt="businessX">
            </a>
        </div>
        <div class="col-md-3 featured-course text-center">
            <a href="http://www.google.pl" class="fadeover">
                <img class="img-responsive img-thumbnail" src="<?php echo URL; ?>public/images/phalcon-php-sm.jpg" alt="businessX">
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-md-offset-1 featured-course text-center">
            <a href="http://www.google.pl" class="fadeover">
                <img class="img-responsive img-thumbnail" src="<?php echo URL; ?>public/images/python-for-rookies-sm.jpg" alt="businessX">
            </a>
        </div>
        <div class="col-md-3 featured-course text-center">
            <a href="http://www.google.pl" class="fadeover">
                <img class="img-responsive img-thumbnail" src="<?php echo URL; ?>public/images/fresh-start-html-css-sm.jpg" alt="businessX">
            </a>
        </div>
        <div class="col-md-3 featured-course text-center">
            <a href="http://www.google.pl" class="fadeover">
                <img class="img-responsive img-thumbnail" src="<?php echo URL; ?>public/images/redis-sm.jpg" alt="businessX">
            </a>
        </div>

    </div>
</div>

<div class="spacer-40"></div>

<div class="container container-fluid call-to-action" <?php if (Session::get('loggedIn') == true): ?> style="display: none" <?php endif; ?>>
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Register &amp; Join Now</h3>
            <p>
                It takes less than 30 seconds!
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="<?php echo URL; ?>login/register" class="btn btn-primary btn-xl"><?php echo $this->ltext[Session::get("lang")]['index-createaccount'];?></a>
        </div>
    </div>
</div>

<div class="spacer-40"></div>

