<?php
require_once('connect.php');
$id = $_GET['id'];
$SelSql = "SELECT * FROM `cadastroServico` WHERE id=$id";
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);

if(isset($_POST) & !empty($_POST)){
	$nome = $_POST['nome'];
    $servico = $_POST['servico'];
    $preco = $_POST['preco'];
    $funcionario = $_POST['funcionario'];

	$UpdateSql = "
        UPDATE `cadastroServico`
        SET nome='$nome', servico='$servico', preco='$preco', funcionario='$funcionario' WHERE id=$id
    ";

	$res = mysqli_query($connection, $UpdateSql);
	if($res){
		header('location: listar-servico.php');
	}else{
		$fmsg = "Failed to update data.";
	}
}

$ReadSql = "SELECT `id`, `nome` FROM `cadastroCliente`";
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
        <title>Lê Santê - Atualizar Serviço</title>
        <link rel="icon" href="">
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	</head>
	<body class="bg-light">
        <nav class="navbar navbar-dark bg-info">
            <div>
                <a href="index.php" class="btn btn-secondary btn-sm">Pagina Inicial</a>
                <a href="cadastrar-servico.php" class="btn btn-danger btn-sm">Voltar</a>
            </div>
        </nav>
		<div class="container">
			<div class="row justify-content-center">
			<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
				<form method="post" name="cadastro" class="form-horizontal col-md-6">
					<div class="col">
                        <br><br><br>
                        <h2 class="text-info">Atualizar Serviço</h2>
                    </div>
					<div class="form-group">
                        <div class="col">
                            <select name="nome" class="form-control">
                                <option value="<?php echo $r['nome']; ?>"><?php echo $r['nome']; ?></option>
                            <?php while($rCliente = mysqli_fetch_assoc($resCliente)){ ?>
                                <option value="<?php echo utf8_encode($rCliente['nome']) ?>"><?php echo utf8_encode($rCliente['nome']) ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col">
                            <input type="text" name="servico" value="<?php echo $r['servico']; ?>" class="form-control" placeholder="Serviço" required/>
                        </div>
                    </div>

					<div class="form-group">
                        <div class="col">
                            <input type="text" name="preco" value="<?php echo $r['preco']; ?>" class="form-control" placeholder="Preço" required/>
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
        					<a href="listar-servico.php" class="btn btn-primary">Cancelar</a>
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