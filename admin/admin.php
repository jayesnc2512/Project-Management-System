<?php      
 
 $host = "localhost";  
 $user = "root";  
 $password = 'jayesh@2512';  
 $db_name = "miniproject";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ". mysqli_connect_error());  
 }

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
 </head>
 <body>
    <h1>Admin Page</h1>
    <h3>Guide Management</h3>
    <table>
        <tr>
            <th>
                Guide Name 
            </th>
            <th>
                Guide username
            </th>
            <th>
                Guide Password
            </th>
            <th>
                Role
            </th>
        </tr>
<?php
$sql="select * from guidelogin";
$result = mysqli_query($con, $sql); 
while ($row = mysqli_fetch_assoc($result)){
        print "<tr><td>".
        $row['guide_name'].
        "</td><td>".
        $row['guide_username'].
        "</td><td>".
        $row['guide_password'].
        "</td><td>".
        $row['guide_role'].
        "</td></tr>";

}
?>  
        <form method="post">
        <tr>
            <td>
                <input name="guide-name" placeholder="Name Of Guide" type="text">
            </td>
            <td>
                <input name="guide-username" placeholder="Username" type="text">
            </td>
            <td>
                <input name="guide-password" placeholder="Password" type="text">
            </td>
            <td>
                <select name="role">  
                <option value="Guide">Guide</option>  
                <option value="coordinator">Coordinator</option>
            </select>
            </td>
        </tr>
    </table>
        <button type="submit" name="submit">Add</button>
        </form>

<?php
         if (isset($_POST["submit"])){
        // Taking all 5 values from the form data(input)
        $guide_name =  $_REQUEST['guide-name'];
        $guide_username =  $_REQUEST['guide-username'];
        $guide_password = $_REQUEST['guide-password'];
        $role = $_REQUEST['role'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO guidelogin  VALUES ('$guide_name','$guide_username',
            '$guide_password','$role')";
         $con->query($sql)==true;
         echo "Guide Added";
         error_reporting(0);

         }
?>     
        
        
        <h3> Group Assigning</h3>
        <table>
        <tr>
            <th>
                Sr. no.
            </th>
            <th>
                Group Username
            </th>
            <th>
                Group Password
            </th>
            <th>
                Name 1
            </th>
            <th>
                Roll no. 1
            </th>
            <th>
                Name 2
            </th>
            <th>
                Roll no. 2
            </th>
            <th>
                Name 3
            </th>
            <th>
                Roll no. 3
            </th>
            <th>
                Name 4
            </th>
            <th>
                Roll no. 4
            </th>
            <th>
                Project Title
            </th>
            <th>
                Project Domain
            </th>
            <th>
                Guide Username
            </th>
            <th>
                
            </th>
        </tr>
<?php
$sql="select * from grouplog";
$result = mysqli_query($con, $sql); 
while ($row = mysqli_fetch_assoc($result)){
    $id=$row['group_id'];
        if($row['count']==2){
        
        print "<tr><td>".
        $row['group_id'].
        "</td><td>".
        $row['username_g'].
        "</td><td>".
        $row['password_g'].
        "</td><td>".
        $row['name_1'].
        "</td><td>".
        $row['rollno_1'].
        "</td><td>".
        $row['name_2'].
        "</td><td>".
        $row['rollno_2'].
        "</td><td>".
        $row['name_3'].
        "</td><td>".
        $row['rollno_3'].
        "</td><td>".
        $row['name_4'].
        "</td><td>".
        $row['rollno_4'].
        "</td><td>".
        $row['project_title'].
        "</td><td>".
        $row['project_domain'].
        "</td><td>".
        $row['guide_username'].
        "</td></tr>";  
        } 

        elseif($row['count']==1){

            print "<tr><td>".
            $row['group_id'].
            "</td><td>".
            $row['username_g'].
            "</td><td>".
            $row['password_g'].
            "</td><td>".
            $row['name_1'].
            "</td><td>".
            $row['rollno_1'].
            "</td><td>".
            $row['name_2'].
            "</td><td>".
            $row['rollno_2'].
            "</td><td>".
            $row['name_3'].
            "</td><td>".
            $row['rollno_3'].
            "</td><td>".
            $row['name_4'].
            "</td><td>".
            $row['rollno_4'].
            "</td><td>
            <form method='post'><input type='text' name='project-title' placeholder='project-title' >
            </td><td>
            <input type='text' name='project-domain' placeholder='project-domain'>
            </td><td>".
            $row['guide_username'].
            "</td><td>
            <button type='submit' name='submit@2'>Modify</button></form>
            </td></tr>";
            
            if (isset($_POST["submit@2"])){
                // Taking all 5 values from the form data(input)
                $title =  $_REQUEST['project-title'];
                $domain =  $_REQUEST['project-domain'];

                 
                // Performing insert query execution
                // here our table name is college
                $sql1 = "UPDATE grouplog
                        SET project_title ='$title' , project_domain= '$domain'
                        WHERE group_id='$id';";
                 $con->query($sql1)==true;
                 echo "Modified";
            $sql2= "UPDATE grouplog SET count =2";
            $con->query($sql2)==true;
            }
    }
        else if($row['count']==0){
        
        print "<tr><td>".
        $row['group_id'].
        "</td><td>
        <form method='post'><input type='text' name='Username' placeholder='Username'>
        </td><td>
        <input type='text' name='Password' placeholder='Password'>
        </td><td>".
        $row['name_1'].
        "</td><td>".
        $row['rollno_1'].
        "</td><td>".
        $row['name_2'].
        "</td><td>".
        $row['rollno_2'].
        "</td><td>".
        $row['name_3'].
        "</td><td>".
        $row['rollno_3'].
        "</td><td>".
        $row['name_4'].
        "</td><td>".
        $row['rollno_4'].
        "</td><td>".
        $row['project_title'].
        "</td><td>".
        $row['project_domain'].
        "</td><td>
        <input type='text' name='Guide' placeholder='Guide' >
        </td><td>
        <button type='submit' name='submit@1'>Add</button></form>
        </td></tr>";  

        if (isset($_POST["submit@1"])){
            // Taking all 5 values from the form data(input)
            $username =  $_REQUEST['Username'];
            $password =  $_REQUEST['Password'];
            $guide =  $_REQUEST['Guide'];

             
            // Performing insert query execution
            // here our table name is college
            $sql1 = "UPDATE grouplog
                    SET username_g ='$username' , password_g= '$password', guide_username='$guide'
                    WHERE group_id='$id';";
             $con->query($sql1)==true;
             echo "Added";
        $sql2= "UPDATE grouplog SET count =1 where group_id='$id';";
        $con->query($sql2)==true;

        }    
        }
    }        
    
?>  
</table>
<h3>
    Get Interaction sheets
</h3>
<table>
    <tr>
    <th>
        group username 
    </th>
    <th>
        Interaction sheet
    </th>
    </tr>
<?php
$sql="select * from grouplog";
$result = mysqli_query($con, $sql); 
while ($row = mysqli_fetch_assoc($result)){
    print "<tr><td>".
    $row['username_g'].
    "</td><td>
    <form action='../log-sheet/logsheet_entry.php?username=".
    $row['username_g'].
    "' method='post'>
    <button class='sheet' type='submit'>Get Interaction sheet
    </button>
    </form></td></tr>";    
}
?>
</table>

 </body>
 </html>