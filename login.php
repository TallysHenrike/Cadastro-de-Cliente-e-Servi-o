<?php
session_start();
$usuario = isset($_SESSION['loginUsuario']) ? $_SESSION['loginUsuario'] : '';

if (isset($_SESSION['usuarioNome'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Tallys Henrike">
        <title>Lê Santê - Login</title>
        <link rel="icon" href="">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body id="signin">
        <div class="container">
            <form class="form-signin" method="POST" action="valida.php">
                <h2 class="form-signin-heading">Área Restrita</h2>
                <label for="inputUsuario" class="sr-only">Email</label>
                <input type="text" name="loginUsuario" value="<?php $usuario ?>" id="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
            </form>
            <p class="text-center text-danger">
                <?php
                    if(isset($_SESSION['loginErro'])){
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                    }
                ?>
            </p>
            <p class="text-center text-success">
                <?php 
                    if(isset($_SESSION['logindeslogado'])){
                        echo $_SESSION['logindeslogado'];
                        unset($_SESSION['logindeslogado']);
                    }
                ?>
            </p>
        </div> <!-- /container -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>