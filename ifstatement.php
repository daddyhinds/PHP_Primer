<?php 
    $title = "If Statements";
    include 'includes/header.php'
    ?>
<h1><?php echo $title ?></h1>
  <?php
  // An If Statement that ewill carry out an action based on the value of the variable.

  echo '<h2>If Statement</h2>';
$grade = 80;
if($grade >= 50){
    echo '<h3 style="color:green">YOU HAVE PASSED</h3>';
}
else{
    echo '<h3 style="color:red">YOU HAVE FAILED</h3>';
}
 $grade = 'A';
 //if-else if-else
 if($grade == 'A'){
     echo '<h2 style="color:green">YOU ARE A SUPERSTAR</h2>';
 } 
  elseif($grade == 'B'){
     echo '<h2 style="color:blue">YOU did well </h2>';
      
  }
  else{
     echo '<h2 style="color:red">YOU have failed..... </h2>';


  }
  ?>

<?php require 'includes/footer.php' ?>