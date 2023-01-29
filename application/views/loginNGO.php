
    <section id="login">
      <div class="container" class="Form my-4 mx-5">
        <div class="row gx-0">
          <div class="col-lg-6">
            <div class="col-lg-9 float-end" >
              <img src="<?php echo base_url(); ?>/assets/volunteers2.jpg" class="img-fluid shadow" alt="volunteer">
            </div>
          </div>
          

          <div class="col-lg-6 px-5">
          <?php if($this->session->flashdata('error')){

          ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $this->session->flashdata('error');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php } ?>
            <h1 class="font-weight-bold py-3">Welcome Back!</h1>
            <h4>Sign in to NGO Account</h4>
            <form action="<?php echo base_url(); ?>auth/verifyLoginNGO" method="POST">
              <!-- <div class="form-row">
                <div class="col-lg-7">
                  <select class="form-select my-3 px-4" name="idenity" id="identity" aria-label="Default select example">
                    <option selected>Select Identity</option>
                    <option value="1">NGO</option>
                    <option value="2">Community Hall</option>
                  </select>
                </div>
              </div> -->

              <div class="form-row">
                <div class="col-lg-7">
                  <input name="ngo_username" placeholder="Username" class="form-control my-3 px-4" required>
                </div>
              </div>
  
              <div class="form-row">
                <div class="col-lg-7">
                  <input name="ngo_password" type="password" placeholder="********" class="form-control my-3 px-4" required>
                </div>
              </div>
  
              <div class="form-row">
                <div class="col-lg-7">
                  <button type="submit" class="btn1 mb-3 shadow">Login</button>
                </div>
              </div>

              <!-- <a href="#">Forgot password ?</a>
              <p>Don't have an account <a href="#">Register Here</a></p>-->
            </form>
          </div>
        </div>
      </div>

    </section>
  
