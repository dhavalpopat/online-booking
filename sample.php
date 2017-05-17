<?php

$txt1 = $_POST["email"];

$txt2 = $_POST["password"];

/* data.json file will be automatically created and the values i.e. email ID and password 
will be stored in it and updated dynamically every time the user logs in */

$file = file_get_contents('data.json', true);
$len = strlen($file);
$arr = array('email' => $txt1, 'password' => $txt2);

$myfile = fopen("data.json", "w") or die("Unable to open file!");

if(fgetc($myfile)!="[")
{
$b="[";
fwrite($myfile, $b);

fwrite($myfile, json_encode($arr));
$b1="]";
fwrite($myfile, $b1);
}
header('location:Login.html');

fclose($myfile);
?>