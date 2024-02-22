<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/public/Cadastro.css">
  <title>Tela Cadastro</title>
</head>

<body>
  <header>
    <img src="imagens/medtech(2).png" alt="">
    <figcaption>Tela de Cadastro</figcaption>
  </header>
  <form method="post" action="{{route('cadastrar-user')}}" class="row g-3 needs-validation" novalidate>
    @csrf
    <div class="col-md-8">
      <label for="validationCustom01" class="form-label">Digite seu nome</label>
      <input type="text" class="form-control" name='nome' id="validationCustom01" required>
    </div>

    <div class="col-md-5">
      <label for="validationCustomUsername" class="form-label">Digite uma Senha</label>
      <div class="input-group has-validation">
        <input type="email" class="form-control" name='senha' id="validationCustomUsername"
          aria-describedby="inputGroupPrepend" required>
      </div>

      <label for="validationCustomUsername" class="form-label">Digite seu email</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="email" class="form-control" name='email' id="validationCustomUsername"
          aria-describedby="inputGroupPrepend" required>
      </div>

      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
          <label class="form-check-label" for="invalidCheck"> Concordar com os termos e condições.</label>
          <div class="invalid-feedback"></div>
        </div>


        <div class="col-12">
          <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </form>
  <footer>
    <p>Copyringht 2020 Leticia <br>
      Slogan: Sua saúde inteligente.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>