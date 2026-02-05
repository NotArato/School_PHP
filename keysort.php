<?php
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";
$za["topic"] = "PHP";
echo "<pre>\n";
print_r($za);
ksort($za);
print_r($za);
asort($za);
print_r($za);
?>