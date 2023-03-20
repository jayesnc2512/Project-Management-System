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
$sql="SELECT * FROM grouplog INNER Join guidelogin ON grouplog.guide_username=guidelogin.guide_username WHERE username_g = '$username'";


$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstarp  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- STYLESHEET  -->
    <link rel="stylesheet" href="t_dashboard.css">

<!-- icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:wght@600;700&family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
        
    <title>t_Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="navigation-bar container-fluid ">
          <a class="navbar-brand brand-name" >DOJPROJ</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link  nav-menu" aria-current="page" href="../index.html">Home</a>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Register
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item nav-menu" style="color:#ca97f4" href="../register.php">Student Registration</a></li>
                  <li><a class="dropdown-item nav-menu" style="color:#ca97f4"  href="../groupregister.html">Group Registration</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item nav-menu" style="color:#ca97f4" href="../student_login/login.html">Student Login</a></li>
                  <li><a class="dropdown-item nav-menu" style="color:#ca97f4"  href="../teacher_login/login.html">Teacher Login</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Archives</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item nav-menu" style="color:#ca97f4" href="../archives/archive.html">Second Year</a></li>
                  <li><a class="dropdown-item nav-menu" style="color:#ca97f4"  href="../archives/archive2.html">Third Year</a></li>
                  <li><a class="dropdown-item nav-menu" style="color:#ca97f4"  href="../archives/archive3.html">Fourth Year</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link nav-menu" href="#">Creators</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>



    <section class="heading">
        <div class="text-start group-key">
            <div class="row">
                <div class="col-md-3 group-key-col">
                    GROUP ID:-<?php echo $row['username_g']?>
                </div>
                <div class="col-md-8 group-key-col">
                    GUIDE NAME:-<?php echo $row['guide_name']?>
                </div>
            </div>
        </div>
        <div class="student-details">
            <div class="row">
                <div class="col-md-2 col-4 student-roll">
                <?php echo $row['rollno_1'];?>
                </div>
                <div class="col-md-4 col-6 student-name">
                <?php echo $row['name_1'];?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-4 student-roll">
                <?php echo $row['rollno_2'];?>
                </div>
                <div class="col-md-4 col-6 student-name">
                <?php echo $row['name_2'];?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-4 student-roll">
                <?php echo $row['rollno_3'];?>
                </div>
                <div class="col-md-4 col-6 student-name">
                <?php echo $row['name_3'];?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-4 student-roll">
                <?php echo $row['rollno_4'];?>
                </div>
                <div class="col-md-4 col-6 student-name">
                <?php echo $row['name_4'];?>
                </div>
            </div>
            <div class="vl">
                <div class="project-details">
                <div class="row">
                    <div class="col project-title">
                    PROJECT TITLE :- <?php echo $row['project_title'];?>
                </div>
                <div class="row">
                    <div class="col project-domain">
                    PROJECT DOMAIN :-<?php echo $row['project_domain'];?>
                    </div>
                    </div>
                    </div>
            </div>

        </div>
    </section>
    <section class="below-head">
        <h3 class="progress-title">Progress</h3>
    <div class="progress progress-track">

        <div class="progress-bar progress-bar-striped active progress-track-complete" role="progressbar"
        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
          40% completed
        </div>
      </div>
      <div class="row card-row">



        <!-- Card 1 -->
        <?php     
                $sql="SELECT * FROM card1 WHERE username_group = '$username'";
                $result = mysqli_query($con,$sql); 
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
                ?>
        <div class="flip-card col-lg-3-md-4-sm-6">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h2>PROJECT PROPOSAL</h2>  
                <div class="due-date">
                   <?php echo $row['dueDate'];?> 
                </div>
                <?php     
               

                if ($row['status']==0) {
                  echo  '<div style="color:yellow;">
                  <span class="material-icons" style="font-size: 60px; ">
                    pending_actions
                    </span>
                    <br>
                    Pending
                  </div>';
                  }
                elseif($row['status']==1){
                  echo '<div class="status" style="color:green;">
                  <span class="material-icons approved" style="font-size:60px; ">
                    verified
                    </span>      
                    <br>
                    verified 
                    </div>';
                }
                elseif($row['status']==2){
                  echo '<div style="color:#31008d";>
                  <span class="material-icons" style="font-size:60px;" >
                    hourglass_bottom
                    </span> 
                    <br>
                    Being Checked
                    </div>';
                }
                elseif($row['status']==3){
                  echo '<div class="status" style="color:red;">
                  <span class="material-symbols-outlined" style="font-size: 60px; ">
                    cached
                  </span>
                  <br>
                  redo
                  </div>';
                }
                
                ?> 
                 <!--Status end  -->

   
              </div>
              <div class="flip-card-back">
                <input type="file" id="upload" hidden />
                  <!-- download file -->
              <div class="attach-button">
              <a href="../files/projectProposals/<?php echo $row['fileName'];?>" style="color:#31008d;text-decoration:none;" download>Download </a>           
              </div>
                <div class="modified-date">
                <?php 

                $sql="SELECT * FROM card1 WHERE username_group = '$username' ";
                $result = mysqli_query($con,$sql); 
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
                echo $row['modifiedDate'];
                ?>

                </div>
                <form method="POST" action=" ">
                <button class="flip" type="submit" name="correct1" style="color:green;">
                  correct
                </button>
            
                  <button class="flip" type="submit" style="color:red;" name="redo1" >
                 redo
                  </button>
</form>
<?php
if(isset($_POST["correct1"])){
  $sql = "UPDATE card1 SET `status` = '1' WHERE username_group = '$username' ";
  mysqli_query($con,$sql); 
}
if(isset($_POST["redo1"])){
  $sql = "UPDATE `miniproject`.`card1` SET `status` = '3' WHERE username_group = '$username' ";
  mysqli_query($con,$sql); 
}
?>                 
                    <button type="button" class="collapsible active flip" style="color:yellow;">
                      comment
                    </button>
                      
                      <div class="content active ">

                        <form  method="post">
                        <button type="submit" name="comment1">send</button>
                        <textarea cols="40" rows="10" name="remark1" required></textarea>
                         </form>
                <?php
                if (isset($_POST["comment1"])){
                // Taking all 5 values from the form data(input)
                $remark =  $_REQUEST['remark1'];
                 
                // Performing insert query execution
                // here our table name is college
                $sql1 = "UPDATE card1
                        SET comment ='$remark'
                        WHERE username_group='$username';";
                 $con->query($sql1)==true;
            }
            ?>
                        </div>
                 </div>
            </div>
          </div>



<!-- Card 2 -->
<?php $sql="SELECT * FROM card2 WHERE username_group = '$username'";
        $result = mysqli_query($con,$sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); ?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>ABSTRACT SUBMISSION</h2>  
        <div class="due-date">
           <?php echo $row['dueDate'];?>  
        </div>
        <?php     
        

        if ($row['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row['status']==3){
          echo '<div class="status" style="color:red;">
          <span class="material-symbols-outlined" style="font-size: 60px; ">
            cached
          </span>
          <br>
          redo
          </div>';
        }
        
        ?> 
         <!--Status end  -->


      </div>
      <div class="flip-card-back">
        <input type="file" id="upload" hidden />
          <!-- download file -->
      <div class="attach-button">
      <a href="../files/Abstract/<?php echo $row['fileName'];?>" style="color:#31008d;text-decoration:none;" download>Download </a>           
      </div>
        <div class="modified-date">
        <?php 

        $sql="SELECT * FROM card2 WHERE username_group = '$username' ";
        $result = mysqli_query($con,$sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        echo $row['modifiedDate'];
        ?>

        </div>
        <form method="POST" action=" ">
        <button class="flip" type="submit" name="correct2" style="color:green;">
          correct
        </button>
    
          <button class="flip" type="submit" style="color:red;" name="redo2" >
         redo
          </button>
</form>
<?php
if(isset($_POST["correct2"])){
$sql = "UPDATE card2 SET `status` = '1' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
if(isset($_POST["redo2"])){
$sql = "UPDATE `miniproject`.`card2` SET `status` = '3' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
?>                 
            <button type="button" class="collapsible active flip" style="color:yellow;">
              comment
            </button>
              
              <div class="content active ">
                <textarea cols="40" rows="10"></textarea>
                </div>
         </div>
    </div>
  </div>



<!-- Card 1-3 -->
<?php $sql3="SELECT * FROM card3 WHERE username_group = '$username'";
        $result3 = mysqli_query($con,$sql3); 
        $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
        ?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h3>INTRODUCTION SUBMISSION</h3>  
        <div class="due-date">
          <?php echo $row3['dueDate'];?>
        </div>
        <?php     
         

        if ($row3['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row3['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row3['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row3['status']==3){
          echo '<div class="status" style="color:red;">
          <span class="material-symbols-outlined" style="font-size: 60px; ">
            cached
          </span>
          <br>
          redo
          </div>';
        }
        
        ?> 
         <!--Status end  -->


      </div>
      <div class="flip-card-back">
        <input type="file" id="upload" hidden />
          <!-- download file -->
      <div class="attach-button">
      <a href="../files/projectProposals/<?php echo $row['fileName'];?>" style="color:#31008d;text-decoration:none;" download>Download </a>           
      </div>
        <div class="modified-date">
        <?php 

        $sql3="SELECT * FROM card3 WHERE username_group = '$username' ";
        $result3 = mysqli_query($con,$sql3); 
        $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC); 
        echo $row3['modifiedDate'];
        ?>

        </div>
        <form method="POST" action=" ">
        <button class="flip" type="submit" name="correct3" style="color:green;">
          correct
        </button>
    
          <button class="flip" type="submit" style="color:red;" name="redo3" >
         redo
          </button>
</form>
<?php
if(isset($_POST["correct3"])){
$sql = "UPDATE card3 SET `status` = '1' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
if(isset($_POST["redo3"])){
$sql = "UPDATE `miniproject`.`card3` SET `status` = '3' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
?>                 
            <button type="button" class="collapsible active flip" style="color:yellow;">
              comment
            </button>
              
              <div class="content active ">
                <textarea cols="40" rows="10"></textarea>
                </div>
         </div>
    </div>
  </div>



<!-- Card 4 -->
<?php
 $sql="SELECT * FROM card4 WHERE username_group = '$username'";
 $result = mysqli_query($con,$sql); 
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
 ?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>LITERATURE SURVEY</h2>  
        <div class="due-date">
        <?php echo $row['dueDate'];?>
        </div>
        <?php     
       

        if ($row['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row['status']==3){
          echo '<div class="status" style="color:red;">
          <span class="material-symbols-outlined" style="font-size: 60px; ">
            cached
          </span>
          <br>
          redo
          </div>';
        }
        
        ?> 
         <!--Status end  -->


      </div>
      <div class="flip-card-back">
        <input type="file" id="upload" hidden />
          <!-- download file -->
      <div class="attach-button">
      <a href="../files/literatureSurvey/<?php echo $row['fileName'];?>" style="color:#31008d;text-decoration:none;" download>Download </a>           
      </div>
        <div class="modified-date">
        <?php 

        $sql="SELECT * FROM card4 WHERE username_group = '$username' ";
        $result = mysqli_query($con,$sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        echo $row['modifiedDate'];
        ?>

        </div>
        <form method="POST" action=" ">
        <button class="flip" type="submit" name="correct4" style="color:green;">
          correct
        </button>
    
          <button class="flip" type="submit" style="color:red;" name="redo4" >
         redo
          </button>
</form>
<?php
if(isset($_POST["correct4"])){
$sql = "UPDATE card4 SET `status` = '1' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
if(isset($_POST["redo4"])){
$sql = "UPDATE `miniproject`.`card4` SET `status` = '3' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
?>                 
            <button type="button" class="collapsible active flip" style="color:yellow;">
              comment
            </button>
              
              <div class="content active ">
                <textarea cols="40" rows="10"></textarea>
                </div>
         </div>
    </div>
  </div>



<!-- Card 5 -->
<?php
$sql="SELECT * FROM card5 WHERE username_group = '$username'";
        $result = mysqli_query($con,$sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

        ?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>EXISITNG SYSTEM</h2>  
        <div class="due-date">
         <?php echo $row['dueDate'];?>  
        </div>
        <?php     
        

        if ($row['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row['status']==3){
          echo '<div class="status" style="color:red;">
          <span class="material-symbols-outlined" style="font-size: 60px; ">
            cached
          </span>
          <br>
          redo
          </div>';
        }
        
        ?> 
         <!--Status end  -->


      </div>
      <div class="flip-card-back">
        <input type="file" id="upload" hidden />
          <!-- download file -->
      <div class="attach-button">
      <a href="../files/existingSystem/<?php echo $row['fileName'];?>" style="color:#31008d;text-decoration:none;" download>Download </a>           
      </div>
        <div class="modified-date">
        <?php 

        $sql="SELECT * FROM card5 WHERE username_group = '$username' ";
        $result = mysqli_query($con,$sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        echo $row['modifiedDate'];
        ?>

        </div>
        <form method="POST" action=" ">
        <button class="flip" type="submit" name="correct5" style="color:green;">
          correct
        </button>
    
          <button class="flip" type="submit" style="color:red;" name="redo5" >
         redo
          </button>
</form>
<?php
if(isset($_POST["correct5"])){
$sql = "UPDATE card5 SET `status` = '1' WHERE username_group = '$username'";
mysqli_query($con,$sql); 
}
if(isset($_POST["redo5"])){
$sql = "UPDATE `miniproject`.`card5` SET `status` = '3' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
?>                 
            <button type="button" class="collapsible active flip" style="color:yellow;">
              comment
            </button>
              
              <div class="content active ">
                <textarea cols="40" rows="10"></textarea>
                </div>
         </div>
    </div>
  </div>


<!-- Card 6 -->
<?php
  $sql="SELECT * FROM card6 WHERE username_group = '$username'";
  $result = mysqli_query($con,$sql); 
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>PROPOSED SYSTEM</h2>  
        <div class="due-date">
<?php echo $row['dueDate'];?>
      </div>
        <?php     
      

        if ($row['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row['status']==3){
          echo '<div class="status" style="color:red;">
          <span class="material-symbols-outlined" style="font-size: 60px; ">
            cached
          </span>
          <br>
          redo
          </div>';
        }
        
        ?> 
         <!--Status end  -->


      </div>
      <div class="flip-card-back">
        <input type="file" id="upload" hidden />
          <!-- download file -->
      <div class="attach-button">
      <a href="../files/proposedSystem/<?php echo $row['fileName'];?>" style="color:#31008d;text-decoration:none;" download>Download </a>           
      </div>
        <div class="modified-date">
        <?php 

        $sql="SELECT * FROM card6 WHERE username_group = '$username' ";
        $result = mysqli_query($con,$sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        echo $row['modifiedDate'];
        ?>

        </div>
        <form method="POST" action=" ">
        <button class="flip" type="submit" name="correct6" style="color:green;">
          correct
        </button>
    
          <button class="flip" type="submit" style="color:red;" name="redo6" >
         redo
          </button>
</form>
<?php
if(isset($_POST["correct6"])){
$sql = "UPDATE card6 SET `status` = '1' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
if(isset($_POST["redo6"])){
$sql = "UPDATE `miniproject`.`card6` SET `status` = '3' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
?>                 
            <button type="button" class="collapsible active flip" style="color:yellow;">
              comment
            </button>
              
              <div class="content active ">
                <textarea cols="40" rows="10"></textarea>
                </div>
         </div>
    </div>
  </div>



<!-- Card 7 -->
<?php
$sql="SELECT * FROM card7 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>DESIGN SUBMISSION</h2>  
        <div class="due-date">
         <?php echo $row['dueDate']?>  
        </div>
        <?php     
        

        if ($row['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row['status']==3){
          echo '<div class="status" style="color:red;">
          <span class="material-symbols-outlined" style="font-size: 60px; ">
            cached
          </span>
          <br>
          redo
          </div>';
        }
        
        ?> 
         <!--Status end  -->


      </div>
      <div class="flip-card-back">
        <input type="file" id="upload" hidden />
          <!-- download file -->
      <div class="attach-button">
      <a href="../files/design/<?php echo $row['fileName'];?>" style="color:#31008d;text-decoration:none;" download>Download </a>           
      </div>
        <div class="modified-date">
        <?php 

        $sql="SELECT * FROM card7 WHERE username_group = '$username' ";
        $result = mysqli_query($con,$sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        echo $row['modifiedDate'];
        ?>

        </div>
        <form method="POST" action=" ">
        <button class="flip" type="submit" name="correct7" style="color:green;">
          correct
        </button>
    
          <button class="flip" type="submit" style="color:red;" name="redo7" >
         redo
          </button>
</form>
<?php
if(isset($_POST["correct7"])){
$sql = "UPDATE card7 SET `status` = '1' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
if(isset($_POST["redo7"])){
$sql = "UPDATE `miniproject`.`card7` SET `status` = '3' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
?>                 
            <button type="button" class="collapsible active flip" style="color:yellow;">
              comment
            </button>
              
              <div class="content active ">
                <textarea cols="40" rows="10"></textarea>
                </div>
         </div>
    </div>
  </div>



<!-- Card 8 -->
<?php
$sql="SELECT * FROM card8 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h4>10% IMPLEMENTATION & ROUGH DRAFT</h4>
        <div class="due-date">
        <?php echo $row['dueDate']?>  
        </div>
        <?php     
        

        if ($row['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row['status']==3){
          echo '<div class="status" style="color:red;">
          <span class="material-symbols-outlined" style="font-size: 60px; ">
            cached
          </span>
          <br>
          redo
          </div>';
        }
        
        ?> 
         <!--Status end  -->


      </div>
      <div class="flip-card-back">
        <input type="file" id="upload" hidden />
          <!-- download file -->
      <div class="attach-button">
      <a href="../files/10%implementation/<?php echo $row['fileName'];?>" style="color:#31008d;text-decoration:none;" download>Download </a>           
      </div>
        <div class="modified-date">
        <?php 

        $sql="SELECT * FROM card8 WHERE username_group = '$username' ";
        $result = mysqli_query($con,$sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        echo $row['modifiedDate'];
        ?>

        </div>
        <form method="POST" action=" ">
        <button class="flip" type="submit" name="correct8" style="color:green;">
          correct
        </button>
    
          <button class="flip" type="submit" style="color:red;" name="redo8" >
         redo
          </button>
</form>
<?php
if(isset($_POST["correct8"])){
$sql = "UPDATE card8 SET `status` = '1' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
if(isset($_POST["redo8"])){
$sql = "UPDATE `miniproject`.`card8` SET `status` = '3' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
?>                 
            <button type="button" class="collapsible active flip" style="color:yellow;">
              comment
            </button>
              
              <div class="content active ">
                <textarea cols="40" rows="10"></textarea>
                </div>
         </div>
    </div>
  </div>



<!-- Card 9 -->
<?php
$sql="SELECT * FROM card9 WHERE username_group = '$username'";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>FINAL REPORT</h2>
        <div class="due-date">
           <?php echo $row['dueDate'];?>  
        </div>
        <?php     
         

        if ($row['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row['status']==3){
          echo '<div class="status" style="color:red;">
          <span class="material-symbols-outlined" style="font-size: 60px; ">
            cached
          </span>
          <br>
          redo
          </div>';
        }
        
        ?> 
         <!--Status end  -->


      </div>
      <div class="flip-card-back">
        <input type="file" id="upload" hidden />
          <!-- download file -->
      <div class="attach-button">
      <a href="../files/finalReport/<?php echo $row['fileName'];?>" style="color:#31008d;text-decoration:none;" download>Download </a>           
      </div>
        <div class="modified-date">
        <?php 

        $sql="SELECT * FROM card9 WHERE username_group = '$username' ";
        $result = mysqli_query($con,$sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        echo $row['modifiedDate'];
        ?>

        </div>
        <form method="POST" action=" ">
        <button class="flip" type="submit" name="correct9" style="color:green;">
          correct
        </button>
    
          <button class="flip" type="submit" style="color:red;" name="redo9" >
         redo
          </button>
</form>
<?php
if(isset($_POST["correct9"])){
$sql = "UPDATE card9 SET `status` = '1' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
if(isset($_POST["redo9"])){
$sql = "UPDATE `miniproject`.`card9` SET `status` = '3' WHERE username_group = '$username' ";
mysqli_query($con,$sql); 
}
?>                 
            <button type="button" class="collapsible active flip" style="color:yellow;">
              comment
            </button>
              
              <div class="content active ">
                <textarea cols="40" rows="10"></textarea>
                </div>
         </div>
    </div>
  </div>

          </div>

    </section>

</body>
<script src="dashboard.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      <!-- local js -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>