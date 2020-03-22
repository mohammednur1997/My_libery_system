	

	<?php
	$server='localhost';
	$username='root';
	$password='';
	$dbname='user';
	$link=mysqli_connect($server,$username,$password,$dbname);
	if(!$link)
	{
      echo'faild to connect database:'.mysqli_connect_error();
	}
	?>