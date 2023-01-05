<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
    <section id="register">
      <div class="container" class="form my-4 mx-5">
        <div class="row gx-0">
          <div class="col-lg-6">
            <div class="col-lg-9 float-end">
              <img src="<?php echo base_url(); ?>/assets/volunteers1.jpg" class="img-fluid shadow" alt="volunteers">
            </div>
          </div>

          <div class="col-lg-6 px-5">
            <h1 class="font-weight-bold py-3">Welcome Back!</h1>
            <h4>Sign in To Community/NGO Account</h4>
            <form>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="text" name="user_ngo_name" placeholder="Organisation Name" class="form-control my-3 px-4">
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-7">
                  <input type="text" name="user_name" placeholder="Username" class="form-control my-3 px-4">
                </div>
              </div>
  
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="password" name="user_password" placeholder="********" class="form-control my-3 px-4">
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-7">
                  <input type="password" name="user_password2" placeholder="confirm password" class="form-control my-3 px-4">
                </div>
              </div>
  
              <div class="form-row">
                <div class="col-lg-7">
                  <button type="submit" class="btn1 mb-3 shadow">Create Account</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php echo form_close(); ?>