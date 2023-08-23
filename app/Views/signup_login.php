<!-- Page Title-->
<div class="page-title">
    <div class="container">
        <div class="column">
            <h1 style="text-align:center;">Login / Register Account</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login or Signup</li>
            </ol>
        </nav>
    </div>
</div>



<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">

    <?php
    if(isset($_GET['err'])) {
        echo '<div class="alert alert-danger">'.$_GET['err'].'</div>';
    }
    ?>

    <div class="row">
        <div class="col-md-6">
            <form class="login-box" method="post" action="<?= base_url('login_submit') ?>">
                <h3 class="margin-bottom-1x">Login</h3>
                <br/>
                <br/>
            
                <div class="form-group input-group mb-3" >
                    <input class="form-control" name="email" type="email" placeholder="Email" required><span class="input-group-addon"><i class="icon-mail"></i></span>
                </div>
                <div class="form-group input-group">
                    <input class="form-control" name="pass" type="password" placeholder="Password" required><span class="input-group-addon"><i class="icon-lock"></i></span>
                </div>
                <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                    <div class="custom-control custom-checkbox">
                        <input name="remember" class="custom-control-input" type="checkbox" id="remember_me" checked>
                        <label class="custom-control-label" for="remember_me">Remember me</label>
                    </div><a class="navi-link" href="account-password-recovery.html">Forgot password?</a>
                </div>
                <div class="text-center text-sm-right">
                    <button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="padding-top-3x hidden-md-up"></div>
            <h3 class="margin-bottom-1x">No Account? Register</h3>
            <p>Registration takes less than a minute but gives you full control over your orders.</p>

            <form class="row" method="post" action="<?= base_url('signup_submit') ?>">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-fn">First Name</label>
                        <input class="form-control" name="firstname" type="text" id="reg-fn" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-ln">Last Name</label>
                        <input class="form-control" name="lastname" type="text" id="reg-ln" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-email">E-mail Address</label>
                        <input class="form-control" name="email" type="email" id="reg-email" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-phone">Phone Number</label>
                        <input class="form-control" name="phone" type="text" id="reg-phone" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-pass">Password</label>
                        <input class="form-control" name="pass" type="password" id="reg-pass" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-pass-confirm">Confirm Password</label>
                        <input class="form-control" name="copass" type="password" id="reg-pass-confirm" required>
                    </div>
                </div>
                <div class="col-12 text-center text-sm-right">
                    <button class="btn btn-primary margin-bottom-none" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>