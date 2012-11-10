<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// pega a memória compartilhada
$shm = shm_attach(12356, 524288);

// verifica resposta do ping anterior
$json = @json_decode( shm_get_var($shm, 1) );

if(isset($json->pong) && $json->pong) {
	echo json_encode(array('pong' => time() - $json->pong));
}

// faz o ping
if($_GET['ping']) {
	$json->ping = 1;
	shm_put_var($shm, 1, json_encode($json));
}
