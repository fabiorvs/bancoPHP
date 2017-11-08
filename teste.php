<?php
/*
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
*/
include "banco.php";
$dados['id_cad_1'] = 123;
$dados['id_cad_2'] = 321;
$result = insertDb($dados,'dupla_leadership');
$result = deleteDb('dupla_leadership','id_dupla','30');
$result = updateDb($dados,'dupla_leadership','id_dupla','31');
$total= countDb("SELECT * FROM dupla_leadership");
echo "Total: ". $total;
echo "<br>";
$rs = queryDb("SELECT * FROM dupla_leadership");
foreach ($rs as $result){
    echo $result['id_cad_1'];
    echo "<br>";
}