<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>登入帳號</title>
</head>

<form action="" method="post">



登入帳號:<input type="text" name="userid">			<br/>
<br/>
登入密碼:<input type="text" name="userpwd">					<br/>
<br/>
<input type="submit" value="登入">
<input type="reset" value="重填">
</form>


<?php

if(isset($_POST["userid"])){
ob_start();
session_start();
$link=mysqli_connect("localhost","root","123456","mid");
mysqli_query($link,"set name utf8");
$userid=$_POST["userid"];
$userpwd=$_POST["userpwd"];
$sql="SELECT * FROM user WHERE userid='$userid' AND userpwd='$userpwd'";
$result=mysqli_query($link, $sql);
$rows=mysqli_num_rows($result);
if($rows){
	echo "Success";
	$_SESSION["check"]="yes";
	$_SESSION["id"]=$userid;
	$_SESSION["pass"]=$userpwd;
	header('Location:index.php');
}else{
	echo "Failed, Will back to login page after 3 second";
}
}
?>
</html>