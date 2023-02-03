<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "javatpoint";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}
// session_start();
$username = $_GET['username'];
$sql="SELECT * FROM `login` WHERE username = $username";
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
    <section class="heading">
        <div class="text-start group-key">
            <div class="row">
                <div class="col-md-3 group-key-col">
                    GROUP ID:-
                </div>
                <div class="col-md-8 group-key-col">
                    GUIDE NAME:-
                </div>
            </div>
        </div>
        <div class="student-details">
            <div class="row">
                <div class="col-md-2 col-4 student-roll">
                    ROLL NO. :-
                </div>
                <div class="col-md-4 col-6 student-name">
                    STUDENT NAME:-
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-4 student-roll">
                    ROLL NO. :-
                </div>
                <div class="col-md-4 col-6 student-name">
                    STUDENT NAME:-
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-4 student-roll">
                    ROLL NO. :-
                </div>
                <div class="col-md-4 col-6 student-name">
                    STUDENT NAME:-
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-4 student-roll">
                    ROLL NO. :-
                </div>
                <div class="col-md-4 col-6 student-name">
                    STUDENT NAME:-
                </div>
            </div>
            <div class="vl">
                <div class="project-details">
                <div class="row">
                    <div class="col project-title">
                    PROJECT TITLE :- Project Managament System
                </div>
                <div class="row">
                    <div class="col project-domain">
                    PROJECT DOMAIN :- Web Development
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
        <div class="flip-card col-lg-3-md-4-sm-6">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h2>PROJECT PROPOSAL</h2>  
                <div class="due-date">
                    dd/mm/yyyy  
                </div>
                <span class="material-icons approved front-icon" style="font-size:60px; color:green;">
                  verified
                  </span>   
              </div>
              <div class="flip-card-back">

                <input type="file" id="upload" hidden />
                <label class="attach-button" for="upload">Download</label>
                <div class="modified-date">
                    dd/mm/yyyy  
                </div>
                <button class="flip">
                <span class="material-symbols-outlined back-icon" style="font-size: 60px; color:green">
                  check_box
                  </span></button><button class="flip">
                  <span class="material-symbols-outlined back-icon" style="font-size:60px; color:#3100f4">
                    restart_alt
                    </span></a>
                    <button type="button" class="collapsible active"><span class="material-symbols-outlined back-icon" style="font-size:60px; color:yellow; ">
                      add_notes
                      </span></a></button>
                      <div class="content active ">
                        <textarea cols="40" rows="10"></textarea>
                        </div>
                    <!-- <span class="material-symbols-outlined back-icon" style="font-size:60px; color:yellow; ">
                      add_notes
                      </span></a> -->
                 </div>
            </div>
          </div>

        <!-- card 2  -->
               <div class="flip-card col-lg-3-md-4-sm-6">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <h2>ABSTRACT SUBMISSION</h2>  
            <div class="due-date">
                dd/mm/yyyy  
            </div>
            <span class="material-icons front-icon" style="font-size: 60px; color:red;">
              pending_actions
              </span>          </div>
          <div class="flip-card-back">

            <input type="file" id="upload" hidden />
            <label class="attach-button" for="upload">Download</label>
            <div class="modified-date">
                dd/mm/yyyy  
            </div>
            <textarea class="remark" cols="4" rows="50"></textarea>
          </div>
        </div>
      </div>
        <!-- card 3 -->
        <div class="flip-card col-lg-3-md-4-sm-6">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>INTRODUCTION <br>. </h3>
                <div class="due-date">
                    dd/mm/yyyy  
                </div>
                <span class="material-icons front-icon" style="font-size:60px; color:#31008d" >
                  hourglass_bottom
                  </span>               </div>
              <div class="flip-card-back">

                <input type="file" id="upload" hidden />
                <label class="attach-button" for="upload">Download</label>
                <div class="modified-date">
                    dd/mm/yyyy  
                </div>
                <textarea class="remark" cols="4" rows="50"></textarea>
              </div>
            </div>
          </div>
        
          <!-- card 4 -->
        <div class="flip-card col-lg-3-md-4-sm-6">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h2>LITERATURE SURVEY</h2>  
                <div class="due-date">
                    dd/mm/yyyy  
                </div>
                <span class="material-icons front-icon" style="font-size: 60px; color:red;">
                  pending_actions
                  </span>  
                              </div>
              <div class="flip-card-back">

                <input type="file" id="upload" hidden />
                <label class="attach-button" for="upload">Download</label>
                <div class="modified-date">
                    dd/mm/yyyy  
                </div>
                <textarea class="remark" cols="4" rows="50"></textarea>

              </div>
            </div>
          </div>

   
        <!-- Card 5 -->
        <div class="flip-card col-lg-3-md-4-sm-6">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h2>EXISTING SYSTEM</h2>  
                <div class="due-date">
                    dd/mm/yyyy  
                </div>
                <span class="material-icons front-icon" style="font-size: 60px; color:red;">
                  pending_actions
                  </span>  
                 </div>
              <div class="flip-card-back">

                <input type="file" id="upload" hidden />
                <label class="attach-button" for="upload">Download</label>
                <div class="modified-date">
                    dd/mm/yyyy  
                </div>
                <input class="md-4" cols="50" rows="4" type="text">

              </div>
            </div>
          </div>

        <!-- card 6  -->
               <div class="flip-card col-lg-3-md-4-sm-6">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <h2>PROPOSED SYSTEM</h2>  
            <div class="due-date">
                dd/mm/yyyy  
            </div>
            <span class="material-icons front-icon" style="font-size: 60px; color:red;">
              pending_actions
              </span>  
              </div>
          <div class="flip-card-back">

            <input type="file" id="upload" hidden />
            <label class="attach-button" for="upload">Download</label>
            <div class="modified-date">
                dd/mm/yyyy  
            </div>
            <textarea class="remark" cols="4" rows="50"></textarea>

          </div>
        </div>
      </div>
        <!-- card 7 -->
        <div class="flip-card col-lg-3-md-4-sm-6">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h2>DESIGN <br>.</h2>  
                <div class="due-date">
                    dd/mm/yyyy  
                </div>
                <span class="material-icons front-icon" style="font-size: 60px; color:red;">
                  pending_actions
                  </span>  
                  </div>
              <div class="flip-card-back">

                <input type="file" id="upload" hidden />
                <label class="attach-button" for="upload">Download</label>
                <div class="modified-date">
                    dd/mm/yyyy  
                </div>
                <textarea class="remark" cols="4" rows="50"></textarea>

              </div>
            </div>
          </div>
        
          <!-- card 8 -->
        <div class="flip-card col-lg-3-md-4-sm-6">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h4>10% IMPLEMENTATION &ROUGH DRAFT</h4>  
                <div class="due-date">
                    dd/mm/yyyy  
                </div>
                <span class="material-icons front-icon" style="font-size: 60px; color:red;">
                  pending_actions
                  </span>  
                 </div>
              <div class="flip-card-back">

                <input type="file" id="upload" hidden />
                <label class="attach-button" for="upload">Download</label>
                <div class="modified-date">
                    dd/mm/yyyy  
                </div>
                <textarea class="remark" cols="4" rows="50"></textarea>

              </div>
            </div>
          </div>

          <!-- CARD 9 -->
          <div class="flip-card col-lg-3-md-4-sm-6">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h2>FINAL REPORT </h2>  
                <div class="due-date">
                    dd/mm/yyyy  
                </div>
                <span class="material-icons front-icon" style="font-size: 60px; color:red;">
                  pending_actions
                  </span>  
                  </div>
              <div class="flip-card-back">

                <input type="file" id="upload" hidden />
                <label class="attach-button" for="upload">Download</label>
                <div class="modified-date">
                    dd/mm/yyyy  
                </div>
                <textarea class="remark" cols="4" rows="50"></textarea>

              </div>
            </div>
          </div>

    </section>

</body>
<script src="dashboard.js">
</script>
</html>