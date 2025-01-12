<html> 
    <body>
    <?php
    //control statement
    $name = "Ajay";
    if($name == "Abhijeet"){
        echo $name." Name is correct";
    }
    else{
        echo $name." Name is not correct";
    }

    
    
    //conditional statement if and if-else
    $marks = 91;
    
    if ($marks >= 80){
        echo "<br> You got Grade A";
    }
    elseif($marks >= 60){
        echo "<br> You got Grade B";
    }
    elseif($marks >=40){
        echo "<br> You got Grade C";
    }
    else{
        echo "<br> You got Grade D";
    }


    //conditional statement switch
echo "<br>";
    $day = "Sunday";
    switch($day){
        case "Sunday":
            echo "its Sunday !!!";
            break;
        case "Monday":
            echo "its Monday !!!"; 
            break;
        case "Tuesday":
            echo "its Tuesday !!!";
            break;
        case "Wednesday":
            echo "its Wednesday !!!";
            break;
        case "Thrusday":
            echo "its Thrusday !!!";
            break;
        default;
            echo "No matching day found !!";
        }
    
    //Iteratic control statement While loop 
    echo"<br>";

    $count = 1;
    while($count <= 10){
        echo "<br> count is ".$count;
        $count++;
    } 


    ?>
    </body>
    </html>



    
