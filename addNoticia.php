<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>Crie sua noticia</title>
  <?php
  
  session_start();
  if((!isset($_SESSION['usuario'])==true)) {
    unset($_SESSION['usuario']);
    header('Location:login.php');
  } ?>
</head>

                  
<?php

    include "conexao.php";
    
    $usuario = $_SESSION['usuario'];
    $verifica = mysqli_query($conn, "select * from usuarios where usuario='" . $usuario ."'");
    $conta = mysqli_num_rows($verifica);
    if ($conta!=0) {
        $user = mysqli_fetch_assoc($verifica);
        $codusuario = $user['codusuario'];
    }
    $erros =  0;
    $msg = "";
    if(isset($_POST['submit'])) {
      $titulo = $_POST['titulo'];
      $conteudo = $_POST['conteudo'];
      $img_name = $_FILES['my_image']['name'];
      $img_size = $_FILES['my_image']['size'];
      $tmp_name = $_FILES['my_image']['tmp_name'];
      $img_name2 = $_FILES['my_image2']['name'];
      $img_size2 = $_FILES['my_image2']['size'];
      $tmp_name2 = $_FILES['my_image2']['tmp_name'];
      $img_name3 = $_FILES['my_image3']['name'];
      $img_size3 = $_FILES['my_image3']['size'];
      $tmp_name3 = $_FILES['my_image3']['tmp_name'];
      $date = '2000-01-01';
      $error = $_FILES['my_image']['error'];
      $error2 = $_FILES['my_image2']['error'];
      $error3 = $_FILES['my_image3']['error'];
   

  if ($error === 0) {
    if ($img_size > 1250000) {
      $msg = $msg . "<p> Arquivo muito grande. </p>";
      $erros = $erros+1;
    } else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $extensoes= array("jpg", "jpeg", "png"); 

      if (in_array($img_ex_lc, $extensoes)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = 'imagens/'.$new_img_name;
        move_uploaded_file($tmp_name2, $img_upload_path);

        // Insert into Database

      }else {
        $msg = $msg . "Você não pode fazer upload desse tipo de arquivo.";
        $erros = $erros+1;
      }
    }
  }else {
    $msg = $msg . "<p> Erro inesperado. Imagem 1 faltando? </p>";
    $erros = $erros+1;
  }

  if ($error2 === 0) {
    if ($img_size2 > 1250000) {
      $msg = $msg . "<p> Arquivo muito grande. </p>";
      $erros = $erros+1;
    } else {
      $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
      $img_ex_lc2 = strtolower($img_ex2);

      $extensoes = array("jpg", "jpeg", "png"); 

      if (in_array($img_ex_lc2, $extensoes)) {
        $new_img_name2 = uniqid("IMG-", true).'.'.$img_ex_lc2;
        $img_upload_path3 = 'imagens/'.$new_img_name2;
        move_uploaded_file($tmp_name3, $img_upload_path3);

        // Insert into Database

      }else {
        $msg = $msg . "Você não pode fazer upload desse tipo de arquivo.";
        $erros = $erros+1;
      }
    }
  }else {
    $msg = $msg . "<p> Erro inesperado. Imagem 2 faltando? </p>";
    $erros = $erros+1;
  }


  
  if ($error3 === 0) {
    if ($img_size3 > 1250000) {
      $msg = $msg . "<p> Arquivo muito grande. </p>";
      $erros = $erros+1;
    } else {
      $img_ex3 = pathinfo($img_name2, PATHINFO_EXTENSION);
      $img_ex_lc3 = strtolower($img_ex3);

      $extensoes = array("jpg", "jpeg", "png"); 

      if (in_array($img_ex_lc3, $extensoes)) {
        $new_img_name3 = uniqid("IMG-", true).'.'.$img_ex_lc3;
        $img_upload_path2 = 'imagens/'.$new_img_name3;
        move_uploaded_file($tmp_name, $img_upload_path2);

        // Insert into Database

      }else {
        $msg = $msg . "Você não pode fazer upload desse tipo de arquivo.";
        $erros = $erros+1;
      }
    }
  }else {
    $msg = $msg . "<p> Erro inesperado Imagem 3 faltando? </p>";
    $erros = $erros+1;
  }




  if($titulo == "" || $titulo == null) {
      $erros = $erros + 1;
      $msg = $msg . "<p>O campo titulo deve ser preenchido</p>";
  }
  if($conteudo == "" || $conteudo == null){
      $erros = $erros + 1;
      $msg = $msg . "<p>O campo conteudo deve ser preenchido</p>";
  }



  $verifica = mysqli_query($conn, "select * from noticias where titulo='" . $titulo . "'");
  $conta = mysqli_num_rows($verifica);
if ($conta == 0 && $erros ==0) {

  $result = mysqli_query($conn,"insert into noticias (codusuario, titulo, imagem,imagem2,imagem3,conteudo) values (".$codusuario.", '".$titulo."', '".$new_img_name."', '".$new_img_name2."', '".$new_img_name3."', '".$conteudo."')");

  // $result = mysqli_query($conn,"insert into usuarios (nome, email, telefone, usuario, senha) values ('".$nome."', '".$email."', '".$telefone."', '".$usuario."', password('".$senha."'))");
  
  echo '<p>result : '. $result . '</p>';

  if ($result == 1) {
      $msg = "Noticia cadastrado com sucesso!";
      header('Location:area_admin.php');
  } else {
      $msg = "Noticia não pode ser cadastrado! Talvez o campo imagem esteje vazio.";
  }

} 
}

?>



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

              <h2 class="fw-bold mb-2 text-uppercase">Crie sua noticia</h2>
              <p class="text-white-50 mb-5">Entre com sua conta para acessar essa area.</p>

              <form name="entrar" method="POST" action="" enctype="multipart/form-data">
                <div class="form-outline form-white d-flex  align-items-center mb-4">
                  <label class="form-label" for="typeEmailX">Titulo da Noticia: </label>
                  <input type="text" name="titulo" id="typeEmailX" class="form-control form-control-lg" />
                </div>

                <div  class="form-outline form-white d-flex flex-row align-items-center  mb-4" id="senhaBox">
                   <label class="form-label mr-2" for="typePasswordX">Texto: </label>
                   <textarea type="text" name="conteudo" id="typePasswordX" class="form-control form-control-lg h-25"> </textarea>
                </div>

                <div  class="form-outline form-white d-flex flex-row align-items-center  mb-4" id="senhaBox">
                   <label class="form-label mr-2" for="typePasswordX">Imagem: </label>
                   <input type="file" 
                  name="my_image">
                </div>
          
                <div  class="form-outline form-white d-flex flex-row align-items-center  mb-4" id="senhaBox">
                      <label class="form-label mr-2" for="typePasswordX">Imagem 2: </label>
                      <input type="file" 
                      name="my_image2">
                    </div>

                    <div  class="form-outline form-white d-flex flex-row align-items-center  mb-4" id="senhaBox">
                      <label class="form-label mr-2" for="typePasswordX">Imagem 3: </label>
                      <input type="file" 
                      name="my_image3">
                    </div>

                <input class="btn btn-outline-light btn-lg px-5" type="submit"  name="submit" value="submit"></input>
                <div  class=" d-flex flex-column align-items-center mt-4" id="">
                    <?php  echo $msg  ?>
                  </div>
              </form>
              

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
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          
          <ul class="list-unstyled mb-0">
            <li>
            <a href="contact.php" class="text-black">Contato</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        
          <ul class="list-unstyled mb-0">
            <li>
              <a href="aboutus.php" class="text-black">Sobre nós</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        
        <!--Grid column-->


        
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        
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
</body>
</html>