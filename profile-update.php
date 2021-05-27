<?php 

	// variable declaration
	$conn = mysqli_connect("localhost", "techcode_india", "Tech@2020", "techcode_blog2");
	
	// Basic Accpount Info
	$name = "";
	$email    = "";
	$clg  = "";
	$dept="";
	
	// Info update
	$about="";
	$bday="";
	$phone   = "";
	$gender="";
	
	// Social media profiles
	$twitter="";
	$facebook="";
	$instagram="";
	$git="";
	$codepen="";
	$slack="";
	
	
	// Password Update
    $passwordo="";
    $password="";
	
	
	
	
    //getting users ip
    $ip=$_SERVER['REMOTE_ADDR'];
    $id=$_SESSION['user']['id'];


	// Basic profile update
	if (isset($_POST['account_update'])) {
		// receive all input values from the form
	    $name = esc($_POST['name']);
	    $email = esc($_POST['email']);
	    $clg  = esc($_POST['clg']);
	    $dept=esc($_POST['dept']);
	    
	    
			$query = "UPDATE users SET name='$name', email='$email', college='$clg' , dept='$dept' WHERE id=$id";
			mysqli_query($conn, $query);
			
			$sql = "SELECT * FROM users WHERE id=$id";
			$result = mysqli_query($conn, $sql);
			
				// get id of created user
				$reg_user_id = mysqli_fetch_assoc($result)['id'];
				// put logged in user into session array
				$_SESSION['user'] = getUserById($reg_user_id);
				
				$_SESSION['message'] = "Profile Updated Successfully";
	}
	
	
	// persenoal information update
	
	if (isset($_POST['profile_update'])) {
		// receive all input values from the form
	    $bday = esc($_POST['bday']);
	    $phone = esc($_POST['phone']);
	    $gender = esc($_POST['gender']);
	    $about = esc($_POST['about']);
	    
	    
			$query = "UPDATE users SET bday='$bday', phone='$phone', gender='$gender', about='$about' WHERE id=$id";
			mysqli_query($conn, $query);
			
			$sql = "SELECT * FROM users WHERE id=$id";
			$result = mysqli_query($conn, $sql);
			
				// get id of created user
				$reg_user_id = mysqli_fetch_assoc($result)['id'];
				// put logged in user into session array
				$_SESSION['user'] = getUserById($reg_user_id);
	}
	
	
	
	// persenoal information update
	
	if (isset($_POST['social_update'])) {
		// receive all input values from the form

	$twitter=esc($_POST['t']);
	$facebook=esc($_POST['f']);
	$instagram=esc($_POST['i']);
	$git=esc($_POST['g']);
	$codepen=esc($_POST['c']);
	$slack=esc($_POST['s']);
	    
	    
			$query = "UPDATE users SET twitter='$twitter', facebook='$facebook', instagram='$instagram' , git='$git' , codepen='$codepen' , slack='$slack' WHERE id=$id";
			mysqli_query($conn, $query);
			
			$sql = "SELECT * FROM users WHERE id=$id";
			$result = mysqli_query($conn, $sql);
			
				// get id of created user
				$reg_user_id = mysqli_fetch_assoc($result)['id'];
				// put logged in user into session array
				$_SESSION['user'] = getUserById($reg_user_id);
	}
	
	
	
	
		if (isset($_POST['password_update'])) {
		// receive all input values from the form
	    $passwordo = esc($_POST['passwordo']);
	    $password = esc($_POST['password']);
	    $pass=$_SESSION['user']['password'];
	    
	    $password1=md5($passwordo);
	    $password2=md5($password);
	    if($pass!=$password1)
	    {
	        	$_SESSION['message'] = "Password not matching...";
	    }
	    else
	    {
	    
			$query = "UPDATE users SET password='$password2' WHERE id=$id";
			mysqli_query($conn, $query);
			
			$sql = "SELECT * FROM users WHERE id=$id";
			$result = mysqli_query($conn, $sql);
			
				// get id of created user
				$reg_user_id = mysqli_fetch_assoc($result)['id'];
				// put logged in user into session array
				$_SESSION['user'] = getUserById($reg_user_id);
					$_SESSION['message'] = "Password Updated Successfully";
				
	    }
	}
	
	
	
	
	
	//functions - decleration for esc and retrival of data from database.
	function esc(String $value)
	{	
		// bring the global db connect object into function
		global $conn;

		$val = trim($value); // remove empty space sorrounding string
		$val = mysqli_real_escape_string($conn, $value);

		return $val;
	}
	// Get user info from user id
	
	function getUserById($id)
	{
		global $conn;
		$sql = "SELECT * FROM users WHERE id=$id LIMIT 1";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		// returns user in an array format: 
		// ['id'=>1 'username' => 'Awa', 'email'=>'a@a.com', 'password'=> 'mypass']
		return $user; 
	}
	
?>