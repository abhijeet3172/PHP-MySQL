<html>
    <body>
        <?php

        // a.Arithmetic Operations
        
        //Addition(+)
        $num1=5;
        $num2=2;
        $sum=$num1+$num2;
        echo " <br> Addition : " .$sum;

        //Subtraction(-)
        $num1=15;
        $num2=8;
        $diff=$num1-$num2;
        echo "<br> Subtraction : ".$diff;

        //Multiplication(*)
        $num1=7;
        $num2=1;
        $mul=$num1*$num2;
        echo "<br> Multiplication : ".$mul;

        //Division(/)
        $num1=14;
        $num2=2;
        $div=$num1/$num2;
        echo "<br> Division : ".$div;

        //Modulus(%)
        $num1=23;
        $num2=8;
        $mod=$num1 % $num2;
        echo "<br> Modulus : ".$mod;

        // Round up Function
        $num1=23;
        $num2=8;
        $mod=$num1 % $num2;
        echo "<br> <b> Modulus </b>: ".$mod;

        //b. Round up Function
        $num1=6.9;
        echo "<br> Round Up: ".ceil(num: $num1);

        //c. Round down to the nearest integer
        $num1=7.1;
        echo "<br> Round down: ".floor(num: $num1);

        //d. Returns the square root
        $num1=49;
        echo "<br> Returns square root: ".sqrt(num: $num1);

        //e. Generates a random number between $min and $max
        $min=1;
        $max=100;
        echo "<br> Random number: ".rand(min: $min, max: $max);





        ?>


    </body>
</html>