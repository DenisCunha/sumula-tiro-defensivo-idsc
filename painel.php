<?php include_once('auth.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Pista Competição IDSC - Painel Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
<div class="container">
<div style="padding:15px;">
<form action="/return_login.php" method="post" class="form-inline" autocomplete="off">
<div class="row form-row">

<fieldset>
<legend>Menu </legend>
        
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
olá, <?php echo strtoupper($_SESSION["login"]);?> <a href="/sair.php" class="btn btn-danger" >Sair</a> 
<a href="/reset.php?master=25&competicao_id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-warning"><i class="bi bi-trash"></i></a>
</div>

<br>

        
<div class="col">
<a href="/divisao.php" class="col-3">
<figure class="figure">
<img src="asset/img/divisao.png" class="figure-img img-fluid rounded" alt="...">
<figcaption class="figure-caption">Cadastrar Divisão</figcaption>
</figure>
</a>

<a href="/atleta.php" class="col-3">
<figure class="figure">
<img src="asset/img/atirador.png" class="figure-img img-fluid rounded" alt="...">
<figcaption class="figure-caption">Cadastrar Atleta</figcaption>
</figure>
</a>

<a href="/dso.php" class="col-3">
<figure class="figure">
<img src="asset/img/dso.png" class="figure-img img-fluid rounded" alt="...">
<figcaption class="figure-caption">Súmula Online</figcaption>
</figure>
</a>

<a href="/" class="col-3">
<figure class="figure">
<img src="asset/img/resultado.png" class="figure-img img-fluid rounded" alt="...">
<figcaption class="figure-caption">Ver Resultado</figcaption>
</figure>
</a>

</div>
<br>

</div>
</fieldset>

</form>
</div>
</div>
</body>
</html>