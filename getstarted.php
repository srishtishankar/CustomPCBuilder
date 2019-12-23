<?php require_once("config.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Compare Parts</title>
	<link rel="stylesheet" type="text/css" href="getstarted.css">
</head>
<body>
	<div id="header">
		<ul>
  			<li><a href="index.html">Home</a></li>
  			<li><a href="getstarted.html">Compare Parts</a></li>
  			<li><a href="starterpack.html">Starter Pack</a></li>
  			<li><a href="contact.html">Contact Us</a></li>
		</ul>
    <p id="logi" >you are logged in </p>
	</div>
	<div id="content">
		<h1>Check Compatibility</h1> <br><br>
		<form action="getstarted.php" method="Post">

  	 <?php 
     $query="SELECT Mother_Board FROM Motherboard";
     $result=mysqli_query($conn,$query);
     while($row=mysqli_fetch_assoc($result))
         {
               $result_array[]=$row;
          }
?>

    <select name="MB">
        <option selected="selected">--Select Motherboard--</option>
        <?php 
        foreach($result as $values){
        ?>
        <option value="<?php print_r($values['Mother_Board']);?>">
          <?php
          print_r($values['Mother_Board']); 
          ?>
          </option>
        <?php
        }
        ?>

     </select>

     <?php 
     $query="SELECT processor FROM processor";
     $result1=mysqli_query($conn,$query);
     while($row=mysqli_fetch_assoc($result1))
         {
               $result_array[]=$row;
          }
?>

    <select name="processor">
        <option selected="selected">--Select processor--</option>
        <?php 
        foreach($result1 as $values){
        ?>
        <option value="<?php print_r($values['processor']);?>">
          <?php
          print_r($values['processor']); 
          ?>
          </option>
        <?php
        }
        ?>
    </select>

  <?php 
     $query="SELECT ram FROM ram";
     $result2=mysqli_query($conn,$query);
     while($row=mysqli_fetch_assoc($result2))
          {
               $result_array[]=$row;
          }
  ?>

    <select name="ram">
        <option selected="selected">--Select RAM--</option>
        <?php 
        foreach($result2 as $values){
        ?>
        <option value="<?php print_r($values['ram']);?>">
          <?php
          print_r($values['ram']); 
          ?>
          </option>
        <?php
        }
        ?>
    </select>

        <br><br><br>
  			<input type="submit" value="Check" id="submit" name="go">
  		</form> <br><br>

      <?php

      session_start();

      if(isset($_POST['go'])) {
      $md = $_POST['MB'];
      $Ram = $_POST['ram'];
      $Proc = $_POST['processor']; 

      $_SESSION['MB'] = $md;
      $_SESSION['ram'] = $Ram;
      $_SESSION['processor'] = $Proc;


      $q1 = mysqli_query($conn,"SELECT Compat_var_ram FROM Motherboard where mother_board = '".$md."'");
      $q2 = mysqli_query($conn,"SELECT Compat_var_proc FROM Motherboard where mother_board = '".$md."'");
      $q3 = mysqli_query($conn,"SELECT Compat_var_mb FROM processor where processor = '".$Proc."'");

      $A = mysqli_fetch_array($q1,MYSQLI_ASSOC);
      $B = mysqli_fetch_array($q2,MYSQLI_ASSOC);
      $C = mysqli_fetch_array($q3,MYSQLI_ASSOC);


      $A1 = $A['Compat_var_ram'];
      $B1 = $B['Compat_var_proc'];
      $C1 = $C['Compat_var_mb'];

      if($A1 == $B1 && $B1 == $C1 && $C1 == $A1) {
      print('It is Compatible');
      echo '<p><a href="buynow.php" style="color: #2196F3"> Buy Now </a></p>';
    }
    else{
    print('It is not Compatible');
  }

    }//outer if
      ?>

  <script>
      const log = document.getElementById("logi");

      setTimeout(() => {
      log.style.display = 'none';
      }, 2000);
  </script>


	</div>
</body>
</html>