<?php
session_start();
include 'dbconnect.php'; //database connection page

if(isset($_POST['submit]))
{
    
//    $url = 'https://www.google.com/recaptcha/api/siteverify';
//    $privatekey = "6LfTwkAUAAAAABv0qaagKeb3f_WpISGvWkTXRsGN";
//    $response = file_get_contents($url . "?secret=" . $privatekey . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
//    $data = json_decode($response);
//
//    if (isset($data->success) AND $data->success == true)
    // {
        
        
    
	$username=$_POST["email"];   //username value from the form
	$pwd=($_POST["Password"]);	//password value from the form
	//print_r($pwd);
       
	 $sql="select * from tbl_users where username='$username' and password ='$pwd' and status=1"; 
	//value querried from the table
	$res=mysqli_query($con,$sql);
	$fetch = mysqli_fetch_array($res);
	//query executing function
	 if($res)
{
	 if($fetch['status']==0)
	{
		
		?>
		<script>
		alert("You are Blocked...!!!");
		location.href="admin/admin.php";
		</script>
		<?php
		//header("Location:admin/index.php");
		?>
		<?php
		
	}
		else
		{

		
		if($fetch['usertype']==0)   
		{
		  
			///$_SESSION["name"]=$fetch['name'];
			$_SESSION["login_id"]=$fetch['login_id'];
			$_SESSION["username"]=$username;	// setting username as session variable 
			$_SESSION["usertype"]=$fetch['usertype'];
			header("location:admin/admin.php");	//home page or the dashboard page to be redirected
	    }
		elseif($fetch['usertype']==2)   
		{
			$_SESSION["username"]=$username;	// setting username as session variable 
			$_SESSION["login_id"]=$fetch['login_id'];
			$_SESSION["usertype"]=$fetch['usertype'];
			header("location:emp/index.php");
	    }
		elseif($fetch['usertype']==3)   
		{
			$_SESSION["username"]=$username;	// setting username as session variable 
			$_SESSION["login_id"]=$fetch['login_id'];
			$_SESSION["usertype"]=$fetch['usertype'];
			header("location:dealer/dealer.php");
	    }
	    elseif($fetch['usertype']==4)   
		{
			$_SESSION["username"]=$username;	// setting username as session variable 
			$_SESSION["login_id"]=$fetch['login_id'];
			$_SESSION["usertype"]=$fetch['usertype'];
			header("location:user/index.php");
	    }
	else
	{
		
		?>
		<script>
		alert("You are Blocked...!!!");
		</script>
		<?php
	}
    
  }
}
	}
?>