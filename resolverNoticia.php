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
                      
                 
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>

?>
<?php
include "conexao.php";
$erros =  0;
$msg = "";

if ($_GET['acao'] == "alt") {

    $idnoticia = $_POST['codnoticia'];
    $conteudo = $_POST['conteudo'];
    $titulo = $_POST['titulo'];
    $img_name = $_FILES['my_image']['name'];
      $img_size = $_FILES['my_image']['size'];
      $tmp_name = $_FILES['my_image']['tmp_name'];
      $img_name2 = $_FILES['my_image2']['name'];
      $img_size2 = $_FILES['my_image2']['size'];
      $tmp_name2 = $_FILES['my_image2']['tmp_name'];
      $img_name3 = $_FILES['my_image3']['name'];
      $img_size3 = $_FILES['my_image3']['size'];
      $tmp_name3 = $_FILES['my_image3']['tmp_name'];

      $error = $_FILES['my_image']['error'];
      $error2 = $_FILES['my_image2']['error'];
      $error3 = $_FILES['my_image3']['error'];

  if ($error === 0) {
    if ($img_size > 125000) {
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
    if ($img_size2 > 125000) {
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
    if ($img_size3 > 125000) {
      $msg = $msg . "<p> Arquivo muito grande. </p>";
      $erros = $erros+1;
    } else {
      $img_ex3 = pathinfo($img_name2, PATHINFO_EXTENSION);
      $img_ex_lc3 = strtolower($img_ex3);

      $extensoes = array("jpg", "jpeg", "png"); 

      if (in_array($img_ex_lc3, $extensoes2)) {
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
  echo $erros;
    if ($erros == 0) {
    $result = mysqli_query($conn, "update noticias set conteudo='".$conteudo."', titulo ='".$titulo."', imagem='".$new_img_name."', imagem2='".$new_img_name2."', imagem3='".$new_img_name3."' where codnoticia=".$idnoticia);
    } else {
      $result = mysqli_query($conn, "update noticias set conteudo='".$conteudo."', titulo ='".$titulo."' where codnoticia=".$idnoticia);
    }
    if ($result == 1) {
        echo "Noticia  atualizada com sucesso!";
        header('Location:area_admin.php');
    } else {
        echo "Noticia não pode ser atualizada!";
    }
  
}

if ($_GET['acao'] == "del") {

  $codigo = $_GET['id'];
   
  $result = mysqli_query($conn, "delete from noticias where codnoticia=".$codigo);

  if ($result == 1) {
      echo "Noticia excluído com sucesso!";
      header('Location:area_admin.php');
  } else {
      echo "Noticia não pode ser excluído!";
      
  }


}

echo $msg;

?>

</body>
</html>