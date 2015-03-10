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
            <li><a href="<?php echo URL; ?>">Home</a></li>
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
            <li class="active"><a href="#my-clients" data-toggle="tab">My Clients</a></li>
            <li><a href="#calendar" data-toggle="tab">Calendar</a></li>
            <li><a href="#events" data-toggle="tab">Events</a></li>
            <li class="pull-right"><a href="#updates" data-toggle="tab">Updates</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- tab My Clients -->
            <?php require 'tabs/my-clients.php'; ?>
            <!-- tab Calendar -->
            <?php require 'tabs/calendar.php'; ?>
            <!-- Tab Updates -->
            <?php require 'tabs/updates.php'; ?>
        </div>
    </div>
</div>

<script>
    /**
     * Remember the Hash
     */
    $(function () {
        var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');

        $('.nav-tabs a').click(function (e) {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
        });

        $(".nav-tabs a[href=#my-clients]").trigger('click');

    });
</script>
