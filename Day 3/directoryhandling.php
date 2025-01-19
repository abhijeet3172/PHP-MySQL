<html> 
    <body> 
        <?php 
        //Directory Handling Operations

        //Create a Directory
        if(!is_dir("phpDAY 3_Directory")){
            mkdir("phpDAY 3_Directory");
            echo "Directory Created";
        }
        else{
            echo "Directory already exsits !";
        }
          echo"<br>";


        //check if the directory exists
        if(is_dir("phpDAY 3_directory")){
            echo "Directory Exits";
        }
        else{
            echo "Directory does not exists !";
        }
         echo"<br>";

        //List the files inside the folder
        $files = scandir("phpDAY 3_Directory");
        foreach($files as $file){
            echo $file. "<br>";
        }

         echo"<br>";
        //change the directory
        echo" current the directory :".getcwd();
        chdir("phpDAY 3_Directory");
        echo"<br> New Current Directory :".getcwd();

        echo"<br>";
        //delete the files inside the directory
        $delete_files = scandir(".");
        foreach($delete_files as $file){
            if($file!=="." && $file!==".."){
                unlink($file);
            }
            echo "Files Deleted !";
        }

        //Delete Dirrctory
        
        chdir("..");
        echo"<br> Current Directory :".getcwd();
        if(is_dir("phpDAY 3_Directory")){
            rmdir("phpDAY 3_Directory");
            echo "Directory Removed";
        }
        else{
            echo "Directory does not exists!";
        }
         
        ?>
    </body>
</html>