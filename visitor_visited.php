<?php
$count=0;
session_start();
$total=$_SESSION['count']+=1;
echo "visitors is visited for this much time ::".$total;
?>