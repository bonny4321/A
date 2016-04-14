<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>申辦帳號</title>
</head>
<form action="" method="post">

<font color=blue><font size="30">新使用者註冊</font></font>
<br/>
<br/>
<br/>
<p align="center">
帳號:<input type="text" name="userid">			<br/>
<br/>
密碼:<input type="text" name="userpwd">					<br/>
<br/>
電話號碼:<input type="int" name="phone">	<br/>
<br/>
E-mail:<input type="text" name="email">			<br/>
<br/>

</p>
<input type="submit" value="送出資料">
<input type="reset" value="清除重填">
</center>
</form>
</html>

<?php
$phone=$_POST["phone"];
$userid=$_POST["userid"];
$userpwd=$_POST["userpwd"];
$email=$_POST["email"];
$link=mysqli_connect("localhost","root","123456","mid");
mysqli_query($link,"set name utf8");
$add="INSERT INTO user(userid,userpwd,phone,email) VALUES('$userid','$userpwd','$phone','$email')";
$sql = "SELECT * FROM user WHERE userid = '".$userid."'";

$readresult=mysqli_query($link,$sql);
$result=mysqli_fetch_array($readresult);
if($result[1]=="$userid"){
	echo "帳號已使用";
	header('refresh:3; url="reg.php"');
}else{
mysqli_query($link,$add);
echo "帳號申辦成功";
header('refresh:3; url="index.php"');
}
?>