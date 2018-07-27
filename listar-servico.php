<?php
session_start();

$funcionario = $_SESSION['usuarioNome'];
if (!$_SESSION['usuarioNome']) {
    header("Location: login.php");
}

require_once('connect.php');
$perpage = 6;
if(isset($_GET['page']) & !empty($_GET['page'])){
	$curpage = $_GET['page'];
}else{
	$curpage = 1;
}

$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT * FROM `cadastroServico`";
$pageres = mysqli_query($connection, $PageSql);
$totalres = mysqli_num_rows($pageres);

$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;

if(isset($_GET['todos'])){
    header("listar-clientes.php");
}
$a = isset($_GET['a'])?$_GET['a']:"";
if ($a == "buscar") {
    $busca = isset($_POST['busca']) ? trim($_POST['busca']) : "";
    $ReadSql = "SELECT * FROM `cadastroServico` WHERE `nome` LIKE '%$busca%' AND `funcionario` LIKE '%$funcionario%' ORDER BY id DESC LIMIT $start, $perpage ";
}else{
    $ReadSql = "SELECT * FROM `cadastroServico` WHERE `funcionario` LIKE '%$funcionario%' ORDER BY id DESC LIMIT $start, $perpage ";
}
$res = mysqli_query($connection, $ReadSql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Tallys Henrike">
        <title>Lê Santê - Tabela de Serviço</title>
        <link rel="icon" href="">
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-info">
            <div>
                <a href="index.php" class="btn btn-secondary btn-sm">Pagina Inicial</a>
                <a href="cadastrar-servico.php" class="btn btn-danger btn-sm">Voltar</a>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" method="post" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="busca" type="search" placeholder="Busca" aria-label="Busca">
                <input type="submit" class="btn btn-dark my-2 my-sm-0" value="Buscar">
                <div class="col">
                    <input type="submit" name="todos" class="btn btn-success my-2 my-sm-0" value="Ver Todos"/>
                </div>
            </form>
        </nav>
        <div class="table-responsive">
            <table id="tabela" class="table table-striped table-bordered table-dark">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Serviço</th>
                        <th>Preço</th>
                        <th>Funcionario</th>
                        <th>Data De Cadastro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($r = mysqli_fetch_assoc($res)){
                    ?>
                    <tr>
                        <td><?php echo utf8_encode($r['nome']); ?></td>
                        <td><?php echo utf8_encode($r['servico']); ?></td>
                        <td><?php echo utf8_encode($r['preco']); ?></td>
                        <td><?php echo utf8_encode($r['funcionario']); ?></td>
                        <td><?php echo date("d-m-Y H:i:s", strtotime($r['data_cadastro'])); ?></td>
                        <td>
                            <a href="update-servico.php?id=<?php echo $r['id']; ?>" class="btn btn-info btn-sm">Editar</a>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>">Apagar</button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal<?php echo $r['id']; ?>" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="text-danger modal-title">Apagar Cadastro</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-secondary">Tem certeza que deseja apagar <?php echo utf8_encode($r['nome']); ?>?</p>
                                            <p class="text-secondary">Fez <?php echo utf8_encode($r['servico']); ?> <?php echo strftime('%A, %d de %B de %Y', strtotime(utf8_encode($r['data_cadastro'])));  ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <a href="delete-servico.php?id=<?php echo $r['id']; ?>" class="btn btn-danger">Apagar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php if($curpage != $startpage){ ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">First</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if($curpage >= 2){ ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
                <?php } ?>

                <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>

                <?php if($curpage != $endpage){ ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Last</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>