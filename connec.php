<?php
$conn = pg_connect("postgres://zflwyanlyxoizx:466e2381a7bbf16cd25ac61f105812ca1fd2f9385353625
bdf4cf8ca2deee238@ec2-34-232-245-127.compute-1.amazonaws.com:5432/d2ae7jci9v4i9u");
	echo 'Connected Successfully!!!';
	if(!$conn)
	{
		die("Could not connect to database");
	}
?>