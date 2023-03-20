<?php
$host = "localhost";  
$user = "root";  
$password = 'jayesh@2512';  
$db_name = "miniproject";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}
// session_start();
$username = $_GET['username'];
$sql="SELECT * FROM grouplog WHERE username_g = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interacton-Sheet</title>
    <link rel="stylesheet" href="log-sheet.css">

</head>
<body>
    <section class="header">
        <img class="header" src="header.png" atl="Header">
    </section>
    <section class="entry">
        
      <table>
        <tr>
          <td colspan="4">
            <b>Group Id:-</b> <?php echo $row['username_g']?>
          </td>
          <td colspan="5">
            <b>Guide-Name:-</b><?php echo $row['guide_name']?> 
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <b>Project-Title:-</b><?php echo $row['project_title']?>
          </td>
          <td colspan="5">
            <b>Project-Domain:-</b><?php echo $row['project_domain']?>
          </td>
        </tr>
        <tr>
          <th  colspan="9" >MINI-PROOJECT INTRACTION SHEET SEMESTER-III</th>
        </tr>
        <tr>
        <?php
$sql="SELECT * FROM grouplog WHERE username_g = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>
          <th class="date">Due Date</th>
          <th class="task">Expected task to be Completed</th>
          <th class="date">Submisson date</th>
          <th class="remarks">Remarks</th>
          <th class="student-name">Student name:- <?php echo $row['name_1']?></th>
          <th class="student-name">Student name:- <?php echo $row['name_2']?></th>
          <th class="student-name">Student name:- <?php echo $row['name_3']?></th>
          <th class="student-name">Student name:- <?php echo $row['name_4']?></th>
          <th class="guide">Guide<br>sign</th>
        </tr>
        <tr>
<?php
$sql="SELECT * FROM card1 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>

          <td class="date"><?php echo $row['dueDate']?></td>
          <td class="task">Topic Finalization</td>
          <td class="date"><?php echo $row['modifiedDate']?></td>
          <td class="remarks"> <?php 
          $sql="SELECT status from card1";
          $result = mysqli_query($con,$sql); 
          $status= mysqli_fetch_array($result, MYSQLI_ASSOC); 
          if($status['status']== "1"){
            echo "Completed";
          }
          else if($status['status']=="2"){
            echo "not verified by Guide";
          }
          else if($status['status']=="3"){
            echo "Redo";
          }
          ?>  
          </td>
          <td> </td>
          <td> </td>
          <td>  </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
        <?php
$sql="SELECT * FROM card2 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>

          <td class="date"><?php echo $row['dueDate']?></td>
          <td class="task">Abstract</td>
          <td class="date"><?php echo $row['modifiedDate']?></td>
          <td class="remarks">
          <?php
$sql="SELECT * FROM card2 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
          $sql="SELECT status from card2";
          $result = mysqli_query($con,$sql); 
          $status= mysqli_fetch_array($result, MYSQLI_ASSOC); 
          if($status['status']== "1"){
            echo "Completed";
          }
          else if($status['status']=="2"){
            echo "not verified by Guide";
          }
          else if($status['status']=="3"){
            echo "Redo";
          }
          ?>  
          
           </td>
          <td> </td>
          <td> </td>
          <td>  </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
        <?php
$sql="SELECT * FROM card3 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>

          <td class="date"><?php echo $row['dueDate']?></td>
          <td class="task">Introduction</td>
          <td class="date"><?php echo $row['modifiedDate']?></td>
          <td class="remarks"> 
            <?php 
          $sql="SELECT status from card3";
          $result = mysqli_query($con,$sql); 
          $status= mysqli_fetch_array($result, MYSQLI_ASSOC); 
          if($status['status']== "1"){
            echo "Completed";
          }
          else if($status['status']=="2"){
            echo "not verified by Guide";
          }
          else if($status['status']=="3"){
            echo "Redo";
          }
          ?>  
           </td>
          <td> </td>
          <td> </td>
          <td>  </td>
          <td> </td>
          <td> </td>
        </tr>
        <?php
$sql="SELECT * FROM card4 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>

          <td class="date"><?php echo $row['dueDate']?></td>
          <td class="task">Literature Survey</td>
          <td class="date"><?php echo $row['modifiedDate']?></td>
          <td class="remarks">
          <?php 
          $sql="SELECT status from card4";
          $result = mysqli_query($con,$sql); 
          $status= mysqli_fetch_array($result, MYSQLI_ASSOC); 
          if($status['status']== "1"){
            echo "Completed";
          }
          else if($status['status']=="2"){
            echo "not verified by Guide";
          }
          else if($status['status']=="3"){
            echo "Redo";
          }
          ?>      
        </td>
          <td> </td>
          <td> </td>
          <td>  </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <th colspan="9" >
            Progress Presentation stage 1
          </th>
        </tr>
        <?php
$sql="SELECT * FROM card5 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>

          <td class="date"><?php echo $row['dueDate']?></td>
          <td class="task">Existing System</td>
          <td class="date"><?php echo $row['modifiedDate']?></td>
          <td class="remarks"><?php 
          $sql="SELECT status from card5";
          $result = mysqli_query($con,$sql); 
          $status= mysqli_fetch_array($result, MYSQLI_ASSOC); 
          if($status['status']== "1"){
            echo "Completed";
          }
          else if($status['status']=="2"){
            echo "not verified by Guide";
          }
          else if($status['status']=="3"){
            echo "Redo";
          }
          ?>   </td>
          <td> </td>
          <td> </td>
          <td>  </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
        <?php
$sql="SELECT * FROM card6 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>

          <td class="date"><?php echo $row['dueDate']?></td>
          <td class="task">Proposed System</td>
          <td class="date"><?php echo $row['modifiedDate']?></td>
          <td class="remarks">
          <?php 
          $sql="SELECT status from card6";
          $result = mysqli_query($con,$sql); 
          $status= mysqli_fetch_array($result, MYSQLI_ASSOC); 
          if($status['status']== "1"){
            echo "Completed";
          }
          else if($status['status']=="2"){
            echo "not verified by Guide";
          }
          else if($status['status']=="3"){
            echo "Redo";
          }
          ?>  
          </td>
          <td> </td>
          <td> </td>
          <td>  </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
        <?php
$sql="SELECT * FROM card7 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>

          <td class="date"><?php echo $row['dueDate']?></td>
          <td class="task">Design</td>
          <td class="date"><?php echo $row['modifiedDate']?></td>
          <td class="remarks"><?php 
          $sql="SELECT status from card7";
          $result = mysqli_query($con,$sql); 
          $status= mysqli_fetch_array($result, MYSQLI_ASSOC); 
          if($status['status']== "1"){
            echo "Completed";
          }
          else if($status['status']=="2"){
            echo "not verified by Guide";
          }
          else if($status['status']=="3"){
            echo "Redo";
          }
          ?>  
           </td>
          <td> </td>
          <td> </td>
          <td>  </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <th colspan="9" >
            Progress Presentation stage 2
          </th>
          <tr>
          <?php
$sql="SELECT * FROM card8 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>

          <td class="date"><?php echo $row['dueDate']?></td>
          <td class="task">10% Implementation & Rough draft</td>
          <td class="date"><?php echo $row['modifiedDate']?></td>
          <td class="remarks">
          <?php 
          $sql="SELECT status from card8";
          $result = mysqli_query($con,$sql); 
          $status= mysqli_fetch_array($result, MYSQLI_ASSOC); 
          if($status['status']== "1"){
            echo "Completed";
          }
          else if($status['status']=="2"){
            echo "not verified by Guide";
          }
          else if($status['status']=="3"){
            echo "Redo";
          }
          ?>  
          </td>
            <td> </td>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <th colspan="9" >
              Progress Presentation stage 3
            </th>
            <tr>
            <?php
$sql="SELECT * FROM card9 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>

          <td class="date"><?php echo $row['dueDate']?></td>
          <td class="task">Submission of final report</td>
          <td class="date"><?php echo $row['modifiedDate']?></td>
          <td class="remarks">
          <?php 
          $sql="SELECT status from card9";
          $result = mysqli_query($con,$sql); 
          $status= mysqli_fetch_array($result, MYSQLI_ASSOC); 
          if($status['status']== "1"){
            echo "Completed";
          }
          else if($status['status']=="2"){
            echo "not verified by Guide";
          }
          else if($status['status']=="3"){
            echo "Redo";
          }
          ?>  
          </td>
              <td> </td>
              <td>  </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <th colspan="9" >
                Final Presentation (External Evaluation)
              </th>    
        </table>
        <button class="sheet" onclick="window.print()">Print</button>
    </section>
</body>
</html>