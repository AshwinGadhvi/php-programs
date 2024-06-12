<?php
$n=7;
$i;
$flag=0;
for($i=2;$i<$n;$i++)
{
    if($n%$i==0)
    {
        $flag=1;
        break;
    }
    
}
if($flag==0)
{
    echo "number is prime ".$n;
}
else
{
    echo "number is not prime".$n;
}
?>
