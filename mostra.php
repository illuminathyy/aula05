<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Dados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container">
    <h2>Dados do Aluno</h2>
    <div class="card">
        <div class="card-body">
            <?php
            session_start();
            include "aluno.php";

            $retornado = unserialize($_SESSION['aluno']);
            echo "<h5 class='card-title'>Nome: " . ($retornado->nome) . "</h5>";
            echo "<p class='card-text'>Sexo: " . ($retornado->sexo) . "</p>";
            echo "<p class='card-text'>CPF: " . ($retornado->cpf) . "</p>";
            echo "<p class='card-text'>Data de nascimento: " . ($retornado->dataNascimento) . "</p>";
            ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
