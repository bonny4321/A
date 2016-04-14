<?php
$no=$_GET["no"];

$link=mysqli_connect("localhost","root","123456","mid");
$del="DELETE FROM user WHERE No=".$no;
mysqli_query($link,$del);

$read="SELECT * FROM user";
$readresult=mysqli_query($link,$read);
	echo "<table border='1'>";
	echo "<tr><td>使用者編號</td><td>userid</td><td>userpassword</td><td>phone</td><td>email</td><td>確定刪除</td>";
while($result=mysqli_fetch_array($readresult)){

	echo"<tr>";
	echo"<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td>";
	echo"<td><a href='profile.php?no=".$result[0]."'>刪除資料</a></td>";
	echo"</tr>";
}
	echo"</table>";
?>