<?php      
 
 $host = "localhost";  
 $user = "root";  
 $password = 'jayesh@2512';  
 $db_name = "miniproject";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ". mysqli_connect_error());  
 }
 $username = $_GET['username'];
 $sql="SELECT username_g FROM grouplog INNER Join guidelogin ON grouplog.guide_username=guidelogin.guide_username WHERE guidelogin.guide_username=$username;";
 $result = mysqli_query($con,$sql); 
//  $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups</title>
</head>
<style>
    body {
    background-color:#ca97f4;
    background-size: cover;

}

h1 {
    color:#fff;
    text-align: center;
}
option{
    color: #fff;
    font-size:large;
}
div{
    width: fit-content;
    height: fit-content;
    padding: 10px;
    border: 5px solid rgb(23, 4, 145);
    border-radius: 5px;
    margin: auto;
    margin-top: 5%;
}
a:link {
   color: #fff;
   font-size: 20px;
}

a:hover {
    color: black;
}
</style>
<body>
<div>
        <h1>
        Select the group you want to access!
     </h1>
     <hr style="height: 2px; background-color: #170491; border-color: #170491;">

        <ol>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href=t_dashboard.php?username=".$row['username_g']."><h5>" .$row['username_g']."</h5></a><br>";
            }
            ?>
            </ol>
    </div>
</body>
</html>