<html>
    <head>
        <title>PHP - Area Adm</title>
    </head>
<body>

<?php

session_start();
if((!isset($_SESSION['usuario'])==true)) {
    unset($_SESSION['usuario']);
    header('Location:index.php');
} 

?>
<?php
include "conexao.php";


if ($_GET['action'] == "edit") {

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $usuario = $_POST['usuario'];

    $result = mysqli_query($conn, "update usuarios set nome='".$nome."', email='".$email."', telefone='".$telefone."' where codusuario=".$codigo);

    if ($result == 1) {
        echo "Usuário atualizado com sucesso!";
    } else {
        echo "Usuário não pode ser atualizado!";
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



?>

</body>
</html>