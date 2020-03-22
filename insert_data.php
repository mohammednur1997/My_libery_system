                  
                  <?php
                    include 'connect.php';

                 if(isset($_POST['done'])) {    
                    $email = $_POST['email'];
                    $password = $_POST['password'];
            

                    // checking empty fields
                    if(empty($email) || empty($password)) {                
                        if(empty($email)) {
                            echo "<font color='red'>Email field is empty.</font><br/>";
                        }

                        if(empty($password)) {
                            echo "<font color='red'>Password field is empty.</font><br/>";
                        }

                        //link to the previous page
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                    } else { 
                        // if all the fields are filled (not empty)             
                        //insert data to database
                        $result = mysqli_query($link, "INSERT INTO crud(email,password) VALUES('$email','$password')");

                        //display success message
                        echo "<font color='green'>Data added successfully.";
                        echo "<br/><a href='disply.php'>View Result</a>";
                    }
                }
                ?>