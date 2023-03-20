<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:wght@600;700&family=Teko:wght@600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="register.css">
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
            <a class="nav-link  nav-menu" href="index.html">Home</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Register
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item nav-menu" style="color:#ca97f4" href="register.php">Student Registration</a></li>
                  <li><a class="dropdown-item nav-menu" style="color:#ca97f4"  href="groupregister.html">Group Registration</a></li>
                </ul>
              </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item nav-menu" style="color:#ca97f4" href="student_login/login.html">Student Login</a></li>
              <li><a class="dropdown-item nav-menu" style="color:#ca97f4"  href="teacher_login/login.html">Teacher Login</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-menu" href="#">Creators</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
    
    <form method="post"  >  
        <div class="container">  
          <h1 style="text-align: center;"> Student Registeration Form</h1>  
        <hr>  
        <label> <b>Name</b> </label>   
      <input type="text" name="name" placeholder= "Enter Full Name" size="15" required />   
      <label>   
       <b>Branch :</b>  
      </label>   
        
      <select name="branch">  
      <option value="branch">Branch</option>  
      <option value="computer">Computer</option>  
      <option value="IT">IT</option>  
      <option value="Electrical">Electrical</option>  
      <option value="extc">EXTC</option>  
      <option value="mechanical">Mechanical</option>  
      
      </select>  
       
     
       
         
       
       <label for="email"><b>Email</b></label>  
       <input type="text" placeholder="Enter College Email" name="email" required>  
        
       <label for="rollno"><b>Roll Number</b> </label><br>
       <input type="number" placeholder="Enter Your Roll NO." name="rollno" id="rollno." required><br>
       <label>   
        <b>Phone :</b>   
       </label> 
       <input type="text" name="phone" placeholder="phone no." value="+91" size="5" required>   

       <label for="division"><b>Division</b></label><br>
       <input type="text" placeholder="Enter Your Division" name="division" id="div" required><br>

       <label for="sem1cgpi"><b> First Sem cgpi</b></label><br>
       <input type="number" placeholder="Enter sem-1 sgpi" name="sem1cgpi" id="sem1"><br>
       
       <label for="sem2cgpi"><b> Second Sem sgpi</b></label><br>
       <input type="number" placeholder="Enter Sem-2 sgpi" name="sem2cgpi" id="sem2"><br>
       
       
          <button type="submit" name="submit"  class="registerbtn">Register</button>    
      </form>  
      
      
      <?php
 if (isset($_POST["submit"])){
 $host = "localhost";  
 $user = "root";  
 $password = 'jayesh@2512';  
 $db_name = "miniproject";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ". mysqli_connect_error());  
 }

         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];;
        $branch =  $_REQUEST['branch'];
        $emailId = $_REQUEST['email'];
        $student_roll = $_REQUEST['rollno'];
        $phone_no =  $_REQUEST['phone'];
        $division =  $_REQUEST['division'];
        $sem1_sgpi =  $_REQUEST['sem1cgpi'];
        $sem2_sgpi =  $_REQUEST['sem2cgpi'];

         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO student  VALUES ('$student_roll','$name',
            '$branch','$phone_no','$division','$sem1_sgpi','$sem2_sgpi','$emailId')";
         $con->query($sql)==true;
}
         

        ?>
      
      


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>