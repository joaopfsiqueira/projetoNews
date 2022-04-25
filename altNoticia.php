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
include "conexao.php";

  if((!isset($_SESSION['usuario'])==true)) {
    unset($_SESSION['usuario']);
    header('Location:login.php');
  } 
$id = $_GET['id'];

$noticia = "";
$codigo = "";
$titulo = "";
$conteudo = "";
$imagem = "";
$imagem2 = "";
$imagem3 = "";


$result = mysqli_query($conn, "select * from noticias where codnoticia = ". $id);

$numRegistros = mysqli_num_rows($result);

for ($i=0; $i < $numRegistros; $i++) {
    $noticia = mysqli_fetch_assoc($result);
    $codigo = $noticia['codnoticia'];
    $titulo = $noticia['titulo'];
    $conteudo = $noticia['conteudo'];
    $imagem = $noticia['imagem'];
    $imagem2 = $noticia['imagem2'];
    $imagem3 = $noticia['imagem3'];
}

?>

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
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

                 
                  <div class="d-flex flex-row justify-content-center align-items-center ">
                   <h2 class="fw-bold mb-2 text-uppercase">Area adminstrativa - Alterar Noticia</h2>

                  </div>
                  </div>

                  <form name="entrar" method="POST" action="resolverNoticia.php?acao=alt"enctype="multipart/form-data">
                   

                    <div class="form-outline form-white d-flex  align-items-center mb-4">
                      <label class="form-label mr-2" for="typeEmailX">Titulo da Noticia: </label>
                      <input type="text" name="titulo" value="<?php echo $titulo;?>" id="typeEmailX" class="form-control form-control-lg" />
                    </div>

                    <div  class="form-outline form-white d-flex flex-row align-items-center  mb-4" id="senhaBox">
                      <label class="form-label mx-2" for="typePasswordX">Texto: </label>
                      <input type="text" name="conteudo" value="<?php echo $conteudo;?>" id="typePasswordX" class="form-control form-control-lg" />
                    </div>

                    <div  class="form-outline form-white d-flex flex-row align-items-center  mb-4" id="senhaBox">
                      <img class=" mx-2 "  width="100px" height="100px" src="imagens/<?php if ($imagem == NULL ) { echo "padrao.jpg"; } else { echo $imagem; } ?>" for="typePasswordX">Imagem: </label>
                      <input type="file" 
                      name="my_image">
                    </div>

                    <div  class="form-outline form-white d-flex flex-row align-items-center  mb-4" id="senhaBox">
                    <img class=" mx-2 "  width="100px" height="100px" src="imagens/<?php if ($imagem2 == NULL ) { echo "padrao.jpg"; } else { echo $imagem2; } ?>" for="typePasswordX">Imagem2: </label>
                      <input type="file" 
                      name="my_image2">
                    </div>

                    <div  class="form-outline form-white d-flex flex-row align-items-center  mb-4" id="senhaBox">
                    <img class=" mx-2 "  width="100px" height="100px" src="imagens/<?php if ($imagem3 == NULL ) { echo "padrao.jpg"; } else { echo $imagem3; } ?>" for="typePasswordX">Imagem3: </label>
                      <input type="file" 
                      name="my_image3">
                    </div>

                    <div hidden class="form-outline form-white d-flex flex-row align-items-center mb-4" id="senhaBox">
                      <label hidden class="form-label mx-2" for="typePasswordX"></label>
                      <input hidden type="text" readonly name="codnoticia" value="<?php echo $id;?>" id="typePasswordX" class="form-control form-control-lg" />
                    </div>



                    <input class="btn btn-outline-light btn-lg px-5" type="submit"  name="submit" value="submit"></input>
                  
                  </form>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>