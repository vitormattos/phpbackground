<?php

// semaphore
require 'teste_shm.php';
// shared memory
//require 'teste_shmop.php';

do {
	teste_shm();
	// micro second is one millionth of a second
	usleep(50000);
	//usleep(1000000);
} while(1);
