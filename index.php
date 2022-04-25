<html>

<head>
    <title>PHP com MySql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-joao" id="navbar-top">
  <img src="./imagens/logo.jpg" width="100px" height="100px"  class="navbar-brand" id="navbar-logo" href="index.php">
  <div class="m-nav fw-bold" id="m-nav" >Unisal Noticias</div>
 
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

<div class="div-menu">
  <div class="container">
   <div class="row ">
      <div class="col" id="coluna1">
        
        <img src="./ads/ad1.jpg" lazy width="330" id="img-prop">
      </div>
      <div class="col-6  d-block" id="feed-column">
        <?php
          include "conexao.php";
          $noticias = mysqli_query($conn, "select * from noticias");
          $conta = mysqli_num_rows($noticias);
          if ($conta > 0) {
            for ($i = 0; $i < $conta; $i++) {
              $noticia = mysqli_fetch_assoc($noticias);
              $usuario = mysqli_fetch_assoc(mysqli_query($conn, "select * from usuarios where codusuario =" . $noticia['codusuario']));
              echo '
              <div class="my-4 p-3 d-block" id="noticia" key='.$noticia['codnoticia'].'>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="d-flex flex-row justify-content-center align-items-center ">
                   <h2 class=" fw-bold mb-2 text-uppercase" id="titulo-noticia">'.$noticia['titulo'].'</h2>
                  </div>
              <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
               <div class="carousel-item active">
                 <img class="d-block w-100" height="600px" width="600px" id="img-post" src="./imagens/'.$noticia['imagem'].'" alt="First slide">
               </div>
               <div class="carousel-item">
                 <img class="d-block w-100"  src="./imagens/'.$noticia['imagem2'].'" alt="Second slide">
               </div>
               <div class="carousel-item">
                 <img class="d-block w-100"  src="./imagens/'.$noticia['imagem3'].'" alt="Third slide">
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
           <div class="">
            <div class="span">'.$noticia['conteudo'].'</div>
          </div>
          </div>
         
         ';
            }
          }
          echo '</div>';
        
        ?>
     
      <div class="col">
        asdasdsadasdasd
        <img src="./ads/ad2.jpg" lazy width="280">
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

    </section>
  </div>
</footer>
<!-- Footer -->
</div>


</body>



</html>