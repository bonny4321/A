<?php
class PostOffice{

    function mailFiler(){

    $myfile = fopen("string.txt", "r") or die("Unable to open file!");
   echo fgets($myfile);
   fclose($myfile);


    }
    function mailRegex(){

    $myfile = fopen("string.txt", "r") or die("Unable to open file!");
      //echo fgets($myfile);
     $input = fgets($myfile);
     $cleaned = preg_replace("/[^A-Za-z0-9 ]/", "", $input);
     fclose($myfile);
     echo $cleaned;
     }
     function spilroad(){

    $myfile = fopen("road.txt", "r") or die("Unable to open file!");
      //echo fgets($myfile);
     $string = fgets($myfile);
     echo $string;
     }
}
$PostOffice = new PostOffice;
$PostOffice->mailFiler();

$PostOffice = new PostOffice;
$PostOffice->mailRegex();

$PostOffice = new PostOffice;
$PostOffice->spilroad();

?>