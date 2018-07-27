<?php
require_once('connect.php');
$id = $_GET['id'];
$SelSql = "SELECT * FROM `cadastroCliente` WHERE id=$id";
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);

if(isset($_POST) & !empty($_POST)){
	$nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $funcionario = $_POST['funcionario'];

    $UpdateSqlnomeServico = "
        UPDATE `cadastroServico`
        SET `nome` = '$nome' WHERE `nome` = (SELECT `nome` FROM `cadastroCliente` WHERE `id` = $id);
    ";
    mysqli_query($connection, $UpdateSqlnomeServico);
    
	$UpdateSql = "
        UPDATE `cadastroCliente`
        SET `nome` = '$nome', `telefone` = '$telefone', `endereco` = '$endereco', `funcionario` = '$funcionario' WHERE `id` = $id;
    ";

	$res = mysqli_query($connection, $UpdateSql);
	if($res){
		header('location: listar-clientes.php');
	}else{
		$fmsg = "Falha ao atualizar dados.";
        die("Conexão com o banco de dados falhou " . mysqli_error($connection));
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
        <title>Lê Santê - Atualizar Cliente: <?php echo $r['nome']; ?></title>
        <link rel="icon" href="">
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	</head>
	<body class="bg-light">
        <nav class="navbar navbar-dark bg-info">
            <div>
                <a href="index.php" class="btn btn-secondary btn-sm">Pagina Inicial</a>
                <a href="cadastrar-cliente.php" class="btn btn-danger btn-sm">Voltar</a>
            </div>
        </nav>
		<div class="container">
			<div class="row justify-content-center">
			<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
				<form method="post" name="cadastro" class="form-horizontal col-md-6">
					<div class="col">
                        <br><br><br>
                        <h2 class="text-info">Atualizar Cadastro</h2>
                    </div>
					<div class="form-group">
                        <div class="col">
                            <input type="text" name="nome" value="<?php echo $r['nome']; ?>" class="form-control" placeholder="Nome" required autofocus/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col">
                            <input type="text" id="telefone" name="telefone" value="<?php echo $r['telefone']; ?>" pattern=".{13,14}" maxlength="14" class="form-control" placeholder="Telefone" required/>
                        </div>
                    </div>

					<div class="form-group">
                        <div class="col">
                            <input type="text" name="endereco" value="<?php echo $r['endereco']; ?>" class="form-control" placeholder="Endereço" required/>
                        </div>
                    </div>

					<div class="form-group">
                        <div class="col">
                            <select name="funcionario" class="form-control">
                                <option value="<?php echo $r['funcionario']; ?>"><?php echo $r['funcionario']; ?></option>
                                <option value="Aldinei">Aldinei</option>
                                <option value="Fabiana">Fabiana</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col">
        					<input type="submit" class="btn btn-primary" value="Atualizar"/>
        					<a href="listar-clientes.php" class="btn btn-primary">Cancelar</a>
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