<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Matrix Cadastro Belico</title>
    </head>

    <body>

        <h1>Cadastro Bélico</h1>


        <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top p-3">

            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand">Matrix Menu</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#quemsomos">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#integrantes">Integrantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#localizacao">Localização</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

<!-- requisições php -->

        <?php require 'formulario.php'; ?>

        <?php if($exibir_tabela) : ?>
            <?php require 'tabela.php' ?>
        <?php endif; ?>
        
        <canvas id="c"></canvas>
        <script src="script.js"></script>
        <script src="script.js"></script>
        <script src="script.js"></script>
    </body>
    
</html>