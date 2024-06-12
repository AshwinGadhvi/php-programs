<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" onclick="mohit_call()">
        <select name="payment" id="sel1">
            <option value="nothing">Select the Payment Mode</option>
            <option value="Stripe" >Stripe</option>
            <option value="Cash" >Cash</option>
        </select>
        <input type="submit" value="Button1" id="btn1" name="btn1">
        <input type="submit" value="Button2" id="btn2" name="btn2">
    </form>
</body>
<script>
    function mohit_call()
    {
        var op = document.getElementById("sel1").value;
        if(op.match("Stripe"))
        {
        
            document.getElementById("btn1").disabled=true; 
            document.getElementById("btn2").disabled=false;   
        }
        else if(op.match("Cash"))
        {
            document.getElementById("btn1").disabled=false;   
            document.getElementById("btn2").disabled=true;
        }
    }
</script>
</html>