<section class="vh-100" style="background-color: #3773e9;">
    <span for="" class="text-swich-login"><a href="<?php echo base_url('home'); ?>">Back</a></span>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <?php 
        if($error = $this->session->flashdata('login_failed')):?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php endif; ?>
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="<?php echo base_url('assets_admin/img/backgrounds/login-bg.png') ?>"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form id="formAuthentication" method="POST" class="mb-3" action="<?php echo base_url('Login/authLogin'); ?>" data-parsley-validate data-toggle="validator" enctype="multipart/form-data">
                  
                  <h3>Admin Login</h3>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Please sign-in to your account and start the adventure</h5>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="email">Username</label> 
                    <input id="email" class="form-control" name="username" type="text" autofocus="" placeholder="Enter your email or username" required data-parsley-trigger="keyup" />
                  </div>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input id="password" class="form-control" name="password" type="password" placeholder="············" required data-parsley-trigger="keyup" />
                  </div>

                  <div class="pt-1 mb-4">
                  <div class="mb-3"><button class="btn btn-primary d-grid w-100" type="submit">Login</button></div>
                  </div>
<<<<<<< HEAD
                  <a class="small text-muted" href="#!">Forgot password?</a>
=======
                  <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

