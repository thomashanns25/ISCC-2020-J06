<?php

$x=0;
$y=0;

function compter($x)
{
    while($x<=10)
{
    echo ''.$x.'<br>';
    $x=$x + 1;
}
}
compter($x);


function compter_for($y)
{
    for($y=1; $y<=10; $y=$y + 1)
{
    echo ''.$y.'<br>';
}
}
compter_for($y);

?>