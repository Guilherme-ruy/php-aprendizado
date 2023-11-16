<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ações
            </a>
            <ul class="dropdown-menu">
              <!--BTN NOVO-->
              <li><a class="dropdown-item" href="?page=novo">Novo</a></li>

              <!--BTN LISTAR-->
              <li><a class="dropdown-item" href="?page=listar">Listar</a></li>
              <li>
                <!--BTN CANCELAR SELEÇÃO-->
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Cancelar</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Em andamento</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php

        include('config/conexao.php');

        switch (@$_REQUEST["page"]) {
          //CASE NOVO
          case "novo":
            include("view/novo.php");
            break;

          //CASE LISTAR
          case "listar":
            include("view/listar.php");
            break;

          //CASE SALVAR
          case "salvar":
            include("controller/salvar.php");
          default:
            print "<h1>Bem-vindo</h1>";
        }
        ?>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>