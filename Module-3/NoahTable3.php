<!DOCTYPE html>
<html>
<head>
  <?php
  require 'functions.php';
  ?>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Function Random Num table</title>
</head>
<body>

<table>
 <tr>
  <th> Column 1 </th>
  <th> Column 2 </th>
</tr>

<tr>
 <?php for ($i = 0; $i < 4; $i++){ ?>
  <tr>
    <?php for ($p = 0; $p < 2; $p++){ ?>
    <th><?php echo addSum(mt_rand(1,100),mt_rand(1,100))?></th>
    <?php } // close out p for loop?>
  </tr>
  <?php } // close out i for loop?>
</table>
</body>
</html>

