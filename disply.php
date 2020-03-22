<!DOCTYPE HTML>
 <html lang="en-US">
 <head>
 	<meta charset="UTF-8">
 	<title>Result information</title>
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<style>
        body{
           background-image: ul(image/8144_cool_sunrise.jpg);

        }
        .result{
            background: rgb(0,0,0,.3);
            padding: 50px 0;
            
        }
        .table-condensed > tbody > tr > td, .table-condensed > tbody > tr > th, .table-condensed > tfoot > tr > td, .table-condensed > tfoot > tr > th, .table-condensed > thead > tr > td, .table-condensed > thead > tr > th {
    padding: 16px;
}
     
     </style>
 </head>
 <body>
 
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="murad1">
                         <h3>Your Personal Information :<hr/></h3>
                         <h3><a href="insert_html.php">Add Data</a></h3>



                         <table class="table table-responsive table-striped table-hover table-bordered table-condensed text-center">
                         	<tr class="text-center">
                         		<th>id</th>
                         		<th>Username</th>
                         		<th>password</th>
                         		<th>Delete</th>
                         		<th>Update</th>   
                         	</tr>

                        <?php
                        include 'connect.php';

                        $sql="SELECT * FROM crud";
                        $result=mysqli_query($link,$sql);
                        while($rows=mysqli_fetch_assoc($result))
                        {
                        ?>
                        <tr>
                            	<td><?php echo $rows['id'];?> </td>
                           		<td><?php echo $rows['email'];?> </td>
                           		<td><?php echo $rows['password'];?> </td> 
                           		
     <td><a href="Update.php?id=<?php echo $rows['id'];?>" >Update </a></td> 
               
 <td><a href="delete.php?id=<?php echo $rows['id'];?>" onClick="return confirm('Are you sure you want to delete?')" >Delete </a></td>
                  	</tr>
                        
                   <?php
                      }
                   ?>
                    </table>     
                    </div>
                 </div>
                  
            </div>
        </div>
    </section>
 </body>
 </html>                     