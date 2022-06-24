<?php

# Exercise #10

//See [calculate-area.php](./calculate-area.php)
//
//Design a Geometry class with the following methods:
//
//- A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
//  - Area = π * r * 2
//      - Use Math.PI for π and r for the radius of the circle
//- A static method that accepts the length and width of a rectangle and returns the area of the rectangle.
//  Use the following formula:
//  - Area = Length x Width
//- A static method that accepts the length of a triangle’s base and the triangle’s height.
//The method should return the area of the triangle. Use the following formula:
//  - Area = Base x Height x 0.5
//
//The methods should display an error message if negative values are used for the circle’s radius,
//                                                                            the rectangle’s length or width, or the triangle’s base or height.
//
//Next write a program to test the class, which displays the following menu and responds to the user’s selection:
//
//```
//Geometry calculator:
//
//Calculate the Area of a Circle
//Calculate the Area of a Rectangle
//Calculate the Area of a Triangle
//Quit
//Enter your choice (1-4):
//```
//
//Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu.

echo "Geometry Calculator\n";


?>

<html>

    <head>
        <title>PHP Program To find Area and Circumference of a Circle</title>
    </head>
    <body>
    <h3> 1. Calculate the Area of a Circle </h3>
        <form method="post">
            Radius: <input type="text" name="num1" value=""/>
            <input type="submit" name = "submit" value="Submit"/>
        </form>

        <?php
        if(isset($_POST['submit']))
        {
            $r = $_POST['num1'];
            $pi = 3.14;
            $area = $pi * $r * $r;
            echo "Area of a Circle is: ".$area;
            $cir = 2*$pi*$r;
            echo "Circumference of a circle is: " .$cir;
            return 0;
        }
        ?>

        <h3> 2. Calculate the Area of a Rectangle </h3>
        <form method = "post">
            Width: <input type="number" name="width">
            <br><br>
            Length: <input type="number" name="length">
            <input type = "submit" name = "submit2" value="Calculate">

        </form>
        </body>
        </html>
        <?php

        if(isset($_POST['submit2']))
        {
            $width = $_POST['width'];
            $length = $_POST['length'];
            $area = $width*$length;
            echo "The area of a rectangle with $width x $length is $area";
        }
        ?>

        <h3> 3. Calculate the Area of a Triangle </h3>
        <form method = "post">
            Base: <input type="number" name="base">
            <br><br>
            Height: <input type="number" name="height">
            <input type = "submit" name = "submit3" value="Calculate">
        </form>
        </body>
        </html>
        <?php
        if(isset($_POST['submit3']))
        {
            $base = $_POST['base'];
            $height = $_POST['height'];
            $area = ($base*$height) / 2;
            echo "The area of a triangle with base as $base and height as $height is $area";
        }
        ?>

</body>

</html>
