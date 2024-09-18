<?php
include 'aluno.php';

$aluno = new Aluno($_GET['nome'], $_GET['sexo'], $_GET['dataNascimento'], $_GET['cpf']);
session_start();
$_SESSION['aluno'] = serialize($aluno);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe Aluno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container">
    <h2>Dados Salvos</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataModal">
        Mostrar Dados
    </button>

    <!-- Modal -->
    <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dados do Aluno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $retornado = unserialize($_SESSION['aluno']);
                    echo "Nome: " . ($retornado->nome) . "<br>";
                    echo "Sexo: " . ($retornado->sexo) . "<br>";
                    echo "CPF: " . ($retornado->cpf) . "<br>";
                    echo "Data de nascimento: " . ($retornado->dataNascimento) . "<br>";
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
