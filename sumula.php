<?php include_once('auth.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Pista Treino IDSC - DSO</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
<div class="container">
<div style="padding:15px;">
<form action="sumula_adm.php" method="post" class="form-inline" autocomplete="off">
    <div class="row form-row">

<fieldset>
        <legend>Súmula <i class="bi bi-file-earmark-text"></i></legend>
         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  olá, <?php echo strtoupper($_SESSION["login"]);?> <a href="/painel.php" class="btn btn-warning" ><i class="bi bi-window"></i> Menu</a>
</div><br>
<div class="col">
    <label>Divisão:</label>
    <select name="divisao" class="form-select">
    <?php
include_once('system/config.php');
$consulta   = $banco->query("SELECT * FROM `" . DB_PREFIX . "divisao`  WHERE 1 ORDER BY `divisao_id` ASC");
 if($consulta->num_rows) { 
 foreach($consulta->rows as $result) { 
?>
    <option value="<?php echo $result['divisao_id']; ?>"><?php echo $result['nome']; ?></option>
    <?php } } ?>
    </select> 
</div>
        <input type="hidden" name="competicao_id"  value="<?php echo $_SESSION["user_id"];  ?>" />
<div class="col">
    <label>Passagem:</label>
    <select name="pista" class="form-select">
    <option value="1">Pista 01</option>
    <option value="2">Pista 02</option>
    <option value="3">Pista 03</option>
    <option value="4">Pista 04</option>
    <option value="5">Pista 05</option>
    <option value="6">Pista 06</option>
    <option value="7">Pista 07</option>
    <option value="8">Pista 08</option>
    <option value="9">Pista 09</option>
    <option value="10">Pista 10</option>
    </select> 
</div>
<div class="col">
        <label>Nome: </label>
        
   <select name="nome" class="form-select">
    </select> 
</div>

<div class="col">
        <label>Tempo Time: </label><input name="timer" type="tel" class="form-control" required>
</div>

<div class="col">
        <label>FS: </label><input name="fs" type="tel" value="0" class="form-control">
</div>

<div class="col">
<label class="form-check-label" for="dq">DQ:</label>
  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" name="dq" id="dq">
</div>
</div>

<br>

<div class="accordion" id="alvos">
    
  <div class="accordion-item">
    <h2 class="accordion-header" id="One">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Alvo T1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="One" data-bs-parent="#alvos">
      <div class="accordion-body">
        
  <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t1_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t1_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t1_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t1_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  

  <div class="accordion-item">
    <h2 class="accordion-header" id="Two">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Alvo T2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="Two" data-bs-parent="#alvos">
      <div class="accordion-body">
        
  <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t2_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t2_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t2_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t2_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div>  
        
      </div>
    </div>
  </div>
  
   <div class="accordion-item">
    <h2 class="accordion-header" id="Tree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
        Alvo T3
      </button>
    </h2>
    <div id="collapseTree" class="accordion-collapse collapse" aria-labelledby="Tree" data-bs-parent="#alvos">
      <div class="accordion-body">
        
  <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t3_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t3_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t3_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t3_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
   <div class="accordion-item">
    <h2 class="accordion-header" id="Four">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Alvo T4
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="Four" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t4_0" type="tel" value="0" class="form-control"> 2:  5:  M:
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t4_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t4_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t4_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
   <div class="accordion-item">
    <h2 class="accordion-header" id="Five">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Alvo T5
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="Five" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t5_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t5_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t5_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t5_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
     <div class="accordion-item">
    <h2 class="accordion-header" id="Six">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Alvo T6
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="Six" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t6_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t6_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t6_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t6_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
     <div class="accordion-item">
    <h2 class="accordion-header" id="Seven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Alvo T7
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="Seven" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t7_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t7_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t7_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t7_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
     <div class="accordion-item">
    <h2 class="accordion-header" id="Eight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Alvo T8
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="Eight" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t8_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t8_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t8_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t8_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="Ninea">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNinea" aria-expanded="false" aria-controls="collapseNinea">
        Alvo T9
      </button>
    </h2>
    <div id="collapseNinea" class="accordion-collapse collapse" aria-labelledby="Ninea" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t9_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t9_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t9_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t9_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
     <div class="accordion-item">
    <h2 class="accordion-header" id="Nine">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
        Alvo T10
      </button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="Nine" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t10_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t10_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t10_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t10_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
     <div class="accordion-item">
    <h2 class="accordion-header" id="Then">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThen" aria-expanded="false" aria-controls="collapseThen">
        Alvo T11
      </button>
    </h2>
    <div id="collapseThen" class="accordion-collapse collapse" aria-labelledby="Then" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="t11_0" type="tel" value="0" class="form-control"> 
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2</span>
  <input name="t11_2" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">5</span>
  <input name="t11_5" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="t11_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
     <div class="accordion-item">
    <h2 class="accordion-header" id="Eleven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
        Alvo M1
      </button>
    </h2>
    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="Eleven" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="m1_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="m1_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
     <div class="accordion-item">
    <h2 class="accordion-header" id="Twelve">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
        Alvo M2
      </button>
    </h2>
    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="Twelve" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="m2_0" type="tel" value="0" class="form-control"> 
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="m2_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
     <div class="accordion-item">
    <h2 class="accordion-header" id="Thirteen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
        Alvo M3
      </button>
    </h2>
    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="Thirteen" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="m3_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="m3_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
       <div class="accordion-item">
    <h2 class="accordion-header" id="Fourteen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
        Alvo M4
      </button>
    </h2>
    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="Fourteen" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="m4_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="m4_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
         <div class="accordion-item">
    <h2 class="accordion-header" id="Sixteen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
        Alvo M5
      </button>
    </h2>
    <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="Sixteen" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="m5_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="m5_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
         <div class="accordion-item">
    <h2 class="accordion-header" id="Seventeen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
        Alvo M6
      </button>
    </h2>
    <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="Seventeen" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">0</span>
  <input name="m6_0" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">M</span>
  <input name="m6_m" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>
  
  
       <div class="accordion-item">
    <h2 class="accordion-header" id="Fifteen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
        Penalidades
      </button>
    </h2>
    <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="Fifteen" data-bs-parent="#alvos">
      <div class="accordion-body">
        
   <div class="row g-3">
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">NS</span>
  <input name="ns" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">EP</span>
  <input name="ep" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">AE</span>
  <input name="ae" type="tel" value="0" class="form-control">
  </div>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">UC</span>
  <input name="uc" type="tel" value="0" class="form-control">
  </div>
  </div>
</div> 
        
      </div>
    </div>
  </div>

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

<script type="text/javascript"><!--
$('select[name=\'divisao\']').on('change', function() {

	$.ajax({
		url: '/getdivisao.php?divisao_id=' + this.value,
		dataType: 'json',
		beforeSend: function() {
			$('select[name=\'divisao\']').after(' <i class="bi bi-arrow-repeat"></i>');
		},
		complete: function() {
			$('.bi-arrow-repeat').remove();
		},
		success: function(json) {
			html = '';

        if (json['zone'] && json['zone'] != '') {
				for (i = 0; i < json['zone'].length; i++) {
					html += '<option value="' + json['zone'][i]['id'] + '"';

					if (json['zone'][i]['division_id'] == '1') {
						html += ' selected="selected"';
					}

					html += '>' + json['zone'][i]['nome'] + '</option>';
				}
			} else {
				html += '<option value="0" selected="selected">Nenhum</option>';
			}

			$('select[name=\'nome\']').html(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('select[name=\'divisao\']').trigger('change');

$('#dq').on('change', function() {
   // alert($(this).is(':checked'));
});
//--></script>   

</body>
</html>