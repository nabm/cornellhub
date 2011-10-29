<?php
	if (file_exists('count_f.txt')) 
	{
		$fil = fopen('count_f.txt', r);
		$dat = fread($fil, filesize('count_f.txt')); 
		echo $dat+1;
		fclose($fil);
		$fil = fopen('count_f.txt', w);
		fwrite($fil, $dat+1);
	}
	else
	{
		$fil = fopen('count_f.txt', w);
		fwrite($fil, 1);
		echo '1';
		fclose($fil);
	}
?>