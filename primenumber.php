<html>
    <head>
        <title>PHP Script to print prime numbers!</title>
    </head>
    <body>
        <h2>Print 1 to 100 prime number by ashwin gadhvi </h2>
        <form method="post">
            Enter the limit:  <input type="number" name="limit" min="0" /><input type="submit" value="submit" name="print" />
        </form>
    </body>
</html>
 
<?php
//check if the form is submitted 
if (isset($_POST['print']) && $_POST['print']) {
 
    $i = $j = 0;
    $limit = $_POST['limit'];
 
    //loop till $i equals to $limit
    for ($i = 1; $i <= $limit; $i++) {
        $c = 0;
        
        for ($j = 1; $j <= $i; $j++) {
            // % modules will give the reminder value, so if the reminder is 0 then it is divisible
            if ($i % $j == 0) {
                //increment the value of $c
                $c++;
            }
        }
 
        //if the value of $c is 2 then it is a prime number
        //because a prime number should be exactly divisible by 2 times only (itself and 1)
        if ($c == 2) {
            print $i . "<br>";
        }
    }
}
?>