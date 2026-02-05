<?php

date_default_timezone_set('Cambodia/Phnom_Penh');

$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:       '. date('d-m-Y') ."<br>";
echo 'Next Week: '. date('d-m-Y', $nextWeek) ."<br>";

echo("=====<br>");

$now = new DateTime();
$nextWeek = new DateTime('today +1 week');
echo 'Now:       '. $now->format('d-m-Y') ."<br>";
echo 'Next Week: '. $nextWeek->format('d-m-Y') ."<br>";

