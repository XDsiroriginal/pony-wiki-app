<?php

$connect = mysqli_connect(host: 'localhost', user: 'root', password: 'root', database: 'all_pony';

if (!$connect) 
{
	echo 'БЛЯТЬ ВСЁ ПО ПИЗДЕ ПОШЛО';
}