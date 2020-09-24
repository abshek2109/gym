<?php
    
	$server="localhost";
	$username="root";
	$password="";
	$db="gym";


	$conn = mysqli_connect($server,$username,$password,$db) or die ("connection failed");


	session_start();


	$username = $_POST['email'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];

	$sql="INSERT INTO contact ( `name`, `email`, `mobile`,`message`) VALUES ( '$name', '$username', '$mobile', '$message')";

	
if(mysqli_query($conn,$sql)){
//echo"sucess"
	//echo "<scrtip>alert"We Will Contact You Soon"</script>";
	header("Location:http://localhost/PBL/home.html");
;
	}else{
		//echo "fail";

	header("Location:http://localhost/PBL/Contact.html");
;
}

?>

