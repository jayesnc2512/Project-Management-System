<?php      
 
 $host = "localhost";  
 $user = "root";  
 $password = 'jayesh@2512';  
 $db_name = "miniproject";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ". mysqli_connect_error());  
 }
    //connection code ends
    $username = $_POST['t_user'];  
    $Password = $_POST['t_pass'];  
   
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $Password = stripcslashes($Password);  
        $username = mysqli_real_escape_string($con, $username);  
        $Password = mysqli_real_escape_string($con, $Password);  
        
     

        $sql = "SELECT * from grouplog 
                INNER JOIN guidelogin ON grouplog.guide_username = guidelogin.guide_username 
                where guidelogin.guide_username='$username' and guide_password='$Password' ;  
                ";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);

        if($count!=0){  
           $guide_username=$row['guide_username'];
           header("location:groupOptions.php?username='$guide_username'");
        }  
        else{  
            print '<h1>incorrect username or password</h1><br><a href="login.html" style="font-size:25px;">Try again </a>';   
        }     
        

        // C:\xampp\htdocs\23-1submit
?>  