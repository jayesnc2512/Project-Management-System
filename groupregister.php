<?php      

 $host = "localhost";  
 $user = "root";  
 $password = 'jayesh@2512';  
 $db_name = "miniproject";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ".mysqli_connect_error());  
 }
    //connection code ends
        $name1 =  $_REQUEST['name1'];
        $rollno1 =  $_REQUEST['rollno1'];
        $name2 = $_REQUEST['name2'];
        $rollno2 = $_REQUEST['rollno2'];
        $name3 =  $_REQUEST['name3'];
        $rollno3 =  $_REQUEST['rollno3'];
        $name4 =  $_REQUEST['name4'];
        $rollno4 =  $_REQUEST['rollno4'];

         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO grouplog (name_1, rollno_1, name_2, rollno_2, name_3, rollno_3, name_4, rollno_4) VALUES ('$name1','$rollno1',
            '$name2','$rollno2','$name3','$rollno3','$name4','$rollno4')";
         $con->query($sql)==true;

       
        
        // C:\xampp\htdocs\23-1submit

?>  