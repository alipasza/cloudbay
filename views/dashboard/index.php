<!-- views/dashboard/index.php -->
<div id="title-bar" class="">
    <div class="container container-fluid">
        <div class="col-md-12">
            
    <h1>Dashboard</h1>

        </div>
    </div>
</div>

<div class="container container-fluid ">
    <div class="col-md-12">

<ol class="breadcrumb">
    <li><a href="<?php echo URL;?>">Home</a></li>
    <li class="active">Dashboard</li>
</ol>

    </div>
</div>

<div class="container container-fluid ">
    <div class="col-md-12">
            </div>
</div>


<div class="container container-fluid">
    <div class="row">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs dashboard-tabs">
            <li class="active"><a href="#my-courses" data-toggle="tab">My Courses</a></li>
            <li><a href="#available-courses" data-toggle="tab">Available Courses</a></li>
            <li class="pull-right"><a href="#updates" data-toggle="tab">Updates</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active in fade" id="my-courses">
                                                <div class="img-thumbnail img-responsive dashboard-image-list">
                    <img src="/img/no-courses.jpg" alt="No Courses">
                </div>
                            </div>
            <div class="tab-pane fade" id="available-courses">
                                                        <div class="relative img-thumbnail img-responsive dashboard-image-list " data-toggle="popover" data-placement="top" data-content="Click to Purchase PHP Punch in the Face">
                        <a href="/product/view/php-punch-in-the-face">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/php-punch-in-the-face-sm.jpg" alt="PHP Punch in the Face" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/php-punch-in-the-face"><i class="fa fa-arrow-circle-right"></i> PHP Punch in the Face</a></strong>
                            <br />
                                                            <sup>$</sup>24.95                                                    </div>
                    </div>
                                        <div class="relative img-thumbnail img-responsive dashboard-image-list " data-toggle="popover" data-placement="top" data-content="Click to Purchase PHP CodeIgniter">
                        <a href="/product/view/php-codeigniter">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/php-codeigniter-sm.jpg" alt="PHP CodeIgniter" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/php-codeigniter"><i class="fa fa-arrow-circle-right"></i> PHP CodeIgniter</a></strong>
                            <br />
                                                            <sup>$</sup>24.95                                                    </div>
                    </div>
                                        <div class="relative img-thumbnail img-responsive dashboard-image-list " data-toggle="popover" data-placement="top" data-content="Click to Purchase Python for Rookies">
                        <a href="/product/view/python-for-rookies">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/python-for-rookies-sm.jpg" alt="Python for Rookies" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/python-for-rookies"><i class="fa fa-arrow-circle-right"></i> Python for Rookies</a></strong>
                            <br />
                                                            <sup>$</sup>19.95                                                    </div>
                    </div>
                                        <div class="relative img-thumbnail img-responsive dashboard-image-list " data-toggle="popover" data-placement="top" data-content="Click to Purchase Dream in JavaScript">
                        <a href="/product/view/dream-in-javascript">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/dream-in-javascript-sm.jpg" alt="Dream in JavaScript" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/dream-in-javascript"><i class="fa fa-arrow-circle-right"></i> Dream in JavaScript</a></strong>
                            <br />
                                                            <sup>$</sup>7.95                                                    </div>
                    </div>
                                        <div class="relative img-thumbnail img-responsive dashboard-image-list " data-toggle="popover" data-placement="top" data-content="Click to Purchase Phalcon PHP">
                        <a href="/product/view/phalcon-php">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/phalcon-php-sm.jpg" alt="Phalcon PHP" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/phalcon-php"><i class="fa fa-arrow-circle-right"></i> Phalcon PHP</a></strong>
                            <br />
                                                            <sup>$</sup>24.95                                                    </div>
                    </div>
                                        <div class="relative img-thumbnail img-responsive dashboard-image-list grayscale" data-toggle="popover" data-placement="top" data-content="Click to Purchase Professional PHP Development">
                        <a href="/product/view/professional-php-development">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/professional-php-development-sm.jpg" alt="Professional PHP Development" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/professional-php-development"><i class="fa fa-arrow-circle-right"></i> Professional PHP Development</a></strong>
                            <br />
                                                            Planned
                                                    </div>
                    </div>
                                        <div class="relative img-thumbnail img-responsive dashboard-image-list " >
                        <a href="/product/view/git-basics">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/git-basics-sm.jpg" alt="Git Basics" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/git-basics"><i class="fa fa-arrow-circle-right"></i> Git Basics</a></strong>
                            <br />
                                                            Free
                                                    </div>
                    </div>
                                        <div class="relative img-thumbnail img-responsive dashboard-image-list " data-toggle="popover" data-placement="top" data-content="Click to Purchase Fresh Start HTML & CSS">
                        <a href="/product/view/fresh-start-html-css">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/fresh-start-html-css-sm.jpg" alt="Fresh Start HTML & CSS" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/fresh-start-html-css"><i class="fa fa-arrow-circle-right"></i> Fresh Start HTML & CSS</a></strong>
                            <br />
                                                            <sup>$</sup>9.95                                                    </div>
                    </div>
                                        <div class="relative img-thumbnail img-responsive dashboard-image-list " data-toggle="popover" data-placement="top" data-content="Click to Purchase Redis">
                        <a href="/product/view/redis">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/redis-sm.jpg" alt="Redis" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/redis"><i class="fa fa-arrow-circle-right"></i> Redis</a></strong>
                            <br />
                                                            <sup>$</sup>12.95                                                    </div>
                    </div>
                                        <div class="relative img-thumbnail img-responsive dashboard-image-list " >
                        <a href="/product/view/virtualbox">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/virtualbox-sm.jpg" alt="How to use VirtualBox" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/virtualbox"><i class="fa fa-arrow-circle-right"></i> How to use VirtualBox</a></strong>
                            <br />
                                                            Free
                                                    </div>
                    </div>
                                        <div class="relative img-thumbnail img-responsive dashboard-image-list grayscale" >
                        <a href="/product/view/learn-django">
                            <img class="fadeover" src="https://d2qmoq5vnrtrov.cloudfront.net/img/product/learn-django-sm.jpg" alt="Learn Django" />
                        </a>
                        <div class="dashboard-product-title text-center">
                            <strong><a href="/product/view/learn-django"><i class="fa fa-arrow-circle-right"></i> Learn Django</a></strong>
                            <br />
                                                            Planned
                                                    </div>
                    </div>
                                                </div>
            <div class="tab-pane fade" id="updates">
                <ul>
<li><em>This is a general overview of what's going on, it's not a comprehensive or all inclusive list of every single update.</em></li>
</ul>
<h2>02-09-15</h2>
<ul>
<li>Login: Implementing Google+, currently in debug mode.</li>
<li>Email: Implementing a simple system internally to send updates.</li>
<li>Course: Still working on Django course, it's a lot of work :)</li>
</ul>
<h2>01-19-15</h2>
<ul>
<li>Flat Logo used, Collapsed icon only.</li>
<li>GUI Changes.</li>
<li>Course: Working on Django Course and Preparing a Live Course.</li>
</ul>
<h2>01-07-15</h2>
<ul>
<li>Happy new years, working on a new Django Course.</li>
<li>Downtime: 35 minutes downtime at 2:30AM EST due to the new Facebook API not ready for JREAM.</li>
</ul>
<h2>12-05-15</h2>
<ul>
<li>Downtime: 10 minute downtime, had to migrate servers to another region.</li>
</ul>
<h2>11-25-14</h2>
<ul>
<li>Re-issued SSL Certificate</li>
<li>Removed any POODLE threat</li>
<li>Forward Secrecy Supported</li>
<li>Qualys SSL Labs Report:
<ul>
<li>Overall Rating: <strong>A</strong></li>
<li>Certificate: 100</li>
<li>Protocol Support: 95</li>
<li>Key Exchange: 80</li>
<li>Cipher Strength: 90</li>
</ul></li>
</ul>
<h2>11-09-14</h2>
<ul>
<li>Feature: Flash Fallback Enabled if MP4 is not available</li>
<li>Third-Party Bug: Fullscreen Issues with player and MP4 @ <a href="https://flowplayer.org/docs/known-issues.html">https://flowplayer.org/docs/known-issues.html</a></li>
<li>Mobile: Still working with WebM Format, there is not an RTP for V-8 codecs on AWS. Looking into HTTPS Streaming.</li>
</ul>
<h2>11-02-14</h2>
<ul>
<li>Mobile: Working towards Mobile Streaming in WebM format, content took 2 days to convert. Still have difficulty with RTMP and WebM Signed URLs.</li>
</ul>
<h2>10-29-14</h2>
<ul>
<li>Feature: Working on a Quiz section.</li>
<li>Lacking: Not much time to work on everything from Copywriting, UI, Server, System, Courses.</li>
</ul>
<h2>10-5-14</h2>
<ul>
<li>Copywriting: Discover Area Simplified with bullet lists.</li>
<li>UI: Adjusted Responsive UI for front-end.</li>
<li>UI: Home, Disover, Login, and Register are now more modern.</li>
<li>System: Trying out Varnish for Caching.</li>
<li>Bugs: Fixed a broken link (Thanks for letting me know)</li>
</ul>
<h2>10-2-14</h2>
<ul>
<li>UI: The UI is going through changes slowly. It is being tested before deployment, if however you encounter a bug please email <code>hello[at]jream.com</code></li>
</ul>
<h2>9-26-14</h2>
<ul>
<li>Courses: Published Redis Course</li>
<li>Bug: Fixed Sandbox mode in PayPal on Live Environment (missed a variable)</li>
<li>OS: Updated OS Distribution</li>
<li>Security: Updated Bash Vulnerability &quot;Shellshock&quot;</li>
<li>App: Making the App Multi-Module for expansion</li>
<li>App: Looking for a better front-end solution</li>
</ul>
<h2>8-26-14</h2>
<ul>
<li>Courses: Primarily Developing on the Redis Course.</li>
<li>Internal: Refactoring parts of the JREAM Core to reduce duplicated code.</li>
<li>Internal: Cleaning the Database of unused sections.</li>
<li>Cancelled: Affiliation will not be available due to Tax Reasons and JREAM will never store personal information.</li>
</ul>
<h2>7-29-14</h2>
<ul>
<li>UI: Application now utilizes Gulp and Bower.</li>
<li>UI: Site design in the works.</li>
<li>Copywriting: Building a Discover Area.</li>
</ul>
<h2>6-29-14</h2>
<ul>
<li>Course: HTML &amp; CSS Added</li>
<li>UI: Site went through overhaul of UI Elements and color changes.</li>
</ul>
<h2>5-13-14</h2>
<ul>
<li>Internal: All Login/Register/Password have been moved to a user controller</li>
<li>Internal: Sessions had to be reset to apply changes, you may have been logged out once.</li>
</ul>
<h2>5-7-14</h2>
<ul>
<li>UI: Font size Increased</li>
<li>UI: Working on white space improvements</li>
</ul>
<h2>4-28-14</h2>
<ul>
<li>Facebook Login: Your alias/username will automatically update if it's different when you login.</li>
</ul>
<h2>4-27-14</h2>
<ul>
<li>UI: There have been many minor responsive improvements.</li>
<li>Security: Changing your password now requires you to confirm your previous password
incase you left your computer on and someone accessed it.</li>
<li>
<p>Failsafe: A backup server was setup if and when JREAM gives a non-200 HTTP Response.</p>
</li>
<li>Development (Forum): A forum is being built to replace the Questions Area.</li>
<li>Development (Affiliate): In the works arranging an affiliate system</li>
</ul>
<h2>4-15-14</h2>
<ul>
<li>Heartbleed Fix: There was 8 hours downtime to prevent any potential heartbleed problems when it became news.
<ul>
<li>OpenSSL Updated.</li>
<li>System Upgraded.</li>
<li>Server credentials changed.</li>
<li>SSL Certficates were re-issued.</li>
<li>No personal information is stored at JREAM, it's on 3rd-party enterprise servers such as Stripe. There is nothing to to leak, but security matters.</li>
</ul></li>
</ul>            </div>
        </div>
    </div>
</div>

<script>
/**
 * Remember the Hash
 */
$(function(){
    var hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');

    $('.nav-tabs a').click(function (e) {
        $(this).tab('show');
        var scrollmem = $('body').scrollTop();
        window.location.hash = this.hash;
        $('html,body').scrollTop(scrollmem);
    });

        $(".nav-tabs a[href=#available-courses]").trigger('click');
    
});
</script>
