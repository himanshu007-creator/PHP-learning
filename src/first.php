<?php

if(isset($_POST["submit"]))
{
	if(empty($_POST["uname"]))
	{
		echo "please enter the name";
	}
	else if(empty($_POST["pwd"]))
	{
		echo "please enter the Password";
	}
	else
	{
$name=$_POST["uname"];
$pwd=$_POST["pwd"];
echo $name.$pwd;
	}
}
?>

<!doctype html>

<html>

	<head>
		<title>PHP Form</title>
		<meta charset="utf-8">	

		<style>
		.error {
			color: red;
		}
		</style>
		
	</head>

<body>

<form name="employment" action="" method="post"> 
 <table width="600" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td><h2>Employment Application</h2></td>
      <td></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td><input type="text" name="uname" maxlength="50" />
	  </td>
    </tr>
	<tr>
      <td>Password</td>
      <td><input type="password" name="pwd" maxlength="50" />
	  </td>
    </tr>
    <tr>
  
    <tr>
      <td></td>
      <td>
	  
	  <input type="submit" name="submit" value="Submit" />
	  <input type="reset" name="reset" value="Reset" />
	  
	  </td>
    </tr>
  </table>
</form>

</body>
</html>
