<?php 
	$conn=mysqli_connect("localhost", "root","","user");
	mysqli_select_db($conn,"userlist");
	
	$query="SELECT username,password FROM user";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		if($row["username"]==$_POST["login_id"] && $row["password"]==$_POST["password"])
		{
			header("Location:confirm.html");
		}
		else
		{
			echo "Invalid username and password";
		}
	}
?>