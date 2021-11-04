
<?php
session_start();
error_reporting(0);
include('connect.php');
if (isset($_SESSION["TravelloLogin"]) == session_id()) {
    die();
} else {
	 // Register check
    if (isset($_POST['regsubmit'])) {
        // Empty check
        if (!empty($_POST['email']) and !empty($_POST['pass'])) {
            // Collecting values
            extract($_POST);
			//Check if email already exists
			$checkEmail = "SELECT * FROM `register` WHERE `email`='$email' and `status`!=0";
			$checkEmailResult = mysqli_query($conn , $checkEmail);
			$checkEmailCount = mysqli_num_rows($checkEmailResult);
			//No user exists
			if($checkEmailCount==0)
			{
				$name= strtolower($fname);
				$password = md5($pass);
				//Insert into database
				$insertDb="INSERT INTO `register`( `users`, `name`, `email`, `password`) VALUES ('$users','$fname','$email','$pass')";
				$insertDbResult= mysqli_query($conn,$insertDb);
				if($insertDbResult)
				{
					$_SESSION['loginMessage'] = "Register Success";
					header("Location: home.php");
					die();
				}
			
			else
			{
              $_SESSION['loginMessage']= "User Register Failed";
			  die();
			}
		}
		
	    
		else
		{
			 $_SESSION['loginMessage']= "User Email Already exists";
			  die();
		}
	}
}
}
