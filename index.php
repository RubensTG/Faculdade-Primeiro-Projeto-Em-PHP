<?php 
header("Content-Type: application/json");

include("Filho.php");

$filho = new Filho(1.60, 14, 58);
//echo $filho."<br>";

$filho->setTimeDoCoracao("Galo");
//echo $filho->getTimeDoCoracao()."<br>";


$pessoa = new pessoa(1.80, 22, 80);
//echo $pessoa;
if($filho -> getTimeDoCoracao() == "Galo"){
http_response_code(200);
echo json_encode($filho);
}
else {
	http_response_code(404);
	$resposta = array("Erro" => "Não existe");
	echo json_encode($resposta);
}
echo $filho -> findAll();



?>