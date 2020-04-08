<html>
    <title>
    Select Team 1
    </title>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="C:\Users\kev\Desktop\project\BE\css\home.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        select {
        width: 150px;
        height: 40px;
        margin: 10px;
        border: 2px solid black;
        background: #0563af;
        color: #fff;
    }
    select:focus {
        min-width: 150px;
        width: auto;
    }
        .div2{
            border: 3px solid black;
            padding: 10px;
            text-align:left;
            font-size: 30px;
            font-family: "montserrat";
            color: black;
        }
        .div1{
            padding: 30px;
            font-family: "montserrat";
        }
        .btn{
            border: 2px solid black;
            transition: 0.8s;
            background: #0563af;
            color: #fff;
        }
        .btn1:hover{
            color: aqua;
        }
        </style>
    </head>
<body background="../BE/images/logo.jpg">
<div class="topnav">
<ul class="nav">
  <li>
    <a class="nav-item" href="ground.html"><img src="../BE/images/gr.png" width="25" height="25"> Ground</img></a>
  </li>
  <li class="active">
    <a class="active" href="teams.php"><img src="../BE/images/bat.ico" width="25" height="25"> Team 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="teams2.php"><img src="../BE/images/ball.ico" width="25" height="25"> Team 2</a>
  </li>
     
  <li class="nav-item">
    <a class="nav-link" href="winning.html"><img src="../BE/images/trophy.ico" width="25" height="25"> winning</a>
  </li>
    <li class="navbar-nav ml-auto">
        <a href="log.html" class="button">Logout</a>
    </li>
</ul>
</div>

<div class="div2"><b style="color: white;">Select Team 1:-</b></div>
<div class="div1" style:"200px;">
    <h3 style="color: white;">select team 1:</h3>
    <form action="teams2.php" method="post">
        

        <label style="font-size: 20px;" ><b>Team1</b></label>
        <select name="teams" required>
            <option>India</option>
            <option>Pakistan</option>
            <option>Australia</option>
            <option>West Indies</option>
            <option>England</option>
            <option>South Africa</option>
            <option>New Zealand</option>
            <!--
            <?php
            $connection= mysqli_connect("localhost", "root", "","people");
            $list = mysqli_query($connection,"SELECT DISTINCT(country) FROM `player`");
            while ($row_ah = mysqli_fetch_assoc($list))
            {
            ?>
            <option hidden selected>  </option>
            <option value="<?php echo $row_ah['country']; ?>">
                <?php echo $row_ah['country']; ?>
            </option>
            <?php
            }
            ?>
            -->
        </select>
               <br>
            <input type="submit" name="submit" />
    </form>

    
    
</div>
<script>
    function myFunction() {
        alert("You have succesfully selected Team 1");
    }
</script>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>