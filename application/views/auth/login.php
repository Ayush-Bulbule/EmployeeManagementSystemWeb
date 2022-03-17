<link rel="stylesheet" href="../style/loginstyle.css">
<div class="h-100vh">
    <nav>
        <!-- <div class="container-fluid d-flex align-items-center justify-content-center mb-0  py-3 shadow">
        <h2>Employee Management System</h2>
    </div> -->
        <div class="container-fluid d-flex border-bottom align-items-center justify-content-center mb-0  py-3 shadow">
            <img src="<?php echo base_url(); ?>public/logo.png" alt="logo" class="img-fluid" class="logo-img" style="width:3rem;height:3rem;border-radius:5px;">
            <h3 class="logo-title mb-0 ms-2">Employee Management System</h3>
        </div>
    </nav>
    <div class="container-fluid" style="background-color: #ecf0f4;">

        <div class="row pt-2">
            <div class="col-md-7 col-sm-12 ps-lg-5 py-5">
                <img src="<?php echo base_url(); ?>public/login-page-img.png" alt="Login Image" class="img-fluid  py-lg-4 ps-lg-5">
            </div>
            <div class="col-md-5 col-sm-12 pt-4 pe-lg-5">
                <div class="box p-4 py-5 ms-4 me-5 login-box shadow">
                    <h3 class="text-center ">
                        Weclome to EMS
                    </h3>
                    <!-- Form -->
                    <form action="<?php echo base_url('login') ?>" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <div class="input-group with-icon">
                                <input class="form-control rounded p-2" name="email" type="text" placeholder="Email" autocomplete=off>
                                <i class="lar la-envelope" style="font-size: 1.5rem;"></i>
                            </div>
                            <small class="form-text text-danger"><?php echo form_error('email'); ?></small>

                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <div class="input-group with-icon">
                                <input class="form-control rounded p-2" name="password" type="password" placeholder="Password" autocomplete=off>
                                <i class="las la-unlock-alt" style="font-size: 1.5rem;"></i>
                            </div>
                            <small class="form-text text-danger"><?php echo form_error('password'); ?></small>
                        </div>
                        <div class="mb-3 form-check">
                            <a href="/" class="link-fp">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn login-btn p-3 w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>