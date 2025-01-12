<html> 
    <body> 
        <?php
        //Functions 
        function firstfunction(){
            echo "Hello world !";
        }
        firstfunction();

        //With parameter function 
        function greet($name){
            echo "<br>Hello".$name; 
        }
        greet("class");

        //With Default parameter function 
        function defaultparameter($name = "Guest"){
            echo "<br> Hello".$name;
        }
        defaultparameter();
        defaultparameter("Default parameter !");

        //Function that returns a value 
        function multiply($a,$b){
            return $a*$b;
        }
        $result = multiply(8,9);
        echo"<br>".$result;
         
        //Function by value example
        function addTen($num){
            $num +=10;
            echo"<br> function value :".$num;
        }
        $x=5;
        addTen($x);
        echo"<br> original value :".$x;
        echo"<br>";

        //Function by value example
        function addTenByRefer(&$num){
            $num +=10;
            echo"<br> function value :".$num;
        }
        $y=5;
        addTenByRefer($y);
        echo"<br> original value :".$y;
        echo"<br>";

        //Early Returning the values in function(conditional return)
        function checkEvenOdd($num){
            if ($num % 2 == 0){
            return "Even";
           }
           return "odd";
        }
        echo "<br>";
        echo checkEvenOdd(18);
        echo "<br>";
        echo checkEvenOdd(15);

        ?>
    </body>
</html>