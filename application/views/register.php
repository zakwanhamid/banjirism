    <section id="register">
      <div class="container" class="form my-4 mx-5">
        <div class="row gx-0">
          <div class="col-lg-6">
            <div class="col-lg-9 float-end">
              <img src="<?php echo base_url(); ?>/assets/volunteers2.jpg" class="img-fluid shadow" alt="volunteers">
            </div>
          </div>

          <div class="col-lg-6 px-5">
            <h1 class="font-weight-bold py-3">Welcome Back!</h1>
            <h4>Create NGO Account</h4>
            <form action="<?php echo base_url(); ?>auth/signupInsert" method="POST">
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="text" name="ngo_name" placeholder="Organisation Name" class="form-control my-3 px-4">
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-7">
                  <input type="text" name="ngo_username" placeholder="Username" class="form-control my-3 px-4">
                </div>
              </div>
  
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="password" name="ngo_password" placeholder="********" class="form-control my-3 px-4">
                </div>
              </div>
  
              <div class="form-row">
                <div class="col-lg-7">
                  <button name="register" type="submit" class="btn1 mb-3 shadow">Create Account</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>