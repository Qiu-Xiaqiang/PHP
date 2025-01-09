<?php

?>
<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin-left: 10%;
        }
        label{
            color: #ff8c4e;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h2>Prova Form</h2>
<form method="post" action="display.php">

    <label for="name">Enter your name</label><br>
    <input id="name" type="text" name="name" placeholder="your name"><br><br>

    <label for="password">Enter your password</label><br>
    <input id="password" name="password" type="password" placeholder="password"><br><br>

    <label for="comment">Leave a comment</label><br>
    <textarea id="comment" name="comment" rows="5" cols="30"></textarea><br>

    <label for="gender">Choose your gender</label><br>
    <input id="gender" name="gender" type="radio" value="male">Male<br>
    <input id="gender" name="gender" type="radio" value="female">Female<br>
    <input id="gender" name="gender" type="radio" value="american">American<br><br>

    <label for="box">Choose your gender</label><br>
    <input id="box" type="checkbox" name="box[]" value="pepperoni">pepperoni<br>
    <input id="box" type="checkbox" name="box[]" value="mushroom">mushroom<br>
    <input id="box" type="checkbox" name="box[]" value="olives">olives<br><br>

    <label for="car">Choose your car</label><br>
    <select id="car" name="car">
        <option value="volvo">Volvo</option>
        <option value="mazda">Mazda</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
    </select><br><br>

    <label for="carList">Choose a car</label><br>
    <select id="carList" size="4" name="carList">
        <option value="volvo">Volvo</option>
        <option value="mazda">Mazda</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
    </select>

    <input type ="submit" value="submit">

</form>
<h2 id="demo"></h2>
<script>
    function myDisplay(data)
    {
        document.getElementById("demo").innerHTML = data;
    }
    function myCal(num1, num2, myDisplay)
    {
        let sum = num1 + num2;
        myDisplay(sum);
    }
    myCal(5,7,myDisplay);
</script>
</body>
</html>

