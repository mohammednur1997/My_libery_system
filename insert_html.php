   



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
                       <h3>Enter your students Result</h3>

                      <form action="insert_data.php" method="POST">
                        <label>Email:</label>
                           <input type="text" name="email" class="form-control"> <br/>
                       <label>Password:</label>
                           <input type="text" name="password" class="form-control"> <br/>
                          <button class="btn btn-primary" type="submit" name="done">Add</button>
                       </form>
                   </div>
                   </div>
                   <div class="col-md-4"></div>
               </div>
           </div>
       </section>
     </body>
     </html>