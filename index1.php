<?php
class PostOffice{

    function mailFiler(){

    $myfile = fopen("string.txt", "r") or die("Unable to open file!");
   echo fgets($myfile);
   fclose($myfile);


}
}
$PostOffice = new PostOffice;
$PostOffice->mailFiler();
?>