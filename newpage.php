<?php

    echo "name is : ".$_POST['name'];
    echo "<br>";
    if(isset($_POST['sub']))
    {
        if(!empty($_POST['chk1']))
        {
            foreach($_POST['chk1'] as $value)
            {
                echo $value;
            }
        }
    }
    echo "<br>";
    echo "gender is : ".$_POST['gender'];
    echo "<br>";
    echo "sekec is : ".$_POST['select'];
?>