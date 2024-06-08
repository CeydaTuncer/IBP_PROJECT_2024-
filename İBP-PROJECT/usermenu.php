<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"></div>
    <ul class="nav navbar-nav"></ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
      
      if (isset($_SESSION['useremail'])) {
          $useremail = $_SESSION['useremail'];
          echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span> ' . $useremail . '</a></li>';
      } else {
      
      }
      ?>
    </ul>
  </div>
</nav>



<div id="mysidebar" class="sidebar">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

 

  <img id="logo" src="logo.png" alt="Logo">

  <a href="http://localhost/ADMIN/userpanel/userhomepage.php">ANA SAYFA</a>

  <a href="http://localhost/ADMIN/userpanel/userduyurupage.php">DUYURU İŞLEMLERİ</a>

  <a href="http://localhost/ADMIN/userpanel/usermesajpage.php">MESAJ İŞLEMLERİ </a>

  <a href="http://localhost/ADMIN/userpanel/userprofil.php">HESAP AYARLARI</a>

  <a href="http://localhost/ADMIN/Homescreen.php">ÇIKIŞ YAP</a>



</div>



<div id="main">


    <span style="font-size:30px;cursor:pointer ; position: fixed; left: 10px; top: 4px; color: white;   " onclick="openNav()">&#9776; </span>
    
</div>





<script>

function openNav() {

  document.getElementById("mysidebar").style.width = "250px";

  document.getElementById("main").style.marginLeft = "250px";

}



function closeNav() {

  document.getElementById("mysidebar").style.width = "0";

  document.getElementById("main").style.marginLeft= "0";

}

</script>




<style>

body {

  font-family: "Lato", sans-serif;

}



.sidebar {

  height: 100%;

  width: 0;

  position: fixed;

  z-index: 1;

  top: 0;

  left: 0;

  background-color: #000000;

  overflow-x: hidden;

  transition: 0.5s;

  padding-top: 60px;

}



.sidebar a {

  padding: 8px 8px 8px 32px;

  text-decoration: none;

  font-size: 17px;

  color: #818181;

  display: block;

  transition: 0.3s;

}



.sidebar a:hover {

  color: #f1f1f1;

}



.sidebar .closebtn {

  position: absolute;

  top: 0;

  right: 25px;

  font-size: 36px;

  margin-left: 50px;

}




#main {

  transition: margin-left .5s;



  padding: 16px;

}



@media screen and (max-height: 450px) {

  .sidebar {padding-top: 15px;}

  .sidebar a {font-size: 18px;}

}

#logo {
            display: block;
            margin: 20px auto;
            width: 150px; 

        }

</style>

</body>

</html>