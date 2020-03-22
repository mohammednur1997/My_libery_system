           
               
                 <?php

                include 'connect.php';
                if(isset($_POST["done"]))
                {
                    
               
               
                $id=$_POST['id'];
                $email=$_POST['email'];
                $password=$_POST['password']; 

                // checking empty fields
                if(empty($email) || empty($password)) {            
                    if(empty($email)) {
                        echo "<font color='red'>Email field is empty.</font><br/>";
                    }

                    if(empty($password)) {
                        echo "<font color='red'>password field is empty.</font><br/>";
                    }

                } else {    
                    //updating the table
                    $sql="UPDATE crud SET email='$email',password='$password' WHERE id=$id";
                    $result = mysqli_query($link,$sql);

                    //redirectig to the display page. In our case, it is index.php
                    header("Location: disply.php");
                }
               }
                
               
           
            ?>
            <?php
             include 'connect.php';
            //getting id from url
            $id =$_GET['id'];

            //selecting data associated with this particular id
            $sql="SELECT * FROM crud WHERE id=$id";
            $result = mysqli_query($link,$sql);

            while($res = mysqli_fetch_array($result))
            {
                $email = $res['email'];
                $password = $res['password'];

            }
            ?>
            


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
         
         </style>
     </head>
     <body>
       <section class="result">
           <div class="container">
               <div class="raw">
                  <div class="col-md-4">
                    
     
                  </div>
                  
                  <div class="col-md-4">
                      <div class="result_information">
                       <h3>Update your students Result</h3>

                      <form action="update.php" method="POST">
                       
                        <label>Email:</label>
                           <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
                            <br/>
                       <label>Password:</label>
                           <input type="text" name="password" class="form-control" value="<?php echo $password;?>">
                            <br/>
                        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>> 
            <button class="btn btn-primary" type="submit" name="done">Submit</button>
                          
                       </form>
                   </div>
                   </div>
                   
                   
                   <div class="col-md-4"></div>
               </div>
           </div>
       </section>
     </body>
     </html>