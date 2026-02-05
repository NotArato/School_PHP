<?php
$za = array("name"=>"Chuck", "course"=> "WA4E");
 
if (array_key_exists('course',$za) ) {
   echo("Course exists\n");
} else {
   echo("Course does not exist\n");
}
 
echo isset($za['name']) ? "name is set\n" : "name is not set\n";
echo isset($za['addr']) ? "addr is set\n" : "addr is not set\n";

echo $za["name"];
?>