<?php

	include_once('config.php');

?>
<?php

    //Escape user inputs for security

		$connect = mysqli_connect($servername, $username, $password, $dbname);
	
		$name  = $_POST['fullname'];
		$e_mail  = $_POST['email'];
		$phone_No  = $_POST['mobile'];
		$address  = $_POST['address'];
		$account_No  = $_POST['account'];
		$user_pw  = $_POST['pw'];
		$confirm_pw  = $_POST['cpw'];
    
    //Attempt insert query execution

    $sql = "INSERT INTO User_details (id, UserName, E_mail, Mobile_No, User_Address, Account_No, User_Password, Confirm_Password) VALUES ('', '$name', '$e_mail', '$phone_No', '$address', '$account_No', '$user_pw', '$confirm_pw')";

    if(mysqli_query($conn, $sql)){
		//echo "<script> alert('Records added successfully!!!!')</script>";
		header("Location:acc.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($conn);

	
?>