<!DOCTYPE html>
<html>
<head>
<?php
// pull functions file
  require 'functions.php';
  // initiliaze string array
  $string = ["racecar", "madam", "civic", "vehicle", "boat","folder"];
  ?>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Palindrome Test</title>
</head>
<body>

<table>
 <tr>
  <th> Text </th>
  <th> Text Reversed </th>
  <th> Palindrome </th>
</tr>
<!-- for loop the table row for each string in the array -->
<tr>
 <?php foreach ($string as $text){ ?>
  <tr>
    <th><?php echo $text;?></th>
    <th><?php echo strrev($text);?></th>
    <th><?php echo palindrome($text);?></th>
  </tr>
  <?php } // close out for loop?>
</table>
</body>
</html>

