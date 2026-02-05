<?php

$prices = array("item" => "iPhone", "cost" => "1000$");

foreach ($prices as $key => $v) {
    echo "The " . $prices["item"] . " cost " . $prices["cost"];
    break; 
}
