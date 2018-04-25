<?php
include("includes/db_con.php");
include ("includes/links.html");
include ("includes/Query.php");
if(isset($_POST['logbtn'])){
  $lgemail =$_POST['lgemail'];
  $lgpassword=$_POST['logpw'];
  $log= "select * from Ph_User where Email='$lgemail'";
  $result= $con->query($log);
  if($result->num_rows>0){
while ( $row=$result->fetch_assoc()) {
$_SESSION["uid"]=$row['id'];
if($lgpassword==$row['password']&& $row['user_type']=='Admin'){
  $_SESSION['user']=$row['name'];
  $_SESSION['user_type']=$row['user_type'];
header("location:Admin.php");
}
 else if($lgpassword==$row['password']&& $row['user_type']=='Staff') {
      $_SESSION['user']=$row['name'];
      $_SESSION['user_type']=$row['user_type'];
     header("location:Staff.php");
  }
}
}
else {
  echo "no record";
}
}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Login</title>
   </head>
   <body>
     <div class=" col-md-6 col-md-offset-3">
     <div class="text-center">
       <h1>Wellcome To City Pharmacy</h1>
       <h3>City Pharmacy Login</h3>
     </div>
   <form method="post"  action="">
       <div class="form-group">
    Email :
     <input type="email" placeholder="John_112@home.com" class="form-control" name="lgemail" value="">
      </div>
       <div class="form-group">
     Password:
     <input type="password" class="form-control" name="logpw" id="password" value="" onkeyup='check();' >
     <span id="passError"></span>
      </div>
       <div class="form-group">
     <input type="submit" class="btn btn-default" id="submit"  name="logbtn" value="Log in">
   </div>
   </form>
 </div>
   </body>
 </html>
