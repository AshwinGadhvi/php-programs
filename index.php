<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function showUser()
        {

        
        if(window.XMLHttpRequest)
        {
            xmlhttp = new XMLHttpRequest();
        }
        else{
            xmlhttp = new ActiveXObject("op");
        }
        xmlhttp.onreadystatechange = function()
        {
            if(xmlhttp.readyState==4 && xmlhttp.status == 4)
            {
                document.getElementsById("ans").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.opne("GET","GET_USER.php",true);
        xmlhttp.send();
    }
    </script>    
</head>
<body>
    <div style="align:center">
    <button id="ha" onclick="showUser()">Fetch Data</button>
    <div id="ans"></div>
</div>
</body>
</html>