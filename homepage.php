<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        /* CSS */* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f9e8f4; /* Light pink background */
            color: #6a2c70; /* Purple text */
            line-height: 1.6;
        }
        
        .navbar2 {
            background-color: #b19cd9; /* Light purple navbar background */
            padding: 10px 20px;
            text-align: center;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center;

        }
        
        .username {
            font-size: 1.2em;
            font-weight: bold;
            text-align: center;
        }
        
        .navbar {
            top: 20px;
            background-color: #fde0f7; /* Light pink navbar background */
            padding: 10px;
            margin-bottom: 20px;
        }
        
        .navbar ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
        }
        
        .navbar li {
            margin: 0 10px;
        }
        
        .navbar a {
            text-decoration: none;
            color: #6a2c70; /* Purple text */
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .navbar a:hover {
            background-color: #b19cd9; /* Light purple hover */
        }
        
        /* Style the links inside the sidenav */
#mySidenav a {
   
  position: absolute; /* Position them relative to the browser window */
  left: -80px; /* Position them outside of the screen */
  transition: 0.3s; /* Add transition on hover */
  padding: 15px; /* 15px padding */
  width: 100px; /* Set a specific width */
  text-decoration: none; /* Remove underline */
  font-size: 12px; /* Increase font size */
  color: white; /* White text color */
  border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
  left: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#A1 {
  top: 80px;
  background-color: #8ef6e4;
}

#A2 {
  top: 160px;
  background-color: #9896f1; 
}

#A3 {
  top: 220px;
  background-color: #d59bf6; 
}

#A4 {
  top: 280px;
  background-color: #edb1f1 ;
}

#A5 {
  top: 340px;
  background-color:  #8ef6e4;
}

#A6 {
  top: 400px;
  background-color:  #9896f1; 
}

#A7 {
  top: 460px;
  background-color:#d59bf6; 
}

#A8 {
  top: 520px;
  background-color: #edb1f1 ;
}
/*     
DROP DOWN CONTENT */
.dropdown-content {
            display: none;
            position: absolute;
            background-color: #fde0f7; /* Light pink background */
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: #6a2c70; /* Purple text */
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #b19cd9; /* Light purple hover */
        }

        .navbar li:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <div class="navbar2">
    <div class="header">
        <p class="username">
        Hello <?php 
        if(isset($_SESSION['email'])){
            $email=$_SESSION['email'];
            $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
            while($row=mysqli_fetch_array($query)){
                echo $row['firstname'].' '.$row['lastname'];
            }
        }
        ?>
        :)
        
        </p>
       
    </div>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="#settings">MORE</a>
            
                <div class="dropdown-content">
                    <a href="#link1">FUN QUIZZES</a>
                    <a href="#link2">SMALL RECIPES!</a>
                    <a href="#link3">MOTIVATING VLOGS</a>
                </div>
            </li>
        </ul>
    </nav>
    
    <div id="mySidenav" class="sidenav">
  <a href="#" id="A1">POMO-TIMER</a>
  <a href="#" id="A2">TO-DO LIST</a>
  <a href="#" id="A3">RECORDER</a>
  <a href="#" id="A4">BOOKS</a>
  <a href="#" id="A5">ALARM</a>
  <a href="#" id="A6">WEATHER</a>
  <a href="#" id="A7">NOTES</a>
  <a href="#" id="A8">VISION BOARD</a>
</div>
       
   

  
</body>
</html>
