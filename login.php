<html>

<head>
    <title>PHP com MySql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-joao" id="navbar-top">
  <a class="navbar-brand" id="navbar-logo" href="index.php">Logo</a>
  <div class="m-nav" id="m-nav" >MEIO DA NAVBAR</div>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0" id="navbar-search">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
  </div>
</nav>


<div class="top-buttons">
<a class="btn btn-primary" href="index.php" role="button" id="buttontop" >Home</a>
<a class="btn btn-primary" href="contact.php" role="button" id="buttontop" >Contato</a>
<a class="btn btn-primary" href="aboutus.php" role="button" id="buttontop" >Sobre Nós</a>
<a class="btn btn-primary" href="login.php" role="button" id="buttontop" >Login</a>
<a class="btn btn-primary" href="area_admin.php" role="button" id="buttontop" >Area Administrativa</a>
</div>


<div class="content" >
    <div class="content-inside"> 
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
</div>


<div class="div-footer"> 
<!-- Footer -->
<footer class="text-center text-black" id="footer">

    <!-- Section: Links -->
    <section class="footer-links">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          
          <ul class="list-unstyled mb-0">
            <li>
            <a href="contact.php" class="text-black">Contato</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        
          <ul class="list-unstyled mb-0">
            <li>
              <a href="aboutus.php" class="text-black">Sobre nós</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <ul class="list-unstyled mb-0">
            <li>
              <a href="login.php" class="text-black">Login</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->


        
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-black">Admin</a>
            </li>
           
          </ul>
        </div>
        <!--Grid column-->
      </div>

      
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.4);">
    © 2022 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>


</body>

</html>