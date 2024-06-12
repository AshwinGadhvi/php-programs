<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="newpage.php" method="POST">
        name : <input type="text" name="name" id="n1">
        <br>
        subject : <input type="checkbox" name="chk1[]" value="maths">maths <input type="checkbox" name="chk1[]" value="science">science
        <br>
        gender : <input type="radio" name="gender" id="n11" value="male">Male <input type="radio" name="gender" id="n12" value="female">Female
        <br>
        sem : <select name="select" id="s1">
            <option>1st</option>
            <option>2nd</option>
            <option>3rd</option>
            <option>4th</option>
            <option>5th</option>
            <option>6th</option>
        </select>
        <br>
        <input type="submit" name="sub" value="submit">
    </form>
    
</body>
</html>