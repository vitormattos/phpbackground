<?php
/**
 * ID da posição de memória onde serão armazenadas as informações
 *
 * Tamanho de memória reservada para o "shared memory segment"
 * Este valor é informado em bytes
 * 512Kb = 524288 bytes
 * @var int
 */

//*
//Salvando em disco:
// Create a temporary file and return its path
$tmp = tempnam('/tmp', 'PHP');
// Get the file token key
$key = ftok($tmp, 'a');
$shm = shm_attach($key);
//*/
//$shm = shm_attach(12356, 524288);

function teste_shm() {
	global $shm;
	$variavel = @shm_get_var($shm, 1);
	$variavel = json_decode($variavel);
	if($variavel['ping']) {
		shm_put_var($shm, 1, '{"pong":1}');
		echo "pong\n";
	}
}

//shm_remove($shm);
//shm_detach($shm);
