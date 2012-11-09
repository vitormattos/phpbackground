<?php

$shm = shm_attach(12356, 524288);

// start
shm_put_var($shm, -1, time());

function teste_shm() {
	global $shm;
	$variavel = @shm_get_var($shm, 1);
	$variavel = @json_decode($variavel);
	// responde o ping
	if(isset($variavel->ping) && $variavel->ping) {
		shm_put_var($shm, 1, '{"pong":'.time().'}');
		echo "pong $time\n";
	}
}

//shm_remove($shm);
//shm_detach($shm);
