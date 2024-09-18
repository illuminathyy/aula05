<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Menu</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'formulario.php' ? 'active' : '' ?>">
                    <a class="nav-link" href="formulario.php">Cadastrar</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'mostra.php' ? 'active' : '' ?>">
                    <a class="nav-link" href="mostra.php">Mostrar</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'mostra_idade.php' ? 'active' : '' ?>">
                    <a class="nav-link" href="mostra_idade.php">Idade</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'sair.php' ? 'active' : '' ?>">
                    <a class="nav-link" href="sair.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
</body>
</html>
