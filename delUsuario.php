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

include "conexao.php";

$id = $_GET['id'];

$codigo = "";
$nome = "";
$usuario = "";

$result = mysqli_query($conn, "select * from usuarios where codusuario = ". $id);

$numRegistros = mysqli_num_rows($result);

for ($i=0; $i < $numRegistros; $i++) {
    $registro = mysqli_fetch_assoc($result);
    $codigo = $registro['codusuario'];
    $nome = $registro['nome'];
    $usuario = $registro['usuario'];
}

?>

<h1>Exclusão de Usuários</h1>
<br>
<a href="usuarios.php">voltar</a>

<br><br>

<form name="formCadastro" method="POST" action="addUsuario.php?action=edit">
<center>
<p>
    
    Você realmente deseja excluir o usuário [<?php echo $nome ?>]

</p>

<p>
    <a href="usuarios.php">Não</a> | <a href="addUsuario.php?action=del&id=<?php echo $codigo ?>">Sim</a>
</p>
</center>

</form>


</body>
</html>