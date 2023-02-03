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
    $username = $_POST['user'];  
    $password = $_POST['pass'];    
   
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);   
                 

        $sql = "select *from grouplog where username_g = '$username' and password_g = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);    

        if($count == 1){  
           header("location:dashboard.php?username=$username");
        }  
        else{  
            print '<h1>incorrect username or password</h1><br><a href="login.html" style="font-size:25px;">Try again</a>';
           
        }     
        
        // C:\xampp\htdocs\23-1submit

?>  