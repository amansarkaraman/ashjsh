<!DOCTYPE html>
<html>
<head>
	<style >		
	h1{
		color:white;
	}
</style>
<title> </title>
<link rel="stylesheet" type="text/css" href="class.css">
</head>
<body>
    <?php include('header1.php');?>

<div class="call">	
<header>
<div class="call1">
	 <h1>Class Schedule</h1>
</div>	
</header>
<main>	
    <div > 
   <?php
    $s1=time();
    $s2=date("d-M-Y",$s1);
   echo"Today:$s2<br>";
   ?>
    </div>
    <div class="item9"> 

   <p>Course Name:<a href="CG[G].php" style="text-decoration: none ">Computer Graphics[G]</a></p>
    <p1>Start time</p1>
     <p>Course Name:<a href="https://www.w3schools.com/" style="text-decoration: none ">Computer Graphics[G]</a></p>
    <p1>Start time</p1>
     <p>Course Name:<a href="https://www.w3schools.com/" style="text-decoration: none ">Computer Graphics[G]</a></p>
    <p1>Start time</p1>
   

    </div>

    <div >
    <?php
    $s1=time();
    $s2=strtotime("+1day");
    $s3=date("d-M-Y",$s2);
    echo"Tomorrow:$s3<br>";
    ?>
    </div>
    <div> Class info</div>

    <div> 

   <?php
    $s1=time();
    $s2=strtotime("+2day");
    $s3=date("d-M-Y",$s2);
    echo"$s3<br>";
    ?>
    </div>
    <div> Class info</div>

    <div> 
   <?php
    $s1=time();
    $s2=strtotime("+3day");
    $s3=date("d-M-Y",$s2);
    echo"$s3<br>";
    ?>


    </div>
    <div> Class info</div>
   </main>

</div>
</body>
</html>