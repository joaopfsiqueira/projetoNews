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
      <div class="container-xl py-5 h-100">
        <div class="row d-flex justify-content-center mt-5 h-100 ">
          <div class="col-auto col-md-10 col-lg-12 col-xl-12 col-sm-4 w-100">
            <div class="card w-100 bg-dark text-white h-75" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                 
                  <div class="d-flex flex-row justify-content-center align-items-center ">
                   <h2 class="fw-bold mb-2 text-uppercase">Area adminstrativa -</h2>
                    <a class="btn btn-primary" href="cadUsuario.php" role="button" id="buttontop" >Cadastrar Usuario Adminstrativo</a>
                    <a class="btn btn-primary" href="addNoticia.php" role="button" id="buttontop" >Criar Notícia</a>
                  </div>
                  <div class="d-flex flex-row  align-items-center ">
                    <h2 class="fw-bold mb-2">Noticias</h2>
                   
                  </div>
                  <?php
                    include "conexao.php";
                    $noticias = mysqli_query($conn, "select * from noticias");
                    $conta = mysqli_num_rows($noticias);
                    if ($conta == 0) {
                      
                      echo '
                      <div class="card  bg-secondary text-white" style="border-radius: 1rem;">
                      <div class="card-body p-5 text-center">
                        <p> Não há nenhuma noticia. </p>
                      </div>
                    </div>
                    ';
                    } else {
                      echo '<table class="table text-white text-center">
                      <thead>
                      <tr>
                        <th scope="col">Ações</th>
                        <th scope="col">Código da Noticía</th>
                        <th scope="col">Código do Usuário</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Criado</th>
                      </tr>
                    </thead>
                    <tbody>
                    ';
                      
                      for ($i = 0; $i < $conta; $i++) {
                        $noticia = mysqli_fetch_assoc($noticias);
                        $usuario = mysqli_fetch_assoc(mysqli_query($conn, "select * from usuarios where codusuario =" . $noticia['codusuario']));

                        echo "
                        <tr>
                        <td><a href='altNoticia.php?id=".$noticia['codnoticia']."'>Alterar</a><br><a href='delNoticia.php?id=".$noticia['codnoticia']."'>Excluir</td>";
                       
                        // $conta = mysqli_num_rows($noticias);
                      echo '
                          <th scope="row">'.$noticia['codnoticia'].'</th>
                          <td>'. $noticia['codusuario'].'</td>
                          <td>'.$usuario['nome'].'</td>
                          <td>'.$noticia['criado'].'</td>
                          </tr>
                          
                    
                     ';
               
                      
                      }
                      echo ' </tbody>
                      </table>';
                    }
                  ?>

                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
</div>
</body>
</html>