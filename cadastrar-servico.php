<?php
session_start();
if (!$_SESSION['usuarioNome']) {
    header("Location: login.php");
}else{
    $usuario = $_SESSION['usuarioNome'];
}

require_once('connect.php');
if(isset($_POST) && !empty($_POST)){
    $nome = $_POST['nome'];
    $servico = $_POST['servico'];
    $preco = $_POST['preco'];
    
    $CreateSql = "INSERT INTO `cadastroServico` (nome, servico, preco, funcionario) VALUES ('$nome', '$servico', '$preco', '$usuario')";
	$resServico = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
	if($resServico){
		$smsg = "Dados inseridos com êxito";
	}else{
		$fmsg = "Dados não inseridos, por favor, tente novamente mais tarde.";
	}
}

$ReadSql = "SELECT `id`, `nome` FROM `cadastroCliente` ORDER BY `nome`";
$resCliente = mysqli_query($connection, $ReadSql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Tallys Henrike">
        <title>Lê Santê - Cadastro de Serviço</title>
        <link rel="icon" href="">
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-dark bg-info">
            <span class="navbar-brand mb-0 h1"><?php echo "Usuário: " . $usuario ?></span>
            <div>
                <a href="index.php" class="btn btn-secondary btn-sm">Pagina Inicial</a>
                <a href="index.php" class="btn btn-danger btn-sm">Voltar</a>
            </div>
        </nav>
        <?php if(isset($smsg)){ ?>
                <div class="alert alert-success" role="alert"><?php echo $smsg; ?></div>
            <?php } ?>

            <?php if(isset($fmsg)){ ?>
                <div class="alert alert-danger" role="alert"><?php echo $fmsg; ?></div>
            <?php } ?>
            <div style="display: none;" id="msg-erro" class="alert alert-danger" role="alert"></div>
        <div class="container">
            <div class="row justify-content-center">

                <form method="post" name="cadastro" class="form-horizontal col-md-6">
                    <div class="col">
                        <br><br><br>
                        <h2 class="text-info">Cadastro De Serviço</h2>
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <select name="nome" class="form-control">
                            <?php while($r = mysqli_fetch_assoc($resCliente)){ ?>
                                <option value="<?php echo utf8_encode($r['nome']) ?>"><?php echo utf8_encode($r['nome']) ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col">
                            <input type="text" name="servico"  class="form-control" placeholder="Serviço" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col">
                            <input type="text" name="preco"  class="form-control" placeholder="Preço" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col">
                            <input type="submit" class="btn btn-primary" value="Cadastrar"/>
                            <a href="listar-servico.php" class="btn btn-primary">Listar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>