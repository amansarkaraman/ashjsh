<?php
session_start();
if(isset($_SESSION['uname'])){
}

else{

    echo "<script>location.href='loginAdmin.php'</script>";
}

require_once 'controller/studentInfo.php';

$students = fetchAllStudents();

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style >		
	h1{
		color:red;
	}
</style>
<title> </title>
<link rel="stylesheet" type="text/css" href="css/fc1.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php include('header1.php');?>
   <div class="main_div">
<div class="main_internaldiv">
<div class="call">  
 <div class="call1">
<main class="l1">
    
<header>
    
    <div class="call12">
     <p1>Computer Graphics[E]</p1>
       </div>
     <div class="a0">
    <main class="l2">
         <div>
        <img src="Test.png" alt="picture of a feculty" style="width:40px;height:60px;">
        </div>
        <div>
        <p2>MD Kisor Morol</p2><br>
        <p3>Email:morol@aiub.edu</p3><br>
        <p4>Feculty</p4>
        </div>

     </main>
     </div>
  
      
</header>

   <div class="a1">Time:</div>
   <div class="a2">Class Type:</div>
   <div class="a3">Room No:</div>

</main>
</div>
<div class="main">
  <div class="design">
      </div>

<div class="M3-bar ">
  <button class=" MI-button" onclick="openCity('TSF')">TSF</button>
  <button class=" MI-button" onclick="openCity('Notes')">Notes</button>
  <button class=" MI-button" onclick="openCity('Notices')">Notices</button>
</div>

<div id="TSF" class="w3-container city">
  <h2>TSF</h2>
  <p>Here will be the TSF</p>
  

</div>

<div id="Notes" class="w3-container city" style="display:none">
  <h2>Notes</h2>
  <p>here will be the Notes</p> 
</div>

<div id="Notices" class="w3-container city" style="display:none">
  <h2>Notices</h2>
  <p>here will be the Notices</p>
</div>
</div>
<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>
</div>
</div>
</div>
<?php include('footer.php');?>
</body>
</html>