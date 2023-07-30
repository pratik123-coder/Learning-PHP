<?php
echo "global/Local/Scope Variables in PHP";
echo"<br>";
$a=20;
$b=30;
function pvalue(){
    global $a,$b;
    echo $a." is a global variable";
    echo "<br>";
    echo $b." is a global variable";
}
pvalue();


?>