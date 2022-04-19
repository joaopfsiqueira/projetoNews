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
  <a class="navbar-brand" id="navbar-logo" href="#">Logo</a>
  <div class="m-nav" id="m-nav" >MEIO DA NAVBAR</div>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0" id="navbar-search">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
  </div>
</nav>

<div class="top-buttons">
<button class="btn btn-outline-success my-2 my-sm-0" id="buttontop" type="submit">Button 1</button>
<button class="btn btn-outline-success my-2 my-sm-0" id="buttontop" type="submit">Button 2</button>
<button class="btn btn-outline-success my-2 my-sm-0" id="buttontop" type="submit">Button 3</button>
<button class="btn btn-outline-success my-2 my-sm-0" id="buttontop" type="submit">Button 4</button>
</div>

<div class="div-menu">
  <div class="container">
   <div class="row">
      <div class="col">
      1 of 3
      </div>
      <div class="col-6">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="..." alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="..." alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col">
      3 of 3
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
              <a href="#!" class="text-black">Home</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-black">Fale Conosco</a>
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