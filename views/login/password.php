<!-- views/login/password.php -->
<div id="title-bar" class="">
    <div class="container container-fluid">
        <div class="col-md-12">

            <h1>Forgot Password</h1>

        </div>
    </div>
</div>

<div class="container container-fluid ">
    <div class="col-md-12">

        <div class="spacer-40"></div>

    </div>
</div>

<div class="container container-fluid ">
    <div class="col-md-12">
    </div>
</div>


<div class="container container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <form id="form-password-reset" class="form-signin" method="post" action="/login/doPasswordReset">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Forgot Password</h4>
                    </div>
                    <div class="panel-body">

                        <p>
                            Please provide the email you signed up with.
                        </p>

                        <div class="form-group">
                            <input type="text" id="email" name="email" class="form-control input-lg" placeholder="Email"/>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-lg btn-primary btn-block"/>
                        <input type="hidden" name="Kl4vcotUFe7fNV" value="8c0df49f6b3e21c9b8cd92b32515a2f9"/>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h2 class="mar-top-none">Recovery is Easy!</h2>
            <p>
                Provide your email and you will receive a link to reset your password.
                For your security, your reset link be valid for 10 minutes.
            </p>
            <p>
                If you do not receive an email, please check your <strong>spam</strong>.
            </p>
        </div>
    </div>
</div>
