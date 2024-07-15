<?php include_once('auth.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Pista Competição IDSC - Gerenciar Competição</title>
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
<form action="/competicao_adm.php" method="post" class="form-inline" autocomplete="off" enctype="multipart/form-data">
<div class="row form-row">

<fieldset>
<legend>Registro de Competição</legend>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
olá, <?php echo strtoupper($_SESSION["login"]);?> <a href="/painel.php" class="btn btn-warning" ><i class="bi bi-window"></i> Menu</a>
</div>

<br>
<?php if(isset($_GET['msg']) && $_GET['msg'] == 1) { ?>
<div class="alert alert-danger" role="alert">Competição Já Cadastrada!</div>
<?php } ?>
<?php if(isset($_GET['msg']) && $_GET['msg'] == 2) { ?>
<div class="alert alert-success" role="alert">Cadastrado Realizado com Sucesso!</div>
<?php } ?>
<?php if(isset($_GET['msg']) && $_GET['msg'] == 4) { ?>
<div class="alert alert-success" role="alert">Cadastrado Alterado com Sucesso!</div>
<?php } ?>
<div class="col">
<label>Nome da Competição: </label><input type="text" name="nome"  class="form-control" required>
</div>
<div class="col">
<label>Data da Competição: </label><input name="datac" type="text" class="form-control" required>
<input type="hidden" name="dso" class="form-control" value="<?php echo $_SESSION["user_id"]; ?>">
</div>
<div class="col">
  <label for="image">Imagem: Dimensão 400x200 pixel</label>
  <input type="file" name="imagem" id="imagem" class="form-control" required>
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
<?php if(isset($_GET['msg']) && $_GET['msg'] == 3) { ?>
<div class="alert alert-danger" role="alert">Competição Excluida com Sucesso!</div>
<?php } ?>
<?php  include_once('system/config.php');
$consulta  = $banco->query("SELECT * FROM `" . DB_PREFIX . "competicao` WHERE 1");
?>
<table class="table">
  <thead>
<?php if($consulta->num_rows) { ?>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Competição</th>
      <th scope="col">Data Competição</th>
      <th scope="col">Ação</th>
    </tr>
<?php } ?>
  </thead>
  <tbody>
<form method="post" action="" id="form-order">
<?php if($consulta->num_rows) { ?>
<?php foreach($consulta->rows as $result) { ?>
    <tr>
      <th scope="row"><?php echo $result['evento_id']; ?></th>
      <td><?php echo $result['nomeevento']; ?></td>
      <td><?php echo $result['dataevento']; ?></td>
      <td><button type="button" id="remove<?php echo $result['evento_id']; ?>" class="btn btn-danger" formaction="/remove.php?evento_id=<?php echo $result['evento_id']; ?>" title="Remover Competição" ><i class="bi bi-trash"></i></button>
      <button type="button" id="edit<?php echo $result['evento_id']; ?>" class="btn btn-info" formaction="/edit.php?evento_id=<?php echo $result['evento_id']; ?>"><i class="bi bi-pencil"></i></button></td>
    </tr>
    <?php } ?>
    <?php } else { ?>
    <tr>Sem Registro.</tr>
    <?php } ?>
  </tbody>
  </form>
</table>
</div>
<script type="text/javascript">
<?php foreach($consulta->rows as $result) { ?>
  $('#remove<?php echo $result['evento_id']; ?>').on('click', function(e) {
	$('#form-order').attr('action', this.getAttribute('formAction'));
	
	if (confirm('Deseja Excluir o Cadastro?')) {
		$('#form-order').submit();
	} else {
		return false;
	}
});
$('#edit<?php echo $result['evento_id']; ?>').on('click', function(e) {
	$('#form-order').attr('action', this.getAttribute('formAction'));
	
	if (confirm('Deseja Editar o Cadastro?')) {
		$('#form-order').submit();
	} else {
		return false;
	}
});  
<?php } ?>
setTimeout(() => {
  $('.alert-danger').remove();
  $('.alert-success').remove();
}, "3000"); 
</script>
</body>
</html>