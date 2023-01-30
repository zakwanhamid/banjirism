<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $title ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="views/style.css">

</head>

<style>
  section {
    /* height: 100%; */
    min-height: 100vh;
    padding: 150px 0;
    background-color: #84ceeb;
  }


  .btn {
    border: none;
    outline: none;
    height: 50px;
    background-color: #8860d0;
    color: white;
    border-radius: 5px;
    font-weight: bold;
  }

  .btn:hover {
    background-color: white;
    color: black;
  }


  .btn1 {
    border: none;
    outline: none;
    height: 50px;
    width: 100%;
    background-color: black;
    color: white;
    border-radius: 5px;
    font-weight: bold;
  }

  .btn1:hover {
    background-color: white;
    /* border: 1px solid; */
    color: black;
  }

  #creat-post{
    height: 40px;
  }



  .row {
    /* background-color: white; */
    border-radius: 30px;
    /* box-shadow: 12px 12px 22px black; */
  }

  img {
    border-radius: 30px;

  }


  .btn1 {
    border: none;
    outline: none;
    height: 50px;
    width: 100%;
    background-color: black;
    color: white;
    border-radius: 5px;
    font-weight: bold;
  }

  .btn1:hover {
    background-color: white;
    /* border: 1px solid; */
    color: black;
  }

  #create-form{
    width: 40%;
  }


  /* 
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. 
 */
  #map {
    height: 100%;
  }

  /* 
 * Optional: Makes the sample page fill the window. 
 */
  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>


<body>

    <nav class="navbar navbar-expand-md navbar-light sticky-top " style="background:#5690e9">
      <div class="container-xxl">
        <a href="<?php echo base_url(); ?>" class="navbar-brand">
          <img src="<?php echo base_url(); ?>/assets/logoz.png"  height="50" alt="logo">
        </a>
        <!-- toggle buttom for mobile nav -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#main-nav" aria controls="main-nav" aria-expanded="false"
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-end align-center fw-bold" id="main-nav">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item ms-lg-4">
              <a class="nav-link" href="<?php echo base_url('Auth/loginNGO'); ?>">NGO Login</a>
            </li>
            <li class="nav-item ms-lg-4">
              <a class="nav-link" href="<?php echo base_url('Auth/loginComm'); ?>">Hall Login</a>
            </li>
            <li class="nav-item ms-lg-4">
              <a class="nav-link" href="<?php echo base_url('Auth/register');?>">Register</a>   
            </li>
          </ul>
        </div>
      </div> 
    </nav>
     
