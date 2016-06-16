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

	function CatchStr($string, $StaKey, $EndKey){
		$StaPos = strpos($string, $StaKey);
		$EndPos = strpos($string, $EndKey);
		$StaLen = strlen($StaKey);
		$EndLen = strlen($EndKey);
		$CatchKey = substr($string, $StaPos + $StaLen , $EndPos - $StaPos - $EndLen);
		$OtherKeyA = substr($string, 0, $StaPos);
		$OtherKeyB = substr($string, $EndPos + $EndLen);
		return array($CatchKey, $OtherKeyA, $OtherKeyB);
    }

     function spilroad(){

    $myfile = fopen("road.txt", "r") or die("Unable to open file!");
      //echo fgets($myfile);
     $string = fgets($myfile);
     $StrArray = CatchStr($string, "", "路");
     echo $StrArray;
     }
}
$PostOffice = new PostOffice;
$PostOffice->mailFiler();

$PostOffice = new PostOffice;
$PostOffice->mailRegex();

$PostOffice = new PostOffice;
$PostOffice->spilroad();

?>