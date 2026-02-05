<?php
require_once"config.php";
$unInput = isset($_POST['username']) ? $_POST['username'] : "";
?>

<body>
    <div style="background-color:silver; margin:20px; padding:10px; text-align:center; font-size:150%">
        <h3>Login</h3>
        <form method="post">
            <p>
               <label for="username">Username: </label>
               <input type="text" name="username" size="40" id="username" value="<?= $unInput?>" required=""/>
            </p>
            <p>
               <label for="password">Password: </label>
               <input type="password" name="password" size="40" id="password" required=""/>
            </p>

            <input type="submit" name="Login" value="Login"/>
        </form>
    </div>
    <?php
if(isset($_REQUEST['Login']))
{
	extract($_REQUEST);
	$query="SELECT * FROM `account` where username='$username' and password='$password'";

	$login_data=select($query);
	$n = mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);

		}

		//$_SESSION['image']=$image;
		$_SESSION['loginstu']="yes";

		//print_r($_SESSION);

		echo"<script>alert('Login Success');
		 window.location='https://youtu.be/dQw4w9WgXcQ?si=GzbejziOg_P0e9ro';
		 </script>";
	}
	else
	{
		echo"username or password is incorrect";
	}

}
?>
</body>