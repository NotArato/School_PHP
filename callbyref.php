<?php
function triple(&$realthing)
{
    $realthing = $realthing * 3;
    return $realthing;
}

$val = 10;
triple($val);
echo "Triple = $val;\n";