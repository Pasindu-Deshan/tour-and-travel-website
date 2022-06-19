<?php session_start(); ?>
<?php 
	$connection = mysqli_connect('localhost', 'root', '', 'userdb');
	
	if (isset($_POST['username']) || isset($_POST['password']) ) {
		$username = mysqli_real_escape_string($connection,$_POST['username']);
		$password = mysqli_real_escape_string($connection,$_POST['password']);
		$hashed_password = sha1($password);
		
	}
	if (trim($username)==''||trim($hashed_password)=='') {
		echo "username or password is null";
		exit;
		
	}else{
		$query = "SELECT * FROM users WHERE username='{$username}' AND password='{$hashed_password}' LIMIT 1";
		$result_set = mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result_set)==1){
			$_SESSION['username']=$username;
			echo "success";
		}else{
			echo "invalid email or password ";
		}

	}	 
	
	
?>