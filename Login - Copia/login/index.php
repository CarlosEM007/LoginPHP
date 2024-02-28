<?php
//Using Conection to DB
require_once '../control/connect.php';

//Session on
session_start();

if(isset($_POST['btn_send'])){
    $erros = array();
    $logintry = mysqli_escape_string($connect, $_POST['inp_login']);
    $pswtry = mysqli_escape_string($connect, $_POST['inp_password']);

    if(!empty($login) || !empty($pswtry)){
        $sql = "SELECT * FROM usuarios where login = '$logintry'";
        $sqlr = mysqli_query($connect, $sql);

        if(mysqli_num_rows($sqlr) > 0){
                $senha = md5($pswtry);
                $sql = "SELECT * FROM usuarios WHERE login = '$logintry' AND senha = '$senha'";
                $sqlr = mysqli_query($connect, $sql);
                mysqli_close($connect);

                if(mysqli_num_rows($sqlr) == 1){
                    $dados = mysqli_fetch_array($sqlr);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    $_SESSION['nome_usuario'] = $dados['nome'];
                    header("location: ../perfil/home.php");

                } else {
                    $erros[] = "<script>alert('Senha incorreta!');</script>";
                }

        } else {
            $erros[] = "<script>alert('Usuário não existe!');</script>";
        }
    } else {
        $erros[] = "<script>alert('todos os campos devem ser preenchidos');</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="miltipart/form-data" class="login-form">
            <h2>Login</h2>
            <div class="input-container">
                <input name="inp_login" type="text" placeholder="Login">
            </div>
            <div class="input-container">
                <input name="inp_password" type="password" placeholder="Senha">
            </div>
            <button name = "btn_send" type="submit">Login</button>
        </form>
    </div>

    <?php
        foreach($erros as $erro){
            echo $erro;
        }
    ?>

    <footer>
        <p>&copy; 2024 Carlos.inc @. All rights reserved.</p>
    </footer>
</body>
</html>

