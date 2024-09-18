<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container">
    <h2>Cadastro de Aluno</h2>
    <form action="recebe.php" method="GET">
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="sexo" class="col-sm-2 col-form-label">Sexo:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="sexo" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="cpf" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="dataNascimento" class="col-sm-2 col-form-label">Data de Nascimento:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="dataNascimento" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
