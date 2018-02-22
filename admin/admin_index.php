<?php
   //ini_set('display_errors',1);
   //error_reporting(E_ALL);

   require_once('phpscripts/config.php');
   confirm_logged_in();
   if(isset($_POST['submit'])){
     $username = trim($_POST['username']); //trim removes the 'whitespace' aka spaces at the start or end of the username; might be there if copy/pasted in
     $password = trim($_POST['password']);
     if ($username !== "" && $email !== "" && $fname !== ""){
         $result = register($username, $email, $fname, $ip);
         $message = $result;
      }else{
       $message = "Please fill in the required fields";
     }
   }

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
</head>
<body>
  <h1>Welcome Company Name to your admin page</h1>
  <?php echo "<h2>Hi - {$_SESSION['user_name']}</h2>"; ?>
  <?php echo "<h2>Last Login - {$_SESSION['last_login']}</h2>"; ?>
  <h4 id="contentChange">.</h4>
  <?php if(!empty($fail_message)){echo $fail_message;}?>
  <?php if(!empty($message)){echo $message;}?>
  <form action="admin_index.php" method="post">
    <lable>First Name:</lable>
    <input type="text" name="fname" value="">
    <br>
    <br>
    <lable>Email:</lable>
    <input type="text" name="email" value="">
    <br>
    <br>
    <lable>Username:</lable>
    <input type="text" name="username" value="">
    <br>
    <br>
    <p>Password:</p>
    <h5>Auto Generated</h5>
    <br>
    <input type="submit" name="submit" value="Register Account">
  </form>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="js/timeupdate.js"></script>
</html>
