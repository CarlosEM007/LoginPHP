<?php
//Using Conection to DB
require_once '../control/connect.php';

//Session on
session_start();

//Checks if the user is logged in to the server
if(!isset($_SESSION['logado'])){
    header("location: ../login/index.php");
}

//Data from user
$id = $_SESSION['id_usuario'];
$slc = "SELECT * FROM usuarios WHERE id = '$id';";
$data = mysqli_query($connect, $slc);
$result = mysqli_fetch_array($data);
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perfil do Usuário</title>
<link href= "style.css" rel= "stylesheet">

</head>
<body>
<div class="container">
  <div class="profile">
    <h1>Perfil do Usuário</h1>
    <p><strong>Nome:</strong> <?php echo $result['nome'];?></p>
    <p><strong>Email:</strong> <?php echo $result['email'];?></p>
    <p><strong>Telefone:</strong> <?php echo $result['login'];?></p>
    <a href="../control/logout.php" class="button">Sair</a>
  </div>
</div>
</body>
</html>
