<?php
session_start();
if (!$_SESSION['usuarioNome']) {
    header("Location: login.php");
}else{
    $usuario = $_SESSION['usuarioNome'];
}

require_once ('connect.php');
if(isset($_POST) && !empty($_POST)){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $selectNome = "SELECT `nome` FROM `cadastroCliente` WHERE `nome` = '$nome'";
    $selectNomeQuery = mysqli_query($connection, $selectNome);
    $total = mysqli_num_rows($selectNomeQuery);

	$CreateSql = "INSERT INTO `cadastroCliente` (nome, telefone, endereco, funcionario) VALUES ('$nome', '$telefone', '$endereco', '$usuario')";
	$res = false;
    if ($total == 0) {
        $res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
    }
    
	if($res){
		$smsg = "Dados inseridos com êxito";
	}else{
		$fmsg = "Dados não inseridos, por favor, tente novamente mais tarde.";
	}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Tallys Henrike">
        <title>Lê Santê - Cadastro de Cliente</title>
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
                        <h2 class="text-info">Cadastro De Clientes</h2>
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <input type="text" name="nome"  class="form-control" placeholder="Nome" required autofocus/>
                        </div>
                    </div>
         
                    <div class="form-group">
                        <div class="col">
                            <input type="text" id="telefone" class="form-control" pattern=".{13,14}" maxlength="14" name="telefone" placeholder="Telefone"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col">
                            <input type="text" name="endereco"  class="form-control" placeholder="Endereço"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <input type="submit" class="btn btn-primary" value="Cadastrar"/>
                            <a href="listar-clientes.php" class="btn btn-primary">Listar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="validacao.js" type="text/javascript"></script>
    </body>
</html>
<?php
/*
<div class="form-group">
    <div class="col">
        <select name="servico" class="form-control">
            <option>Selecionar Serviço</option>
            <option value="Corte Feminino">Corte Feminino</option>
            <option value="Escova">Escova</option>
            <option value="Escova com chapinha">Escova com chapinha</option>
            <option value="Selagem">Selagem</option>
            <option value="Corte masculino">Corte masculino</option>
            <option value="Progressiva">Progressiva</option>
            <option value="Tintura">Tintura</option>
            <option value="Coloração do salão">Coloração do salão</option>
            <option value="Chapinha cabelo médio">Chapinha cabelo médio</option>
            <option value="Chapinha cabelo grande">Chapinha cabelo grande</option>
            <option value="Barba">Barba</option>
            <option value="Sobrancelha com Hena">Sobrancelha com Hena</option>
            <option value="Sobrancelha normal">Sobrancelha normal</option>
            <option value="Reconstrução">Reconstrução</option>
            <option value="Cristalização">Cristalização</option>
            <option value="Relachamento masculino">Relachamento masculino</option>
            <option value="Relachamento Feminino">Relachamento Feminino</option>
            <option value="Maquiagem s/ cilios">Maquiagem s/ cilios</option>
            <option value="Maquiagem c/ cilios">Maquiagem c/ cilios</option>
            <option value="Penteado montagem">Penteado montagem</option>
            <option value="Penteado c/ lavagem + Escova">Penteado c/ lavagem + Escova</option>
            <option value="Pé e Mão">Pé e Mão</option>
            <option value="Limpesa de pele">Limpesa de pele</option>
        </select>
    </div>
</div>
*/
?>