<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Etec ZL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


  </style>
</head>

<body class="bg-body-secondary">

  <div class="container text-center">
    <div class="row">
      <div class="col-1 ">
        &nbsp;
      </div>
      <div class=" col-xxl-150 bg-white" id="div-principal">
        <nav class="navbar navbar-expand-lg  bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="/img/logo-etec.png.webp" alt="Logo" width="60" height="48" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cursos">Cursos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="departamentos">Departamentos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="oportunidades">Oportunidades</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="vestibulinho">Vestibulinho</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="instituicao">Instituição</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contato">Contato</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        
        <br><br><br><br>
        <div class="card text-bg-dark">
                    <img src="/img/foto-inst.jpg" class="card-img" alt="..." width="1000" height="500">
                    <div class="card-img-overlay">
                        <h1 class="card-title">Conheça nossa instituição</h1>
                        <p class="card-text">onheça Nossa Instituição: Tradição, Inovação e Compromisso com a Excelência Educacional</p>
                        <p class="card-text"><small></small></p>
                    </div>
                </div>
        <div class="container mt-4">
    @yield('content')
</div>
</body>
</html>