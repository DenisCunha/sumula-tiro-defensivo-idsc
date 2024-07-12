<?php
$html ='
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Edição de Cadastro</title>
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
<form action="./edit.php" method="post" class="form-inline" autocomplete="off">
<div class="row form-row">

<fieldset>
<legend>Edição de Cadastro</legend>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
olá, '. strtoupper($_SESSION["login"]) .' <a href="/painel.php" class="btn btn-warning" ><i class="bi bi-window"></i> Menu</a>
</div>

<br>

      
<div class="col">
<label>Nome: </label><input name="nome" type="text" class="form-control" value="'. $_SESSION["camponome"] . '" required>
<input name="id" type="hidden" value="'. $_SESSION["id"] . '">
<input name="tipo" type="hidden" value="'. $_SESSION["tipo"] . '"> 
</div>

<br>

<div class="d-grid gap-2">
<input class="btn btn-primary btn-lg" type="submit" value="Enviar">
</div>
<br><br>
</div>
</fieldset>

</form>
</div>

</div>

</body>
</html>';

echo $html;
?>