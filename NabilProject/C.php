<?php
session_start();
if(isset($_SESSION['uname'])){
}

else{

    echo "<script>location.href='loginAdmin.php'</script>";
}

require_once 'controller/classschadule.php';
$day = fetchAllday();

?>
<!DOCTYPE html>
<html>
<head>
	<style >		
	h1{
		color:white;
	}
  .l1
  {
    text-align: left;
  }
</style>

<title> </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/C1.css">
</head>

<body>
  <?php include('header1.php');?>
  <div class="main_div">
<div class="main_internaldiv">
  

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
    ?>
    <table>
    <tr> 
    <th>Today:<?php echo"$s2"?></th>
    </tr>
    </table>
    </div>
    <div class="item9"> 
    <table>
    <tr>
    <th>Course Name:<a href="fc.php" style="text-decoration: none "></a></th><br>
    </tr>
    <th class=l1>Start time:</th>
    </tr>
    <tbody>
      <td data-label="Course Name"><?php echo $day['course_name'] ?></td>
    </tbody>
    </table>

    </div>

    <div >
    <?php
    $s1=time();
    $s2=strtotime("+1day");
    $s3=date("d-M-Y",$s2);
       ?>
    <table>
    <tr> 
    <th>Tomorrow:<?php echo"$s3"?></th>
    </tr>
    </table>
    </div>
    <div class="item9"> 
    <table>
    <tr>
    <th>Course Name:<a href="A.php" style="text-decoration: none ">Advance Dtabase management system [A]</a></th><br>
    </tr>
    <th class=l1>Start time:</th>
    </tr>
    </table>
    </div>
    <div> Class info</div>

    <div class="item9"> 

   <?php
    $s1=time();
    $s2=strtotime("+2day");
    $s3=date("d-M-Y",$s2);
    echo"$s3<br>";
    ?>
    </div>
    <div> Class info</div>

    <div class="item9"> 
   <?php
    $s1=time();
    $s2=strtotime("+3day");
    $s3=date("d-M-Y",$s2);
    echo"$s3<br>";
    ?>


    </div>
    <div> Class info</div>

    <div class="item9"> 
   <?php
    $s1=time();
    $s2=strtotime("+4day");
    $s3=date("d-M-Y",$s2);
    echo"$s3<br>";
    ?>


    </div class="item9">
    <div> Class info</div>
     <div> 
   <?php
    $s1=time();
    $s2=strtotime("+5day");
    $s3=date("d-M-Y",$s2);
    echo"$s3<br>";
    ?>


    </div>
    <div> Class info</div>

   </main>

</div>
</div>
</div>


<?php include('footer.php');?>

</body>

</html>