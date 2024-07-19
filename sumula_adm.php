<?php
include_once('system/config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

/*
$t1_0 = $_POST['t1_0'];
$t1_2 = $_POST['t1_2'] * 2;
$t1_5 = $_POST['t1_5'] * 5;
$t1_m = $_POST['t1_m'] * 10;

$t1 = $t1_2 + $t1_5 + $t1_m;

$t2_0 = $_POST['t2_0'];
$t2_2 = $_POST['t2_2'] * 2;
$t2_5 = $_POST['t2_5'] * 5;
$t2_m = $_POST['t2_m'] * 10;

$t2 = $t2_2 + $t2_5 + $t2_m;

$t3_0 = $_POST['t3_0'];
$t3_2 = $_POST['t3_2'] * 2;
$t3_5 = $_POST['t3_5'] * 5;
$t3_m = $_POST['t3_m'] * 10;

$t3 = $t3_2 + $t3_5 + $t3_m;

$t4_0 = $_POST['t4_0'];
$t4_2 = $_POST['t4_2'] * 2;
$t4_5 = $_POST['t4_5'] * 5;
$t4_m = $_POST['t4_m'] * 10;

$t4 = $t4_0 + $t4_2 + $t4_5 + $t4_m;

$t5_0 = $_POST['t5_0'];
$t5_2 = $_POST['t5_2'] * 2;
$t5_5 = $_POST['t5_5'] * 5;
$t5_m = $_POST['t5_m'] * 10;

$t5 = $t5_0 + $t5_2 + $t5_5 + $t5_m;

$t6_0 = $_POST['t6_0'];
$t6_2 = $_POST['t6_2'] * 2;
$t6_5 = $_POST['t6_5'] * 5;
$t6_m = $_POST['t6_m'] * 10;

$t6 = $t6_0 + $t6_2 + $t6_5 + $t6_m;

$t7_0 = $_POST['t7_0'];
$t7_2 = $_POST['t7_2'] * 2;
$t7_5 = $_POST['t7_5'] * 5;
$t7_m = $_POST['t7_m'] * 10;

$t7 = $t7_0 + $t7_2 + $t7_5 + $t7_m;


$t8_0 = $_POST['t8_0'];
$t8_2 = $_POST['t8_2'] * 2;
$t8_5 = $_POST['t8_5'] * 5;
$t8_m = $_POST['t8_m'] * 10;

$t8 = $t8_0 + $t8_2 + $t8_5 + $t8_m;

$t9_0 = $_POST['t9_0'];
$t9_2 = $_POST['t9_2'] * 2;
$t9_5 = $_POST['t9_5'] * 5;
$t9_m = $_POST['t9_m'] * 10;

$t9 = $t9_0 + $t9_2 + $t9_5 + $t9_m;

$t10_0 = $_POST['t10_0'];
$t10_2 = $_POST['t10_2'] * 2;
$t10_5 = $_POST['t10_5'] * 5;
$t10_m = $_POST['t10_m'] * 10;

$t10 = $t10_0 + $t10_2 + $t10_5 + $t10_m;

$t11_0 = $_POST['t11_0'];
$t11_2 = $_POST['t11_2'] * 2;
$t11_5 = $_POST['t11_5'] * 5;
$t11_m = $_POST['t11_m'] * 10;

$t11 = $t11_0 + $t11_2 + $t11_5 + $t11_m;

$m1_0 = $_POST['m1_0'];
$m1_m = $_POST['m1_m'] * 10;

$m1 = $m1_0 + $m1_m;

$m2_0 = $_POST['m2_0'];
$m2_m = $_POST['m2_m'] * 10;

$m2 = $m2_m;

$m3_0 = $_POST['m3_0'];
$m3_m = $_POST['m3_m'] * 10;

$m3 = $m3_m;

$m4_0 = $_POST['m4_0'];
$m4_m = $_POST['m4_m'] * 10;

$m4 = $m4_m;

$m5_0 = $_POST['m5_0'];
$m5_m = $_POST['m5_m'] * 10;

$m5 = $m5_m;

$m6_0 = $_POST['m6_0'];
$m6_m = $_POST['m6_m'] * 10;

$m6 = $m6_m;

$ep = $_POST['ep'] * 4;

$ae = $_POST['ae'] * 12;

$uc = $_POST['uc'] * 25;

$ns = $_POST['ns'] * 10;

$fs = $_POST['fs'];

$timer = $_POST['timer'];

if (isset($_POST['dq'])) {
$dq = 1;
} else {
$dq = 0; 
}

$nome = $_POST['nome'];

$divisao = $_POST['divisao'];

$competicao_id = $_POST['competicao_id'];

if($dq > 0) {
$total =  999.99;
} else {
$total = $t1 + $t2 + $t3 + $t4 + $t5 + $t6 + $t7 + $t8 + $t9 + $t10 + $t11 + $m1 + $m2 + $m3 + $m4 + $m5 + $m6 + $ep + $ae + $uc + $ns +  $fs + $timer;
}

if($_POST['pista'] == 1){
$banco->query("INSERT INTO `" . DB_PREFIX . "resultados` SET `nome` = '" . $nome . "', `divisao` = '" . $divisao . "',  `competicao_id` = '" . $competicao_id . "', `fs` = '" . (float)$fs . "', `timer` = '" . (float)$timer . "', `ep` = '" . (int)$ep . "', `ae` = '" . (int)$ae . "', `uc` = '" . (int)$uc . "', `ns` = '" . (int)$ns . "',  `t1` = '" . (int)$t1 . "', `t2` = '" . (int)$t2 . "',`t3` = '" . (int)$t3 . "' ,`t4` = '" . (int)$t4 . "',`t5` = '" . (int)$t5 . "', `t6` = '" . (int)$t6 . "', `t7` = '" . (int)$t7 . "', `t8` = '" . (int)$t8 . "', `t9` = '" . (int)$t9 . "', `t10` = '" . (int)$t10 . "', `t11` = '" . (int)$t11 . "', `m1` = '" . (int)$m1 . "', `m2` = '" . (int)$m2 . "', `m3` = '" . (int)$m3 . "', `m4` = '" . (int)$m4 . "', `m5` = '" . (int)$m5 . "', `m6` = '" . (int)$m6 . "', `DQ` = '" . (int)$dq . "', `total` = '" . (float)$total . "'");

$verifica = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova`  WHERE `nome_id` = '" . $nome . "' AND `divisao_id` = '" . $divisao . "' AND `competicao_id` = '" . $competicao_id . "'");
if($verifica->num_rows) {
$banco->query("UPDATE `" . DB_PREFIX . "total_prova` SET `p1` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`) WHERE `nome_id` = '" . (int)$nome . "' AND `divisao_id` = '" . (int)$divisao . "' AND `competicao_id` = '" . (int)$competicao_id . "'"); 
} else {
$banco->query("INSERT INTO `" . DB_PREFIX . "total_prova` SET `nome_id` = '" . $nome . "', `divisao_id` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `p1` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`)");    
}

header("Location: /sumula.php");

die();
}

if($_POST['pista'] == 2){
$banco->query("INSERT INTO `" . DB_PREFIX . "resultados2` SET `nome` = '" . $nome . "', `divisao` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `fs` = '" . (float)$fs . "', `timer` = '" . (float)$timer . "', `ep` = '" . (int)$ep . "', `ae` = '" . (int)$ae . "', `uc` = '" . (int)$uc . "', `ns` = '" . (int)$ns . "',  `t1` = '" . (int)$t1 . "', `t2` = '" . (int)$t2 . "',`t3` = '" . (int)$t3 . "' ,`t4` = '" . (int)$t4 . "',`t5` = '" . (int)$t5 . "', `t6` = '" . (int)$t6 . "', `t7` = '" . (int)$t7 . "', `t8` = '" . (int)$t8 . "', `t9` = '" . (int)$t9 . "', `t10` = '" . (int)$t10 . "', `t11` = '" . (int)$t11 . "', `m1` = '" . (int)$m1 . "', `m2` = '" . (int)$m2 . "', `m3` = '" . (int)$m3 . "', `m4` = '" . (int)$m4 . "', `m5` = '" . (int)$m5 . "', `m6` = '" . (int)$m6 . "', `DQ` = '" . (int)$dq . "', `total` = '" . (float)$total . "'");

$verifica = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova`  WHERE `nome_id` = '" . $nome . "' AND `divisao_id` = '" . $divisao . "' AND `competicao_id` = '" . $competicao_id . "'");
if($verifica->num_rows) {
$banco->query("UPDATE `" . DB_PREFIX . "total_prova` SET `p2` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`) WHERE `nome_id` = '" . (int)$nome . "' AND `divisao_id` = '" . (int)$divisao . "' AND `competicao_id` = '" . (int)$competicao_id . "'"); 
} else {
$banco->query("INSERT INTO `" . DB_PREFIX . "total_prova` SET `nome_id` = '" . $nome . "', `divisao_id` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `p2` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`)");    
}
header("Location: /sumula.php");

die();
} 

if($_POST['pista'] == 3){
$banco->query("INSERT INTO `" . DB_PREFIX . "resultados3` SET `nome` = '" . $nome . "', `divisao` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `fs` = '" . (float)$fs . "', `timer` = '" . (float)$timer . "', `ep` = '" . (int)$ep . "', `ae` = '" . (int)$ae . "', `uc` = '" . (int)$uc . "', `ns` = '" . (int)$ns . "',  `t1` = '" . (int)$t1 . "', `t2` = '" . (int)$t2 . "',`t3` = '" . (int)$t3 . "' ,`t4` = '" . (int)$t4 . "',`t5` = '" . (int)$t5 . "', `t6` = '" . (int)$t6 . "', `t7` = '" . (int)$t7 . "', `t8` = '" . (int)$t8 . "', `t9` = '" . (int)$t9 . "', `t10` = '" . (int)$t10 . "', `t11` = '" . (int)$t11 . "', `m1` = '" . (int)$m1 . "', `m2` = '" . (int)$m2 . "', `m3` = '" . (int)$m3 . "', `m4` = '" . (int)$m4 . "', `m5` = '" . (int)$m5 . "', `m6` = '" . (int)$m6 . "', `DQ` = '" . (int)$dq . "', `total` = '" . (float)$total . "'");

$verifica = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova`  WHERE `nome_id` = '" . $nome . "' AND `divisao_id` = '" . $divisao . "' AND `competicao_id` = '" . $competicao_id . "'");
if($verifica->num_rows) {
$banco->query("UPDATE `" . DB_PREFIX . "total_prova` SET `p3` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`) WHERE `nome_id` = '" . (int)$nome . "' AND `divisao_id` = '" . (int)$divisao . "' AND `competicao_id` = '" . (int)$competicao_id . "'"); 
} else {
$banco->query("INSERT INTO `" . DB_PREFIX . "total_prova` SET `nome_id` = '" . $nome . "', `divisao_id` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `p3` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`)");    
}
header("Location: /sumula.php");

die();
}

if($_POST['pista'] == 4) {
$banco->query("INSERT INTO `" . DB_PREFIX . "resultados4` SET `nome` = '" . $nome . "', `divisao` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `fs` = '" . (float)$fs . "', `timer` = '" . (float)$timer . "', `ep` = '" . (int)$ep . "', `ae` = '" . (int)$ae . "', `uc` = '" . (int)$uc . "', `ns` = '" . (int)$ns . "',  `t1` = '" . (int)$t1 . "', `t2` = '" . (int)$t2 . "',`t3` = '" . (int)$t3 . "' ,`t4` = '" . (int)$t4 . "',`t5` = '" . (int)$t5 . "', `t6` = '" . (int)$t6 . "', `t7` = '" . (int)$t7 . "', `t8` = '" . (int)$t8 . "', `t9` = '" . (int)$t9 . "', `t10` = '" . (int)$t10 . "', `t11` = '" . (int)$t11 . "', `m1` = '" . (int)$m1 . "', `m2` = '" . (int)$m2 . "', `m3` = '" . (int)$m3 . "', `m4` = '" . (int)$m4 . "', `m5` = '" . (int)$m5 . "', `m6` = '" . (int)$m6 . "', `DQ` = '" . (int)$dq . "', `total` = '" . (float)$total . "'");

$verifica = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova`  WHERE `nome_id` = '" . $nome . "' AND `divisao_id` = '" . $divisao . "' AND `competicao_id` = '" . $competicao_id . "'");
if($verifica->num_rows) {
$banco->query("UPDATE `" . DB_PREFIX . "total_prova` SET `p4` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`) WHERE `nome_id` = '" . (int)$nome . "' AND `divisao_id` = '" . (int)$divisao . "' AND `competicao_id` = '" . (int)$competicao_id . "'"); 
} else {
$banco->query("INSERT INTO `" . DB_PREFIX . "total_prova` SET `nome_id` = '" . $nome . "', `divisao_id` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `p4` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`)");    
}
header("Location: /sumula.php");

die();
}

if($_POST['pista'] == 5) {
$banco->query("INSERT INTO `" . DB_PREFIX . "resultados5` SET `nome` = '" . $nome . "', `divisao` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `fs` = '" . (float)$fs . "', `timer` = '" . (float)$timer . "', `ep` = '" . (int)$ep . "', `ae` = '" . (int)$ae . "', `uc` = '" . (int)$uc . "', `ns` = '" . (int)$ns . "',  `t1` = '" . (int)$t1 . "', `t2` = '" . (int)$t2 . "',`t3` = '" . (int)$t3 . "' ,`t4` = '" . (int)$t4 . "',`t5` = '" . (int)$t5 . "', `t6` = '" . (int)$t6 . "', `t7` = '" . (int)$t7 . "', `t8` = '" . (int)$t8 . "', `t9` = '" . (int)$t9 . "', `t10` = '" . (int)$t10 . "', `t11` = '" . (int)$t11 . "', `m1` = '" . (int)$m1 . "', `m2` = '" . (int)$m2 . "', `m3` = '" . (int)$m3 . "', `m4` = '" . (int)$m4 . "', `m5` = '" . (int)$m5 . "', `m6` = '" . (int)$m6 . "', `DQ` = '" . (int)$dq . "', `total` = '" . (float)$total . "'");

$verifica = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova`  WHERE `nome_id` = '" . $nome . "' AND `divisao_id` = '" . $divisao . "' AND `competicao_id` = '" . $competicao_id . "'");
if($verifica->num_rows) {
$banco->query("UPDATE `" . DB_PREFIX . "total_prova` SET `p5` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`) WHERE `nome_id` = '" . (int)$nome . "' AND `divisao_id` = '" . (int)$divisao . "' AND `competicao_id` = '" . (int)$competicao_id . "'"); 
} else {
$banco->query("INSERT INTO `" . DB_PREFIX . "total_prova` SET `nome_id` = '" . $nome . "', `divisao_id` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `p5` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`)");    
}
header("Location: /sumula.php");

die();
}

if($_POST['pista'] == 6) {
$banco->query("INSERT INTO `" . DB_PREFIX . "resultados6` SET `nome` = '" . $nome . "', `divisao` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `fs` = '" . (float)$fs . "', `timer` = '" . (float)$timer . "', `ep` = '" . (int)$ep . "', `ae` = '" . (int)$ae . "', `uc` = '" . (int)$uc . "', `ns` = '" . (int)$ns . "',  `t1` = '" . (int)$t1 . "', `t2` = '" . (int)$t2 . "',`t3` = '" . (int)$t3 . "' ,`t4` = '" . (int)$t4 . "',`t5` = '" . (int)$t5 . "', `t6` = '" . (int)$t6 . "', `t7` = '" . (int)$t7 . "', `t8` = '" . (int)$t8 . "', `t9` = '" . (int)$t9 . "', `t10` = '" . (int)$t10 . "', `t11` = '" . (int)$t11 . "', `m1` = '" . (int)$m1 . "', `m2` = '" . (int)$m2 . "', `m3` = '" . (int)$m3 . "', `m4` = '" . (int)$m4 . "', `m5` = '" . (int)$m5 . "', `m6` = '" . (int)$m6 . "', `DQ` = '" . (int)$dq . "', `total` = '" . (float)$total . "'");

$verifica = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova`  WHERE `nome_id` = '" . $nome . "' AND `divisao_id` = '" . $divisao . "' AND `competicao_id` = '" . $competicao_id . "'");
if($verifica->num_rows) {
$banco->query("UPDATE `" . DB_PREFIX . "total_prova` SET `p6` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`) WHERE `nome_id` = '" . (int)$nome . "' AND `divisao_id` = '" . (int)$divisao . "' AND `competicao_id` = '" . (int)$competicao_id . "'"); 
} else {
$banco->query("INSERT INTO `" . DB_PREFIX . "total_prova` SET `nome_id` = '" . $nome . "', `divisao_id` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `p6` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`)");    
}
header("Location: /sumula.php");

die();
}


if($_POST['pista'] == 7) {
$banco->query("INSERT INTO `" . DB_PREFIX . "resultados7` SET `nome` = '" . $nome . "', `divisao` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `fs` = '" . (float)$fs . "', `timer` = '" . (float)$timer . "', `ep` = '" . (int)$ep . "', `ae` = '" . (int)$ae . "', `uc` = '" . (int)$uc . "', `ns` = '" . (int)$ns . "',  `t1` = '" . (int)$t1 . "', `t2` = '" . (int)$t2 . "',`t3` = '" . (int)$t3 . "' ,`t4` = '" . (int)$t4 . "',`t5` = '" . (int)$t5 . "', `t6` = '" . (int)$t6 . "', `t7` = '" . (int)$t7 . "', `t8` = '" . (int)$t8 . "', `t9` = '" . (int)$t9 . "', `t10` = '" . (int)$t10 . "', `t11` = '" . (int)$t11 . "', `m1` = '" . (int)$m1 . "', `m2` = '" . (int)$m2 . "', `m3` = '" . (int)$m3 . "', `m4` = '" . (int)$m4 . "', `m5` = '" . (int)$m5 . "', `m6` = '" . (int)$m6 . "', `DQ` = '" . (int)$dq . "', `total` = '" . (float)$total . "'");

$verifica = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova`  WHERE `nome_id` = '" . $nome . "' AND `divisao_id` = '" . $divisao . "' AND `competicao_id` = '" . $competicao_id . "'");
if($verifica->num_rows) {
$banco->query("UPDATE `" . DB_PREFIX . "total_prova` SET `p7` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`) WHERE `nome_id` = '" . (int)$nome . "' AND `divisao_id` = '" . (int)$divisao . "' AND `competicao_id` = '" . (int)$competicao_id . "'"); 
} else {
$banco->query("INSERT INTO `" . DB_PREFIX . "total_prova` SET `nome_id` = '" . $nome . "', `divisao_id` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `p7` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`)");    
}
header("Location: /sumula.php");

die();
}

if($_POST['pista'] == 8) {
$banco->query("INSERT INTO `" . DB_PREFIX . "resultados8` SET `nome` = '" . $nome . "', `divisao` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `fs` = '" . (float)$fs . "', `timer` = '" . (float)$timer . "', `ep` = '" . (int)$ep . "', `ae` = '" . (int)$ae . "', `uc` = '" . (int)$uc . "', `ns` = '" . (int)$ns . "',  `t1` = '" . (int)$t1 . "', `t2` = '" . (int)$t2 . "',`t3` = '" . (int)$t3 . "' ,`t4` = '" . (int)$t4 . "',`t5` = '" . (int)$t5 . "', `t6` = '" . (int)$t6 . "', `t7` = '" . (int)$t7 . "', `t8` = '" . (int)$t8 . "', `t9` = '" . (int)$t9 . "', `t10` = '" . (int)$t10 . "', `t11` = '" . (int)$t11 . "', `m1` = '" . (int)$m1 . "', `m2` = '" . (int)$m2 . "', `m3` = '" . (int)$m3 . "', `m4` = '" . (int)$m4 . "', `m5` = '" . (int)$m5 . "', `m6` = '" . (int)$m6 . "', `DQ` = '" . (int)$dq . "', `total` = '" . (float)$total . "'");

$verifica = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova`  WHERE `nome_id` = '" . $nome . "' AND `divisao_id` = '" . $divisao . "' AND `competicao_id` = '" . $competicao_id . "'");
if($verifica->num_rows) {
$banco->query("UPDATE `" . DB_PREFIX . "total_prova` SET `p8` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`) WHERE `nome_id` = '" . (int)$nome . "' AND `divisao_id` = '" . (int)$divisao . "' AND `competicao_id` = '" . (int)$competicao_id . "'"); 
} else {
$banco->query("INSERT INTO `" . DB_PREFIX . "total_prova` SET `nome_id` = '" . $nome . "', `divisao_id` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `p8` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`)");    
}
header("Location: /sumula.php");

die();
}

if($_POST['pista'] == 9) {
$banco->query("INSERT INTO `" . DB_PREFIX . "resultados9` SET `nome` = '" . $nome . "', `divisao` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `fs` = '" . (float)$fs . "', `timer` = '" . (float)$timer . "', `ep` = '" . (int)$ep . "', `ae` = '" . (int)$ae . "', `uc` = '" . (int)$uc . "', `ns` = '" . (int)$ns . "',  `t1` = '" . (int)$t1 . "', `t2` = '" . (int)$t2 . "',`t3` = '" . (int)$t3 . "' ,`t4` = '" . (int)$t4 . "',`t5` = '" . (int)$t5 . "', `t6` = '" . (int)$t6 . "', `t7` = '" . (int)$t7 . "', `t8` = '" . (int)$t8 . "', `t9` = '" . (int)$t9 . "', `t10` = '" . (int)$t10 . "', `t11` = '" . (int)$t11 . "', `m1` = '" . (int)$m1 . "', `m2` = '" . (int)$m2 . "', `m3` = '" . (int)$m3 . "', `m4` = '" . (int)$m4 . "', `m5` = '" . (int)$m5 . "', `m6` = '" . (int)$m6 . "', `DQ` = '" . (int)$dq . "', `total` = '" . (float)$total . "'");

$verifica = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova`  WHERE `nome_id` = '" . $nome . "' AND `divisao_id` = '" . $divisao . "' AND `competicao_id` = '" . $competicao_id . "'");
if($verifica->num_rows) {
$banco->query("UPDATE `" . DB_PREFIX . "total_prova` SET `p9` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`) WHERE `nome_id` = '" . (int)$nome . "' AND `divisao_id` = '" . (int)$divisao . "' AND `competicao_id` = '" . (int)$competicao_id . "'"); 
} else {
$banco->query("INSERT INTO `" . DB_PREFIX . "total_prova` SET `nome_id` = '" . $nome . "', `divisao_id` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `p9` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`)");    
}
header("Location: /sumula.php");

die();
}

if($_POST['pista'] == 10) {
$banco->query("INSERT INTO `" . DB_PREFIX . "resultados10` SET `nome` = '" . $nome . "', `divisao` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `fs` = '" . (float)$fs . "', `timer` = '" . (float)$timer . "', `ep` = '" . (int)$ep . "', `ae` = '" . (int)$ae . "', `uc` = '" . (int)$uc . "', `ns` = '" . (int)$ns . "',  `t1` = '" . (int)$t1 . "', `t2` = '" . (int)$t2 . "',`t3` = '" . (int)$t3 . "' ,`t4` = '" . (int)$t4 . "',`t5` = '" . (int)$t5 . "', `t6` = '" . (int)$t6 . "', `t7` = '" . (int)$t7 . "', `t8` = '" . (int)$t8 . "', `t9` = '" . (int)$t9 . "', `t10` = '" . (int)$t10 . "', `t11` = '" . (int)$t11 . "', `m1` = '" . (int)$m1 . "', `m2` = '" . (int)$m2 . "', `m3` = '" . (int)$m3 . "', `m4` = '" . (int)$m4 . "', `m5` = '" . (int)$m5 . "', `m6` = '" . (int)$m6 . "', `DQ` = '" . (int)$dq . "', `total` = '" . (float)$total . "'");

$verifica = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova`  WHERE `nome_id` = '" . $nome . "' AND `divisao_id` = '" . $divisao . "' AND `competicao_id` = '" . $competicao_id . "'");
if($verifica->num_rows) {
$banco->query("UPDATE `" . DB_PREFIX . "total_prova` SET `p10` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`) WHERE `nome_id` = '" . (int)$nome . "' AND `divisao_id` = '" . (int)$divisao . "' AND `competicao_id` = '" . (int)$competicao_id . "'"); 
} else {
$banco->query("INSERT INTO `" . DB_PREFIX . "total_prova` SET `nome_id` = '" . $nome . "', `divisao_id` = '" . $divisao . "', `competicao_id` = '" . $competicao_id . "', `p10` = '" . (float)$total . "', `soma` = (`p1` + `p2` + `p3` + `p4` + `p5` + `p6` + `p7` + `p8` + `p9` + `p10`)");    
}
header("Location: /sumula.php");

die();
}


*/
} else {
    
    echo "ERROR";
}

?>