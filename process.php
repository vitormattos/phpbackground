<?php

// semaphore
require 'teste_shm.php';
// shared memory
//require 'teste_shmop.php';

do {
	teste_shm();
	usleep(50000);
	//usleep(1000000);
} while(1);
