<?php

	include_once('config.php');

?>

<?php
    if (isset ($_POST['update']))
    {
        $servername = "localhost"; 
	    $username = "root"; 
	    $password = ""; 
        $dbname = "User_Profile";
        
    // Create connection 
        $conn = new mysqli($servername, $username, $password, $dbname); 
        
        $sql = "update User_details SET UserName =  '$name', E_mail = '$e_mail', Mobile_No = '$phone_No', User_Address = '$address', Account_No =  '$account_No', User_Password = '$user_pw', Confirm_Password = '$confirm_pw'";
        
        if(mysqli_query($conn,$sql)){
            header("location:index.php");
        }
        else{
            echo "<script>alert('Try Again')</script>";
        }
        //close connection
        mysqli_close($conn);

    }
?>
<!DOCTYPE html>

<html>

<head>
    <title>User Account | QuickBook</title>
    <link rel="stylesheet" href="styles/prof.css">
	<script src = "js/pf.js"></script>
</head>

<body>

<!-- Header -->

	<div class="cover">
		<img src="images/logow.png" class="logo" width="300px" height="178px" alt="logo">
	</div>
	
	<ul class="topMenu">
		<li class="topMenu"><a href="#home">Login</a></li>
		<li class="topMenu"><a href="new.html">Sign Up</a></li>
		<a href="#pic"><img src="images/ProPic.png" width="20px" height="20px" alt="quickbook" class="proPic"></a>
		<input type="search" placeholder="Search.." class="searchBar">
	</ul>
	

<ul class="menu">
	<li class="menu"><a href="#Home"><b>Home</b></a></li>
	<li class="menu"><a href="#Bookings"><b>Bookings</b></a></li>
	<li class="menu"><a href="#Contact Us"><b>Conctact Us</b></a></li>
	<li class="menu"><a href="#About Us"><b>About Us</b></a></li>
	<li class="menu"><a href="checkSchedules.html"></b><b>Schedules</a></li>
</ul>

<!-- Form -->

</div>
		<center>
			
			<img src = "images/pic.jpg" class="mlogo" alt= "Name">
			
			<input type="text" name="fullname" placeholder="Name" class = "name" required> <br>
			
			<input type="email" name="email" placeholder="abc@gmail.com" class = "mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
			
		</center>
		
		<form class="train" action = "submitProfile.php" method = "POST">
			
			<table>
				<div class="details">
					<h4 class="topic">Customer Details</h4>
					
						<tr>
							<td>Name : </td>
							<td><input type="text" id="reference" required name = "fullname"></td>
						</tr>
					
						<tr>
							<td>E-mail : </td>
							<td><input type="text" id="reference" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required name = "email"></td>
						</tr>
					
						<tr>
							<td>Mobile Number : </td>
							<td><input type="text" id="reference" pattern="[0-9]{10}" required name = "mobile"></td>
                
						</tr>
                
						<tr>
							<td>Address : </td>
							<td><input type="text" id="reference" name = "address"></td>
						</tr>
				
						<tr>
							<td>Account Number : </td>
							<td><input type="text" id="reference" name = "account"></td>
						</tr>
				</div>
			</table>
		
		<table>
			<div class="detail">
                
                <h4 class="sub">Login Details</h4>
                    
                <tr>
                    <td> User Password :</td>
					<td><input type = "password" class = "npassword" id = "reference" required name = "pw"> </td>	
                </tr>
				
				<tr>
                    <td> Confirm Password :</td>
					<td><input type = "cpassword" class = "ccpassword" id = "reference" required name = "cpw"></td>	
                </tr>
            </div>
            
        </table>
		
		<button onclick = "validate()" name = "Update" class= "changes" id = "change"><a href = "editProfile.php">Edit Profile</button>
    </form>
</div>

<!-- Footer -->

<div class="bottom">
	<table border="0" class="tblBottom" cellpadding="10">
		<tr>
			<td width="150"><a href="#about" class="bottom_list"><font size="3">About Us</font></a></td>
			<td width="500"><a href="#home" class="bottom_list"><font size="3">Home</font></a></td>
			<td width="77" class="bottom_list">Contact Us:</td>
			
		</tr>
		<tr>
			<td width="150"><a href="ContactUs.html" class="bottom_list"><font size="3">Contact Us</font></a></td>
			<td width="500"><a href="#bookings" class="bottom_list"><font size="3">Bookings</font></a></td>
			<td rowspan=2 >
				<img src="images/phone.png" class="phoneImg" width="50px" height="50px" alt="phoneIcon">
			</td>
			<td width="300"><a href="###" class="bottom_list"><font size="3">+94 711803905</font></a></td>
		</tr>
		<tr>
			<td width="150"><a href="#myAccount" class="bottom_list"><font size="3">My Account</font></a></td>
			<td width="500"><a href="#Terms" class="bottom_list"><font size="3">Terms and Conditions</font></a></td>
			<td width="300"><a href="###" class="bottom_list"><font size="3">+94 716675165</font></a></td>
		
		</tr>
		
		<tr>
			<td width="150"></td> 
			<td width="300"></td>
			<td width="77"><a href="#email" class="bottom_list"><font size="3">....@....lk</font></a></td>
			
		
		</tr>

	</table>
	
	<br><br>
	
	<center>
		<a href="#fb"><img src="images/fb.jpg" width="40px" height="40px" alt="fbIcon" class="socialMedia"></a>
		<a href="#twitter"><img src="images/twitter.jpg" width="40px" height="40px" alt="twitterIcon" class="socialMedia"></a>
		<a href="#insta"><img src="images/insta.jpg" width="40px" height="40px" alt="instaIcon" class="socialMedia"></a>
	</center>
	
		</div>
		
</body> 