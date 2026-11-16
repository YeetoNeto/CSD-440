<!DOCTYPE html>
<html>
<head>
<?php
  // initiliaze string
  $customers = [ 
    ["firstName" => "John", "lastName"=> "Smith", "age" => 42, "phone" => "434-444-0932"], 
    ["firstName" => "Peter", "lastName"=> "Parker", "age" => 19, "phone" => "434-444-2342"],
    ["firstName" => "Benson", "lastName"=> "Boone", "age" => 21, "phone" => "340-444-0546"],
    ["firstName" => "Kenzie", "lastName"=> "Ruth", "age" => 22, "phone" => "434-444-0234"],
    ["firstName" => "Terry", "lastName"=> "Spindleburg", "age" => 54, "phone" => "434-444-2345"],
    ["firstName" => "Lenzie", "lastName"=> "Potter", "age" => 24, "phone" => "434-444-5678"],
    ["firstName" => "Lori", "lastName"=> "Potter", "age" => 27, "phone" => "920-444-1253"],
    ["firstName" => "Adam", "lastName"=> "Smith", "age" => 23, "phone" => "540-444-1532"],
    ["firstName" => "Esther", "lastName"=> "Heisenhower", "age" => 24, "phone" => "540-444-1234"],
    ["firstName" => "Graham", "lastName"=> "Bartholomew", "age" => 19, "phone" => "434-444-0875"] 
    ]; //initialize associative array

    usort($customers, function ($a, $b) { //use usort to sort the array by first name
      return strcmp($a["firstName"], $b["firstName"]);
    });

  ?>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Array Manipulation</title>
</head>
<body>

<h2>Customers sorted A-Z</h2>
<table>
 <tr>
  <th> Customer Name </th>
  <th> Age </th>
  <th> Phone # </th>
</tr>

<tr>
 <?php foreach ($customers as $person){ ?>
  <tr>
    <th><?php echo $person["firstName"] . " " . $person["lastName"];?></th>
    <th><?php echo $person["age"];?></th>
    <th><?php echo $person["phone"];?></th>
  </tr>
  <?php } // close out for loop?>
</table>

<h2>Only showing customers who's age is less than 30 </h2>
<table>
 <tr>
  <th> Customer Name </th>
  <th> Age </th>
  <th> Phone # </th>
</tr>

<tr>
 <?php 
 //create a filtered array using array filter to populate it if the array index contains an age less than 30
    $filter = array_filter($customers, function($customer) { 
      return $customer["age"] < 30;
    });
      foreach ($filter as $person){ //use the filter array for the foreach?> 
  <tr>
    <th><?php echo $person["firstName"] . " " . $person["lastName"];?></th>
    <th><?php echo $person["age"];?></th>
    <th><?php echo $person["phone"];?></th>
  </tr>
  <?php } // close out for loop?>
</table>

<h2>Only showing customers who's age is less than 30 and has a 434 area code </h2>
<table>
 <tr>
  <th> Customer Name </th>
  <th> Age </th>
  <th> Phone # </th>
</tr>

<tr>
 <?php 
    $filter = array_filter($customers, function($customer) {
      return $customer["age"] < 30 && str_starts_with($customer["phone"], "434");
    });
    //create a filtered array using array filter to populate it if the array index contains an age less than 30 and where the phone string starts with 434
      foreach ($filter as $person){ //use the filter array for the foreach?>
  <tr>
    <th><?php echo $person["firstName"] . " " . $person["lastName"];?></th>
    <th><?php echo $person["age"];?></th>
    <th><?php echo $person["phone"];?></th>
  </tr>
  <?php } // close out for loop?>
</table>

<h2>Only showing customers who's last name constains an "s" </h2>
<table>
 <tr>
  <th> Customer Name </th>
  <th> Age </th>
  <th> Phone # </th>
</tr>

<tr>
 <?php 
    $filter = array_filter($customers, function($customer) {
      return stripos($customer["lastName"], "s") !== false;
    });
    //create a filtered array using array filter to populate it if the array index contains a lastname that contains an s regardless of Capitilization
      foreach ($filter as $person){ //use the filter array for the foreach?>
  <tr>
    <th><?php echo $person["firstName"] . " " . $person["lastName"];?></th>
    <th><?php echo $person["age"];?></th>
    <th><?php echo $person["phone"];?></th>
  </tr>
  <?php } // close out for loop?>
</table>
</body>
</html>


