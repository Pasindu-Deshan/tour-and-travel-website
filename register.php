<?php session_start(); ?>
<?php 
	$connection = mysqli_connect('localhost', 'root', '', 'userdb');
//checking users login
	if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

		if (trim($_POST['username'])==''||trim($_POST['email'])==''||trim($_POST['password'])=='') {
				echo "Field must not be empty";
				exit;
		}else{
		// check email address already exist
		$username=mysqli_real_escape_string($connection,$_POST['username']);
		$query="SELECT*FROM users WHERE username ='{$username}' LIMIT 1";
		$result_set = mysqli_query($connection,$query);

		if(mysqli_num_rows($result_set)==1){
			echo "username already exist";
			exit;
		}else{
			// email already sanitized
			$email =mysqli_real_escape_string($connection,$_POST['email']);
			$password = mysqli_real_escape_string($connection,$_POST['password']);
			$hashed_password = sha1($password);

			$query= "INSERT INTO users(username,email,password )VALUES('{$username}','{$email}','{$hashed_password}')";

			$result = mysqli_query($connection,$query); 
			echo "success";
			exit;
		}
	}	
	
	}
?> 

