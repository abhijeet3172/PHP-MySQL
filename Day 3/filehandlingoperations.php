<html> 
    <body> 
        <?php
        //File Handling Operations

        //create a new file 
        $file = fopen("Student.txt","w");
        //fclose($file);
        echo "File has been created";

        //Written in a new file 
        fwrite($file,"Hello Student File !! \n this is test file");
        echo "<br> Text File has been Inserted";
        fclose($file);

        //Read a file 
        echo "<br>";
        $file_read = fopen("Student.txt","r");
        while(!feof($file_read)){
            echo fgets($file_read)."<br>";
        }
        fclose($file_read);

        //Deleting a file 
        if(file_exists("Student.txt")){
            unlink("Student.txt");
            echo "<br><br> File has been deleted !!";
        }
        else{
            echo "<br><br> File not found";
        }
        

        ?>
    </body>
</html>