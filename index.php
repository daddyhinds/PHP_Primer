<?php 
    $title = "Index";
    include 'includes/header.php'
    ?>

    <!-- Basic HTML-->
 <h1>Hello HTML - PHP primer</h1> 
 <br/> 
 <?php
 //Printing to HTML using echo
 echo "Hello PHP";
 // You can echo HTML tags
 echo '<br/>';
 echo 'second line'
 ?>

<?php
//variables need a '$'. They are not strongly typed
$name ='Kenworth Hinds';
$age = 21;

echo '<br/>';
// echo variable
echo $name;
echo '<h1>My Name Is: '.$name.'</h1>';
echo '<h1>My Age Is: '.$age.'</h1>';
// echo using double quotes and interpolation
echo "<h1>My Name is: $name </h1>";

echo '<button type="button" class="btn btn-success">ClicK Me!</button>';
//echo '<button type="button" class="btn btn-dark">ClicK Me!</button>';
echo '<button type="button" class="btn btn-primary">ClicK Me!</button>';
echo '<a href="https://www.heroku.com" target ="_blank" class= "btn btn-danger">Heroku.com</a>';

?>
<?php require 'includes/footer.php' ?>