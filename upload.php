<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
<form action=""
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     </form>
</body>
<?php 
session_start();
if((!isset($_SESSION['usuario'])==true)) {
    unset($_SESSION['usuario']);
    header('Location:index.php');
} 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
  
  include "conexao.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";
  $id = $_GET['id'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Arquivo muito grande.";
		  echo $em;
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$extensoes= array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $extensoes)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'imagens/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "update usuarios set arquivo = '".$new_img_name."' where codUsuario=" . $id;
				
        $result = mysqli_query($conn, $sql);
        if ($result == 1) {
            echo "Foto inserida";
        } else {
            echo "Foto não pode ser inserida!";
        }
				header("Location: usuarios.php");
			}else {
				$em = "Você não pode fazer upload desse tipo de arquivo.";
		    echo $em ;
			}
		}
	}else {
		$em = "Erro inesperado";
		echo $em;
	}

}
?>
</html>


