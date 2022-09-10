<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Data Types </title>
</head>
<body>
    <p>Variables can store data of different types.PHP supports the following data types:</p>
    <ul>
    <li>String</li>
    <li>Integer</li>
    <li>Float (floating point numbers - also called double)</li>
    <li>Boolean</li>
    <li>Array</li>
    <li>Object</li>
    <li>NULL</li>
    <li>Resource</li>
    </ul>

    <?php
    $helloVariable = "Hello you!";
    $hello_variable = 'Hello you!';
    $x = 8;
    $is_human = true;
    $car_list = ['Lamborgini','Ford','Porsche'];
    $null_variable = NULL;
    $y = 10.0;
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    print($hello_variable);
    echo "<br>";
    print($helloVariable);
    echo "<br>";
    print($is_human);
    echo "<br>";
    print($null_variable);
    echo "<br>";
    print($car_list);    
    ?>
</body>
</html>