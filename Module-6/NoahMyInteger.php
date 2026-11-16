<!DOCTYPE html>
<html>
<head>
<?php
// pull MyInteger fclass file
  require 'MyInteger.php';
  // initiliaze string
  $number = [new MyInteger(rand(1,100)), new MyInteger(rand(1,100))]; // initialize class object array with random numbers
  ?>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Palindrome Test</title>
</head>
<body>

<h2> Numbers </h2>
<table>
 <tr>
  <th> Number </th>
  <th> Is Prime </th>
  <th> Is Even </th>
  <th> Is Odd </th>
</tr>

<tr>
 <?php foreach ($number as $num){ //display the object instances and showcase each function working?> 
  <tr>
    <th><?php echo $num->getValue();?></th>
    <th><?php echo ($num->isPrime()) ? "True" : "False";?></th>
    <th><?php echo ($num->isEven()) ? "True" : "False";?></th>
    <th><?php echo ($num->isOdd()) ? "True" : "False";?></th>
  </tr>
  <?php } // close out for loop?>
</table>

  <h2> New Numbers </h2>
  <table>
 <tr>
  <th> Number </th>
  <th> Is Prime </th>
  <th> Is Even </th>
  <th> Is Odd </th>
</tr>

<tr>
 <?php foreach ($number as $num){ 
   $num->setValue(rand(1,100)); //showcase the set function
  ?>
  <tr>
    <th><?php echo $num->getValue();?></th>
    <th><?php echo ($num->isPrime()) ? "True" : "False";?></th>
    <th><?php echo ($num->isEven()) ? "True" : "False";?></th>
    <th><?php echo ($num->isOdd()) ? "True" : "False";?></th>
  </tr>
  <?php } // close out for loop?>
</table>
</body>
</html>

