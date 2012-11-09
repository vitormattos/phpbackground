<?php

function teste_shmop() {
	global $shm;
	$variavel = @shm_get_var($shm, 123456);
	$variavel = json_decode($variavel);
	if($variavel['ping']) {
		shm_put_var($shm, 123456, '{"pong":1}');
		echo "pong\n";
	}
}
