<html>
    <body>
        <?php

           echo"Hello world";
           echo"This is a comment example";

               //scalar types 
           $name = "Suraj";    //string
           $age = 27;          //integer
           $time = 14.45;      //float
           $class = true;      //Boolean 
        
                //compound types
           $student_arr = array("raj","ram","parmatma");

           class student{
                public $marks;
           }

           $stu = new student();
           $stu->marks = 90;

                //special types 
           $null_var = null;

           echo "<br>string :", $name;
           echo "<br>integer :", $age;
           echo "<br>float :" , $time;
           echo "<br>Boolean :", $class;
           echo "<br>Array :",$student_arr[0];

           echo "Null:",$null_var;

        ?>
    </body>
</html>