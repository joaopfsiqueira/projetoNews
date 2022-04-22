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


<div class="content-aboutus" >
    <div class="content-inside-aboutus"> 
            <div class="about-section paddingTB60">
                <div class="container-us">
						<div class="col-md-7 col-sm-6">
							<div class="about-title clearfix">
								<h1>About <span>Appmom</span></h1>
								<h3>Lorem ipsum dolor sit amet </h3>
								<p class="about-paddingB">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor congue non sit amet dolor. Proin pretium purus a lorem ornare </p>
								<p>sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros mauris, convallis et sem tempus, viverra hendrerit sapien</p>
                            </div>
                        </div>
                </div>
            </div>  
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
              <a href="#!" class="text-black">Sobre nós</a>
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