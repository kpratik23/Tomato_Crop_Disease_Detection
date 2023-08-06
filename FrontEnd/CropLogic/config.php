<?php

$server = "localhost";
$username = "root";
$password =  "";
$database = "BE_PROJECT";

$conn = mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection faile:" .$conn->connect_error);
}

echo "";

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $number = $_POST['phone_no'];
    $password = $_POST['password'];

   $sql = "INSERT INTO `users` ( `name`, `phone_no`, `password`) VALUES ( '$name', '$number', '$password' )";
   if(mysqli_query($conn,$sql)){
      echo "records inserted successfully";
      header("location:login.php");
   }
   else {
       echo "ERROR: could not able to execute $sql " .mysqli_error($conn);
   }
}
session_start();


if(isset($_POST['Login'])){
	

if (isset($_POST['phone_no']) && isset($_POST['password'])) {
$_SESSION["pno"]="login";
	
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$number = validate($_POST['phone_no']);
	$password = validate($_POST['password']);

	
	if (empty($number)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}if(!(preg_match('/^[0-9]{10}+$/', $number))){
		header("Location: login.php?error=Invalid mobile number");
	    exit();
	}
	else if(empty($password)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
      //  $pass = md5($pass);


		$sql = "SELECT * FROM users WHERE `phone_no`='$number' AND `password`='$password'";

		$result = mysqli_query($conn , $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['phone_no'] === $number && $row['password'] === $password) {
            	$_SESSION['phone_no'] = $row['phone_no'];
            	// $_SESSION['name'] = $row['name'];
            	// $_SESSION['id'] = $row['id'];
            	header("Location: home.php");

            }else{

			header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
		header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}

}else{
	header("Location: login.php");
	exit();
}
}


if(isset($_POST['contact'])){
    $name = $_POST['name'];
    $phone_no= $_POST['phone_no'];
    $message = $_POST['message'];

   $sql = "INSERT INTO `contact` ( `name`, `phone_no`, `message`) VALUES ( '$name', '$phone_no', '$message' )";
   if(mysqli_query($conn,$sql)){
      echo "records inserted successfully";
      header("location:index.php");
	  
   }
   else {
       echo "ERROR: could not able to execute $sql " .mysqli_error($conn);
   }
}



?>