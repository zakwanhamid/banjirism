<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register NGO</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
  crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <style>
    .row{
      /* background-color: white; */
      border-radius: 30px;
      /* box-shadow: 12px 12px 22px black; */
    }

    img{
      border-radius: 30px;
    }

    .btn1{
      border: none;
      outline: none;
      height: 50px;
      width: 100%;
      background-color: black;
      color: white;
      border-radius: 5px;
      font-weight: bold;
    }

    .btn1:hover{
      background-color: white;
      /* border: 1px solid; */
      color: black;
    }
  </style>

</head>
<body>

    <section id="register">
      <div class="container form my-4 mx-5">
        <div class="row gx-0">
          <div class="col-lg-6">
            <div class="col-lg-7 float-end">
              <img src="<?php echo base_url(); ?>/assets/volunteers1.jpg" class="img-fluid shadow" alt="volunteers">
            </div>
          </div>

          <div class="col-lg-6 px-5">
            <h1 class="font-weight-bold py-3">Welcome Back!</h1>
            <h4>Sign in To Community/NGO Account</h4>
            <form>
              <div class="form-row">
                <div class="col-lg-7">
                  <input placeholder="Organisation Name" class="form-control my-3 px-4">
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-7">
                  <input placeholder="Username" class="form-control my-3 px-4">
                </div>
              </div>
  
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="password" placeholder="********" class="form-control my-3 px-4">
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-7">
                  <input type="password" placeholder="confirm password" class="form-control my-3 px-4">
                </div>
              </div>
  
              <div class="form-row">
                <div class="col-lg-7">
                  <button type="button" class="btn1 mb-3 shadow">Create Account</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous">
    </script>

</body>
</html>