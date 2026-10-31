<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Random_num Table</title>
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
    <th><?php echo mt_rand(1,100)?></th>
    <?php } // close out p for loop?>
  </tr>
  <?php } // close out i for loop?>
</table>
</body>
</html>

