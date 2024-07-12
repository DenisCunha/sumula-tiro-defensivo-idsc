<?php include_once('auth.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Pista Treino IDSC - DSO - Cadastro de Divisão</title>
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
<form action="/divisao_adm.php" method="post" class="form-inline" autocomplete="off">

<div class="row form-row">

<fieldset>
<legend>Registro de Divisao</legend>
<?php if(isset($_GET['msg']) && $_GET['msg'] == 1) { ?>
<div class="alert alert-danger" role="alert">Divisão Já Cadastrada!</div>
<?php } ?>
<?php if(isset($_GET['msg']) && $_GET['msg'] == 2) { ?>
<div class="alert alert-success" role="alert">Cadastrado Realizado com Sucesso!</div>
<?php } ?>

<div class="col">
<label>Nome da Divisao: </label><input name="nome" type="text" class="form-control" required>
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
<div class="alert alert-danger" role="alert">Divisão Excluida Com Sucesso!</div>
<?php } ?>
<?php  include_once('system/config.php');
$consulta  = $banco->query("SELECT * FROM `" . DB_PREFIX . "divisao` WHERE 1");
?>
<table class="table">
  <thead>
<?php if($consulta->num_rows) { ?>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Divisão</th>
      <th scope="col">Ação</th>
    </tr>
<?php } ?>
  </thead>
  <tbody>
<form method="post" action="" id="form-order">
<?php if($consulta->num_rows) { ?>
<?php foreach($consulta->rows as $result) { ?>
    <tr>
      <th scope="row"><?php echo $result['divisao_id']; ?></th>
      <td><?php echo $result['nome']; ?></td>
      <td><button type="button" id="remove<?php echo $result['divisao_id']; ?>" class="btn btn-danger" formaction="/remove.php?divisao_id=<?php echo $result['divisao_id']; ?>" title="Remover Competição" ><i class="bi bi-trash"></i></button>
      <button type="button" id="edit" class="btn btn-info"><i class="bi bi-pencil"></i></button></td>
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
  $('#remove<?php echo $result['divisao_id']; ?>').on('click', function(e) {
	$('#form-order').attr('action', this.getAttribute('formAction'));
	
	if (confirm('Deseja Excluir o Cadastro?')) {
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