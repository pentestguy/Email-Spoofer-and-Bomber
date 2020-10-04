<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Email Bombing & Spoofing by 5hu8h4m</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="src/richtext.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="src/jquery.richtext.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div style="" class="col-md-8">
            <div style="margin-top:25%;   " class="row">
                <div class="col-md-12">
                     <div class="form-group">
                         <?php
                         if(!empty($_SESSION["success"])){
                             ?>
                             <div class="alert alert-success">
  <strong>Success!</strong> Mail Sent Successfully
</div>
                             <?php
                         }elseif(!empty($_SESSION["passerror"])){
                             
                             ?>
                              <div class="alert alert-danger">
  <strong>Failure!</strong> Incorrect Password
</div>
                             <?php
                             
                         }
                         $_SESSION["passerror"]="";
                         $_SESSION["success"]="";
                         
                         ?>
                        </div>
                    <form action="mail.php" method="post">
                        <div class="form-group">
                          <label>Email To:</label>
                          <input type="text" required="true" name="to" class="form-control" >
                        </div>

                        <div class="form-group">
                          <label>Email From:</label>
                          <input type="text" name="from" required="true" class="form-control" >
                        </div>

                        <div class="form-group">
                          <label>Subject:</label>
                          <input type="text" name="subject" required="true" class="form-control" >
                        </div>

                        <div class="form-group">
                          <label>Message:</label>
                          <textarea name="message" required="true" class="form-control content"></textarea>
                          
                        </div>

                        <div class="form-group">
                          <label>Count:</label>
                          <input type="number" required="true" name="count" class="form-control" >
                        </div>

                        <div class="form-group">
                          <label>password:</label>
                          <input type="password" required="true" name="password" class="form-control" >
                        </div>

                         <div class="form-group">
                         
                          <input type="submit" name="submit" class="form-control" >
                        </div>


                    </form>
                    <br><br>
                    <center>
                    <p><b>Develoed by 5hu8h4m | <a herf=https://pentestguy.in> pentestguy.in</a></b></p>
                  </center>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>   
<script>
        $(document).ready(function() {
            $('.content').richText();
        });
        </script>
    </body>
