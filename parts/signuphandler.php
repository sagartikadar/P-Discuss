<!-- signup_handler -->

<?php
$showERROR="false";
$showERRORemail=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
 include 'conn.php'; 
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['pass'];
  $cpassword=$_POST['cpass'];

  $existsql= "SELECT * FROM `users` WHERE email='$email'";
  $result= mysqli_query($conn,$existsql);
  $numrows= mysqli_num_rows($result);
  if($numrows>0){
    $showERROR="email already in use";
    $showERRORemail=true;
    header("location: /P-discuss/index.php?signupsucess=false&error=$showERROR");
  }
  else{
    if($password==$cpassword){
        $hash=password_hash($password, PASSWORD_DEFAULT);
        $sql= "INSERT INTO `users` ( `fname`, `lname`, `email`, `password`, `date`) VALUES ( '$fname', '$lname', '$email', '$hash', current_timestamp());";
        $result=mysqli_query($conn, $sql);
        if($result){
            $showALERT=true;
            header("location: /P-discuss/index.php?signupsucess=true");
            exit();
        }
    }
    else{
        $showERROR="passwords do not match";
        header("location: /P-discuss/index.php?signupsucess=pfalse&error=$showERROR");
    }
  }
//   header("location: /index.php?signupsucess=false&error=$showERROR");
}
?>
