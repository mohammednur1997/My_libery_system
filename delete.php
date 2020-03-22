		
<?php
		include 'connect.php';
          $id=$_GET['id'];

		$q="DELETE FROM crud WHERE id=$id";
		if(mysqli_query($link,$q))
			{
              header('location:disply.php');
			}else
			{
				echo"faild to delete data from table: $q <br/>".myslqi_error($link);
			}
			mysqli_close($link);
		?>