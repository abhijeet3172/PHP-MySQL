<html>
<body>
     <?php

    // a. Concatenation
    $firstName = "Abhijeet";
    $lastName = "Pawar";
    $fullName = $firstName . $lastName;
    echo "<br> Concatenation : ". $fullName;
    
    // b. String Length
    $stringLength = strlen($fullName);
    echo "<br> String Length : " . $stringLength;
    
    // c. Substring Extraction
    $substring = substr($fullName, 0, 3);
    echo "<br> Substring Extraction : " . $substring;
    
    // d. Case Conversion
    
    echo "<br> Uppercase : ".strtoupper($fullName);
    echo "<br> Lowercase : ".($fullName);
    echo "<br>Uppercase First Letter : ".ucfirst(strtolower($firstName));
    echo "<br> Uppercase Words : ".ucwords(strtolower($fullName));
    
    // e. Trimming
    $string1= "Abhijeet";
    $string2="Pawar";
    $trimmedString = $string1.$string2;
    echo "<br> Trimmed (Both Sides) : " . trim($trimmedString);
    echo "<br> Trimmed (Left)  : " . ltrim($string1);
    echo "<br> Trimmed (Right)  : " . rtrim($string2);

    // f. Reverse a String
    $stringreversed= strrev($fullName);
    echo "<br> Reversed a String : ".$stringreversed;

    //g.Compare two strings (case sensitive)
    $first1 = "Abhijeet";
    echo strcmp($First_name, $first1)."<br>";

    //h.Compares two strings (case insensitive)
    echo strcasecmp($First_name ,$first1)."<br>";

    ?>
    
    

</body>
</html>
