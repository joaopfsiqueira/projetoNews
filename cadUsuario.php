<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>Area Administrativa</title>
  <?php
  
  session_start();
  if((!isset($_SESSION['usuario'])==true)) {
    unset($_SESSION['usuario']);
    header('Location:login.php');
  } 

  ?>
</head>

<?php
  $erros =  0;
  $msg = "";

if (isset($_POST['registrar'])) {

    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $usuario = $_POST['usuario'];

  
    if($nome == "" || $nome == null) {
        $erros = $erros + 1;
        $msg = $msg . "<p>O campo login deve ser preenchido</p>";
    }
    if($email == "" || $email == null){
        $erros = $erros + 1;
        $msg = $msg . "<p>O campo email deve ser preenchido</p>";
    }
    if($telefone == "" || $telefone == null){
        $erros = $erros + 1;
        $msg = $msg . "<p>O campo telefone deve ser preenchido</p>";
    }
    if($usuario == "" || $usuario == null){
        $erros = $erros + 1;
        $msg = $msg ."<p>O campo usuario deve ser preenchido</p>";
    }
    if($usuario == "" || $usuario == null){
        $erros = $erros + 1;
        $msg = $msg . "<p>O campo senha deve ser preenchido</p>";
        } else {
            if (strlen($senha) <3 ){

                $erros = $erros + 1;
                $msg = $msg . "<p>O campo senha deve ter mais de 3 caracteres.</p>";
            }
        }

    
    
            
    if  ($erros ==0) {
        $verifica = mysqli_query($conn, "select * from usuarios where usuario='" . $usuario . "'");
        $conta = mysqli_num_rows($verifica);
        if ($conta == 0) {
            $result = mysqli_query($conn,"insert into usuarios (nome, email, telefone, usuario, senha) values ('".$nome."', '".$email."', '".$telefone."', '".$usuario."', password('".$senha."'))");

            if ($result == 1) {
                echo "Usuário cadastrado com sucesso!";
            } else {
                echo "Usuário não pode ser cadastrado!";
            }
        }
       
    } 
}
?>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-joao" id="navbar-top">
  <a class="navbar-brand" id="navbar-logo" href="index.php">Logo</a>
  <div class="m-nav" id="m-nav" >Unisal Noticias</div>
 
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
<a class="btn btn-primary" href="sair.php" role="button" id="buttontop" >Sair</a>
<a class="btn btn-primary" href="area_admin.php" role="button" id="buttontop" >Area Administrativa</a>
</div>


<div class="content" >
    <div class="content-inside"> 
    <section class="vh-100 gradient-custom">
      <div class="container-xl py-5 h-100 mb-5">
        <div class="row d-flex  justify-content-center mt-5  ">
          <div class="col-8 col-md-8 col-lg-8 col-xl-10 w-800 ">
            <div class="card  bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                 
                  <div class="d-flex flex-row justify-content-center align-items-center ">
                   <h2 class=" fw-bold mb-2 text-uppercase">Registrar novo usuário</h2>
                  </div>


                  <form name="entrar" method="POST" action="" class="d-flex flex-column form-inline">
                    <div class="form-outline form-white d-flex  align-items-center mb-4  mt-4">
                        <label class="form-label mx-2 fw-bold " for="typeEmailX">Nome: </label>
                        <input type="text" name="nome" id="typeEmailX" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline form-white d-flex  align-items-center mb-4">
                        <label class="form-label mx-2 fw-bold" for="typeEmailX">E-mail: </label>
                        <input type="text" name="email" id="typeEmailX" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline form-white d-flex  align-items-center mb-4">
                        <label class="form-label mx-2 fw-bold" for="typeEmailX">Telefone: </label>
                        <input type="text" name="telefone" id="typeEmailX" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline form-white d-flex  align-items-center mb-4">
                        <label class="form-label mx-2 fw-bold" for="typeEmailX">Usuário: </label>
                        <input type="text" name="usuario" id="typeEmailX" class="form-control form-control-lg" />
                    </div>

                    <div  class="form-outline form-white d-flex flex-row align-items-center  mb-4" id="senhaBox">
                    <label class="form-label mx-2 fw-bold" for="typePasswordX">Senha: </label>
                    <input type="password" name="senha" id="typePasswordX" class="form-control form-control-lg" />
                    </div>
    
                    <input class="btn btn-outline-light btn-lg my-4 px-5" type="submit"  name="registrar" value="Registrar"></input>
                    <div  class=" d-flex flex-column align-items-center mt-4" id="">
                    <?php  echo $msg  ?>

                    </div>
                  </form>
                </div>
            </div>
      </div>
    </section>
    
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

</div>






</body>
</html>