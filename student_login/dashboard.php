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
$sql="SELECT * FROM grouplog INNER JOIN guidelogin ON grouplog.guide_username=guidelogin.guide_username WHERE username_g = '$username';";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstarp  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- STYLESHEET  -->
    <link rel="stylesheet" href="dashboard.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:wght@600;700&family=Teko:wght@600&display=swap" rel="stylesheet">

    <!-- icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <!-- fonts -->

    <title>Dashboard</title>
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


    <section  class="heading">
        <div class="text-start group-key">
            <div class="row">
                <div class="col-md-3 group-key-col">
                    GROUP ID:- <?php echo $row['username_g']?>
                </div>
                <div class="col-md-8 group-key-col">
                    GUIDE NAME:- <?php echo $row['guide_name']?>
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
            
            <form action="../log-sheet/logsheet_entry.php?username=<?php echo $username?>" method="post">
            <button class="sheet" type="submit">Get Interaction sheet
            </button>
            </form>

            <div class="vl">
                <div class="project-details">
                <div class="row">
                    <div class="col project-title">
                    PROJECT TITLE :- <?php echo $row['project_title'];?>
                </div>
                <div class="row">
                    <div class="col project-domain">
                    PROJECT DOMAIN :- <?php echo $row['project_domain'];?>
                    </div>
                    </div>
                    </div>
            </div>

        </div>
    </section>
    <section>
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
                due date:- 
                <div class="due-date">
                <?php echo $row['dueDate']?>
                </div>

                <!-- Status -->

                <?php     
                $sql="SELECT * FROM card1 WHERE username_group = '$username'";
                $result = mysqli_query($con,$sql); 
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

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

                <form method="post" enctype="multipart/form-data"  >
                <input class="attach-button" type="file" id="myFile" name="file">
                <input class="file-submit" type="submit" name="submit1">
                </form>
<!-- files upload code -->
<?php
if (isset($_POST["submit1"]))
{
    #retrieve file title
       // $title = $_POST["title"];
    
   #file name with a random number so that similar dont get replaced
    $pname = $_FILES["file"]["name"];

   #temporary file name to store file
   $tname = $_FILES["file"]["tmp_name"];
   $fileExt = explode('.',$pname);
   $fileActualExt = strtolower(end($fileExt));
  
    #upload directory path
// $title='title';
$uploads_dir = '../files/projectProposals';
$newName=$username.".".$fileActualExt;
$allowed=array('pdf','docx');

$uploadok = 0;

   if(in_array($fileActualExt,$allowed)){
    move_uploaded_file($tname, $uploads_dir.'/'.$newName);
    // Create database

   } else{
    $uploadok=1;
    echo "wrong file type uploaded. Only pdf file allowed";
}

    if($uploadok == 0){
      $sql = "UPDATE card1 SET `fileName` = '$newName', `status`= '2', `modifiedDate`= utc_date() WHERE (`username_group` = '$username')";
      $con->query($sql)==true;
    echo "File Sucessfully uploaded";
  } 
}
?>
<!-- File upload code ends -->


                <!-- <label class="attach-button" for="upload">Choose File</label> -->
                Submitted on:-
                <div class="modified-date">
                  <?php echo $row['modifiedDate']?>

                </div>

<?php
if (isset($_POST["comment"]))
{
  $sql = "SELECT comment FROM card1 WHERE (`username_group` = '$username')";
  mysqli_query($con,$sql); 
}
?>

                  <div class="content active">
                  <?php print "<p class='comment'>".$row['comment']."</p>"; ?>
                    </div>
                
               
              </div>
            </div>
</div>




<!-- Card 2 -->
<?php     
        $sql1="SELECT * FROM card2 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>ABSTRACT SUBMISSION</h2>  
        due-date
        <div class="due-date">
        <?php echo $row1['dueDate']?>
        </div>

        <!-- Status -->

        <?php     
        $sql1="SELECT * FROM card2 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 

        if ($row1['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row1['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row1['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row1['status']==3){
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

        <form method="post" enctype="multipart/form-data"  >
        <input class="attach-button" type="file" id="myFile" name="file2">
        <input class="file-submit" type="submit" name="submit2">
        </form>
<!-- files upload code -->
<?php
if (isset($_POST["submit2"]))
{
#retrieve file title
// $title = $_POST["title"];

#file name with a random number so that similar dont get replaced
$pname = $_FILES["file2"]["name"];

#temporary file name to store file
$tname = $_FILES["file2"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));

#upload directory path
// $title='title';
$uploads_dir = '../files/Abstract';
$newName=$username.".".$fileActualExt;
$allowed=array('pdf','docx');

$uploadok = 0;

if(in_array($fileActualExt,$allowed)){
move_uploaded_file($tname, $uploads_dir.'/'.$newName);
// Create database

} else{
$uploadok=1;
echo "wrong file type uploaded. Only pdf file allowed";
}

if($uploadok == 0){
$sql1 = "UPDATE card2 SET `fileName` = '$newName', `status`= '2', `modifiedDate`= utc_date() WHERE (`username_group` = '$username')";
$con->query($sql1)==true;
echo "File Sucessfully uploaded";
} 
}
?>
<!-- File upload code ends -->


        <!-- <label class="attach-button" for="upload">Choose File</label> -->
        <div class="modified-date">
          <?php echo $row1['modifiedDate']?>

        </div>
        
<?php
if (isset($_POST["comment"]))
{
$sql1 = "SELECT comment FROM card2 WHERE (`username_group` = '$username')";
mysqli_query($con,$sql); 
}
?>

          <div class="content active ">
          <?php echo $row1['comment']; ?>
            </div>
        
       
      </div>
    </div>
</div>




<!-- Card 3-->
<?php     
        $sql1="SELECT * FROM card3 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h3>INTRODUCTION SUBMISSION</h3>  
        <div class="due-date">
        <?php echo $row1['dueDate']?>
</div>

        <!-- Status -->

        <?php     
        $sql1="SELECT * FROM card3 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 

        if ($row1['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row1['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row1['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row1['status']==3){
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

        <form method="post" enctype="multipart/form-data"  >
        <input class="attach-button" type="file" id="myFile" name="file3">
        <input class="file-submit" type="submit" name="submit3">
        </form>
<!-- files upload code -->
<?php
if (isset($_POST["submit3"]))
{
#retrieve file title
// $title = $_POST["title"];

#file name with a random number so that similar dont get replaced
$pname = $_FILES["file3"]["name"];

#temporary file name to store file
$tname = $_FILES["file3"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));

#upload directory path
// $title='title';
$uploads_dir = '../files/introduction';
$newName=$username.".".$fileActualExt;
$allowed=array('pdf','docx');

$uploadok = 0;

if(in_array($fileActualExt,$allowed)){
move_uploaded_file($tname, $uploads_dir.'/'.$newName);
// Create database

} else{
$uploadok=1;
echo "wrong file type uploaded. Only pdf file allowed";
}

if($uploadok == 0){
$sql1 = "UPDATE card3 SET `fileName` = '$newName', `status`= '2', `modifiedDate`= utc_date() WHERE (`username_group` = '$username')";
$con->query($sql1)==true;
echo "File Sucessfully uploaded";
} 
}
?>
<!-- File upload code ends -->


        <!-- <label class="attach-button" for="upload">Choose File</label> -->
        <div class="modified-date">
          <?php echo $row1['modifiedDate']?>

        </div>
       
<?php
if (isset($_POST["comment"]))
{
$sql1 = "SELECT comment FROM card3 WHERE (`username_group` = '$username')";
mysqli_query($con,$sql); 
}
?>

          <div class="content active ">
          <?php echo $row1['comment']; ?>
            </div>
        
       
      </div>
    </div>
</div>



<!-- Card 4-->
<?php     
        $sql1="SELECT * FROM card4 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>Literature Survey</h2>  
        due-date
        <div class="due-date">
        <?php echo $row1['dueDate']?>
        </div>

        <!-- Status -->

        <?php     
        $sql1="SELECT * FROM card4 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 

        if ($row1['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row1['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row1['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row1['status']==3){
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

        <form method="post" enctype="multipart/form-data"  >
        <input class="attach-button" type="file" id="myFile" name="file4">
        <input class="file-submit" type="submit" name="submit4">
        </form>
<!-- files upload code -->
<?php
if (isset($_POST["submit4"]))
{
#retrieve file title
// $title = $_POST["title"];

#file name with a random number so that similar dont get replaced
$pname = $_FILES["file4"]["name"];

#temporary file name to store file
$tname = $_FILES["file4"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));

#upload directory path
// $title='title';
$uploads_dir = '../files/literatureSurvey';
$newName=$username.".".$fileActualExt;
$allowed=array('pdf','docx');

$uploadok = 0;

if(in_array($fileActualExt,$allowed)){
move_uploaded_file($tname, $uploads_dir.'/'.$newName);
// Create database

} else{
$uploadok=1;
echo "wrong file type uploaded. Only pdf file allowed";
}

if($uploadok == 0){
$sql1 = "UPDATE card4 SET `fileName` = '$newName', `status`= '2', `modifiedDate`= utc_date() WHERE (`username_group` = '$username')";
$con->query($sql1)==true;
echo "File Sucessfully uploaded";
} 
}
?>
<!-- File upload code ends -->


        <!-- <label class="attach-button" for="upload">Choose File</label> -->
        <div class="modified-date">
          <?php echo $row1['modifiedDate']?>

        </div>
   
       
<?php
if (isset($_POST["comment"]))
{
$sql1 = "SELECT comment FROM card4 WHERE (`username_group` = '$username')";
mysqli_query($con,$sql); 
}
?>

          <div class="content active ">
          <?php echo $row1['comment']; ?>
            </div>
        
       
      </div>
    </div>
</div>


<!-- Card 4-->
<?php     
        $sql1="SELECT * FROM card5 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>EXISTING SYSTEM</h2>  
        due-date
        <div class="due-date">
        <?php echo $row1['dueDate']?>
        </div>

        <!-- Status -->

        <?php     
        $sql1="SELECT * FROM card5 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 

        if ($row1['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row1['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row1['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row1['status']==3){
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

        <form method="post" enctype="multipart/form-data"  >
        <input class="attach-button" type="file" id="myFile" name="file5">
        <input class="file-submit" type="submit" name="submit5">
        </form>
<!-- files upload code -->
<?php
if (isset($_POST["submit5"]))
{
#retrieve file title
// $title = $_POST["title"];

#file name with a random number so that similar dont get replaced
$pname = $_FILES["file5"]["name"];

#temporary file name to store file
$tname = $_FILES["file5"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));

#upload directory path
// $title='title';
$uploads_dir = '../files/existingSystem';
$newName=$username.".".$fileActualExt;
$allowed=array('pdf','docx');

$uploadok = 0;

if(in_array($fileActualExt,$allowed)){
move_uploaded_file($tname, $uploads_dir.'/'.$newName);
// Create database

} else{
$uploadok=1;
echo "wrong file type uploaded. Only pdf file allowed";
}

if($uploadok == 0){
$sql1 = "UPDATE card5 SET `fileName` = '$newName', `status`= '2', `modifiedDate`= utc_date() WHERE (`username_group` = '$username')";
$con->query($sql1)==true;
echo "File Sucessfully uploaded";
} 
}
?>
<!-- File upload code ends -->


        <!-- <label class="attach-button" for="upload">Choose File</label> -->
        <div class="modified-date">
          <?php echo $row1['modifiedDate']?>

        </div>
       
<?php
if (isset($_POST["comment"]))
{
$sql1 = "SELECT comment FROM card5 WHERE (`username_group` = '$username')";
mysqli_query($con,$sql); 
}
?>

          <div class="content active ">
          <?php echo $row1['comment']; ?>
            </div>
        
       
      </div>
    </div>
</div>


<!-- Card 6-->
<?php     
        $sql1="SELECT * FROM card6 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>PROPOSED SYSTEM</h2>  
        due-date
        <div class="due-date">
        <?php echo $row1['dueDate']?>
        </div>

        <!-- Status -->

        <?php     
        $sql1="SELECT * FROM card6 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 

        if ($row1['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row1['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row1['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row1['status']==3){
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

        <form method="post" enctype="multipart/form-data"  >
        <input class="attach-button" type="file" id="myFile" name="file6">
        <input class="file-submit" type="submit" name="submit6">
        </form>
<!-- files upload code -->
<?php
if (isset($_POST["submit6"]))
{
#retrieve file title
// $title = $_POST["title"];

#file name with a random number so that similar dont get replaced
$pname = $_FILES["file6"]["name"];

#temporary file name to store file
$tname = $_FILES["file6"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));

#upload directory path
// $title='title';
$uploads_dir = '../files/proposedSystem';
$newName=$username.".".$fileActualExt;
$allowed=array('pdf','docx');

$uploadok = 0;

if(in_array($fileActualExt,$allowed)){
move_uploaded_file($tname, $uploads_dir.'/'.$newName);
// Create database

} else{
$uploadok=1;
echo "wrong file type uploaded. Only pdf file allowed";
}

if($uploadok == 0){
$sql1 = "UPDATE card6 SET `fileName` = '$newName', `status`= '2', `modifiedDate`= utc_date() WHERE (`username_group` = '$username')";
$con->query($sql1)==true;
echo "File Sucessfully uploaded";
} 
}
?>
<!-- File upload code ends -->


        <!-- <label class="attach-button" for="upload">Choose File</label> -->
        <div class="modified-date">
          <?php echo $row1['modifiedDate']?>

        </div>
       
<?php
if (isset($_POST["comment"]))
{
$sql1 = "SELECT comment FROM card6 WHERE (`username_group` = '$username')";
mysqli_query($con,$sql); 
}
?>

          <div class="content active ">
          <?php echo $row1['comment']; ?>
            </div>
        
       
      </div>
    </div>
</div>



<!-- Card 7-->
<?php     
        $sql1="SELECT * FROM card7 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>DESIGN SUBMISSION</h2>  
        due-date
        <div class="due-date">
        <?php echo $row1['dueDate']?>
        </div>

        <!-- Status -->

        <?php     
        $sql1="SELECT * FROM card7 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 

        if ($row1['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row1['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row1['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row1['status']==3){
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

        <form method="post" enctype="multipart/form-data"  >
        <input class="attach-button" type="file" id="myFile" name="file7">
        <input class="file-submit" type="submit" name="submit7">
        </form>
<!-- files upload code -->
<?php
if (isset($_POST["submit7"]))
{
#retrieve file title
// $title = $_POST["title"];

#file name with a random number so that similar dont get replaced
$pname = $_FILES["file7"]["name"];

#temporary file name to store file
$tname = $_FILES["file7"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));

#upload directory path
// $title='title';
$uploads_dir = '../files/design';
$newName=$username.".".$fileActualExt;
$allowed=array('pdf','docx');

$uploadok = 0;

if(in_array($fileActualExt,$allowed)){
move_uploaded_file($tname, $uploads_dir.'/'.$newName);
// Create database

} else{
$uploadok=1;
echo "wrong file type uploaded. Only pdf file allowed";
}

if($uploadok == 0){
$sql1 = "UPDATE card7 SET `fileName` = '$newName', `status`= '2', `modifiedDate`= utc_date() WHERE (`username_group` = '$username')";
$con->query($sql1)==true;
echo "File Sucessfully uploaded";
} 
}
?>
<!-- File upload code ends -->


        <!-- <label class="attach-button" for="upload">Choose File</label> -->
        <div class="modified-date">
          <?php echo $row1['modifiedDate']?>

        </div>
        
<?php
if (isset($_POST["comment"]))
{
$sql1 = "SELECT comment FROM card7 WHERE (`username_group` = '$username')";
mysqli_query($con,$sql); 
}
?>

          <div class="content active ">
          <?php echo $row1['comment']; ?>
            </div>
        
       
      </div>
    </div>
</div>



<!-- Card 8-->
<?php     
        $sql1="SELECT * FROM card8 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h4>10% IMPLEMENTATION & REPORT</h4> 
        due-date
        <div class="due-date">
        <?php echo $row1['dueDate']?>
        </div>

        <!-- Status -->

        <?php     
        $sql1="SELECT * FROM card8 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 

        if ($row1['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row1['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row1['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row1['status']==3){
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

        <form method="post" enctype="multipart/form-data"  >
        <input class="attach-button" type="file" id="myFile" name="file8">
        <input class="file-submit" type="submit" name="submit8">
        </form>
<!-- files upload code -->
<?php
if (isset($_POST["submit8"]))
{
#retrieve file title
// $title = $_POST["title"];

#file name with a random number so that similar dont get replaced
$pname = $_FILES["file8"]["name"];

#temporary file name to store file
$tname = $_FILES["file8"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));

#upload directory path
// $title='title';
$uploads_dir = '../files/10%implementation';
$newName=$username.".".$fileActualExt;
$allowed=array('pdf','docx');

$uploadok = 0;

if(in_array($fileActualExt,$allowed)){
move_uploaded_file($tname, $uploads_dir.'/'.$newName);
// Create database

} else{
$uploadok=1;
echo "wrong file type uploaded. Only pdf file allowed";
}

if($uploadok == 0){
$sql1 = "UPDATE card8 SET `fileName` = '$newName', `status`= '2', `modifiedDate`= utc_date() WHERE (`username_group` = '$username')";
$con->query($sql1)==true;
echo "File Sucessfully uploaded";
} 
}
?>
<!-- File upload code ends -->


        <!-- <label class="attach-button" for="upload">Choose File</label> -->
        <div class="modified-date">
          <?php echo $row1['modifiedDate']?>

        </div>

<?php
if (isset($_POST["comment"]))
{
$sql1 = "SELECT comment FROM card8 WHERE (`username_group` = '$username')";
mysqli_query($con,$sql); 
}
?>

          <div class="content active ">
          <?php echo $row1['comment']; ?>
            </div>
        
       
      </div>
    </div>
</div>



<!-- Card 9-->
<?php     
        $sql1="SELECT * FROM card9 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
?>
<div class="flip-card col-lg-3-md-4-sm-6">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <h2>FINAL REPORT</h2>  
        due-date
        <div class="due-date">
        <?php echo $row1['dueDate']?>
        </div>

        <!-- Status -->

        <?php     
        $sql1="SELECT * FROM card9 WHERE username_group = '$username'";
        $result1 = mysqli_query($con,$sql1); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 

        if ($row1['status']==0) {
          echo  '<div style="color:yellow;">
          <span class="material-icons" style="font-size: 60px; ">
            pending_actions
            </span>
            <br>
            Pending
          </div>';
          }
        elseif($row1['status']==1){
          echo '<div class="status" style="color:green;">
          <span class="material-icons approved" style="font-size:60px; ">
            verified
            </span>      
            <br>
            verified 
            </div>';
        }
        elseif($row1['status']==2){
          echo '<div style="color:#31008d";>
          <span class="material-icons" style="font-size:60px;" >
            hourglass_bottom
            </span> 
            <br>
            Being Checked
            </div>';
        }
        elseif($row1['status']==3){
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

        <form method="post" enctype="multipart/form-data"  >
        <input class="attach-button" type="file" id="myFile" name="file9">
        <input class="file-submit" type="submit" name="submit9">
        </form>
<!-- files upload code -->
<?php
if (isset($_POST["submit9"]))
{
#retrieve file title
// $title = $_POST["title"];

#file name with a random number so that similar dont get replaced
$pname = $_FILES["file9"]["name"];

#temporary file name to store file
$tname = $_FILES["file9"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));

#upload directory path
// $title='title';
$uploads_dir = '../files/finalReport';
$newName=$username.".".$fileActualExt;
$allowed=array('pdf','docx');

$uploadok = 0;

if(in_array($fileActualExt,$allowed)){
move_uploaded_file($tname, $uploads_dir.'/'.$newName);
// Create database

} else{
$uploadok=1;
echo "wrong file type uploaded. Only pdf file allowed";
}

if($uploadok == 0){
$sql1 = "UPDATE card9 SET `fileName` = '$newName', `status`= '2', `modifiedDate`= utc_date() WHERE (`username_group` = '$username')";
$con->query($sql1)==true;
echo "File Sucessfully uploaded";
} 
}
?>
<!-- File upload code ends -->


        <!-- <label class="attach-button" for="upload">Choose File</label> -->
        <div class="modified-date">
          <?php echo $row1['modifiedDate']?>

        </div>

<?php
if (isset($_POST["comment"]))
{
$sql1 = "SELECT comment FROM card9 WHERE (`username_group` = '$username')";
mysqli_query($con,$sql); 
}
?>

          <div class="content active ">
          <?php echo $row1['comment']; ?>
            </div>
        
       
      </div>
    </div>
</div>

         </div>
    </section>

</body>
<script>
  function myFunction() {
    var element = document.getElementById("comment1");
    element.classList.toggle("visibility");
  }
</script>
<script src="dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      <!-- local js -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>