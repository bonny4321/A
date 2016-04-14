<?php
$no=$_GET["no"];

$link=mysqli_connect("localhost","root","123456","mid");

$read="SELECT * FROM user WHERE No=".$no;
$readresult=mysqli_query($link,$read);
$result=mysqli_fetch_array($readresult);

echo "<form action='updateresult.php' method='post'>";
echo "編號:".$result[0]."<br/>";
echo "<input type='hidden' name='no' value='".$result[0]."'>";
echo "userid:<input type ='text' name='userid' value='".$result[1]."'><br/>";
echo "userpassword:<input type ='text' name='userpassword' value='".$result[2]."'><br/>";
echo "phone:<input type ='int' name='phone' value='".$result[3]."'><br/>";
echo "email:<input type ='text' name='email' value='".$result[4]."'><br/>";
echo "<input type='submit' value='更新'>";
echo "<input type='reset'>";
echo "<td><a href='checkdel.php?no=".$result[0]."'>刪除帳號</a></td>";
echo "</form>";
?>