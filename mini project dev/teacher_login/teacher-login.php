<?php      
 
 $host = "localhost";  
 $user = "root";  
 $password = '';  
 $db_name = "javatpoint";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ". mysqli_connect_error());  
 }
    //connection code ends
    $username = $_POST['t_user'];  
    $tPassword = $_POST['t_pass'];  
   
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $tPassword = stripcslashes($tPassword);  
        $username = mysqli_real_escape_string($con, $username);  
        $tPassword = mysqli_real_escape_string($con, $tPassword);  
        
     

        $sql = "select * from guide where username = '$username' and tPassword = '$tPassword'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1){  
           header("location:t_dashboard.php?username='$username'");
        }  
        else{  
            print '<h1>incorrect username or password</h1><br><a href="login.html" style="font-size:25px;">Try again</a>';
           
        }     
        

        // C:\xampp\htdocs\23-1submit
?>  