<!-- views/dashboard/support.php -->
<div id="title-bar" class="">
    <div class="container container-fluid">
        <div class="col-md-12">

            <h1>Support</h1>

        </div>
    </div>
</div>

<div class="container container-fluid ">
    <div class="col-md-12">

        <ol class="breadcrumb">
            <li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
            <li class="active">Support</li>
        </ol>

    </div>
</div>

<div class="container container-fluid ">
    <div class="col-md-12">
    </div>
</div>


<div class="container container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Support Form</div>
                <div class="panel-body">
                    <p>
                        <small>
                            Support is provided on an as-is basis for problems arising from content on
                            cloudBay. This does not include any support for YouTube videos.
                        </small>
                    </p>
                    <form id="form-support" method="post" action="/dashboard/support/do">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Title" value="">
                        </div>
                        <div class="form-group">
                            <select name="type" class="form-control">
                                <option value="error">Report an Error</option>
                                <option value="support">General Support</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="content" class="form-control" placeholder="Your Message" rows="5"></textarea>
                        </div>
                        <p>
                            <small>
                                If this is related to a specific course, please include the course title and any relevant sections being affected.
                            </small>
                        </p>
                        <div class="form-group">
                            <input class="disable-click btn btn-lg btn-primary btn-block" type="submit" value="Submit">
                        </div>
                        <input type="hidden" name="X8MtFJfHDNxb5v" value="a2323748657abfdcc810fa5c453cb055" />
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 troubleshooting">
            <div class="panel panel-primary">
                <div class="panel-heading">Troubleshooting</div>
                <div class="panel-body">
                    <p>
                        <strong>I need dowload new version</strong>
                        <br />Any download that contains value will have a repository at <a href="https://bitbucket.org" target="_blank"><i class="fa fa-bitbucket"></i> cloudBay Media Bitbucket</a>.
                    </p>
                    <p>
                        <strong>Video or Download Missing</strong>
                        <br />Please fill out the form and provide the course series and video id or link.
                    </p>
                    <p>
                        <strong>Video Stopped Playback</strong>
                        <br />Refreshing the page will generate a new access token for your video.
                    </p>
                    <p>
                        <strong>Video won't Play</strong>
                        <br />Make sure you have <a href="http://get.adobe.com/flashplayer/"><i class="fa fa-bolt"></i> Flash Player</a> installed to stream the content.
                        Otherwise please provide the series and and video id or link.
                    </p>
                    <p>
                        <strong>Cannot Download Videos</strong>
                        <br />This is a streaming service only, downloads are not provided.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
