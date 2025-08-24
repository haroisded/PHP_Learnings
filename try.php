<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>

<?php

  $array = [
  [ "name" => "uel", "age" => 21, "hobby" => "soccer"],
  [ "name" => "bob", "age" => 30, "hobby" => "basketball"],
  [ "name" => "emily", "age" => 5, "hobby" => "princess"],
  ];


  $Filter_By_Hobby = function ($array, $user_hobby){
    $filteredNames = [];

      foreach( $array as $Filter ){

      if($Filter['hobby'] === $user_hobby){ $filteredNames[] = $Filter; } 

      }

    return $filteredNames;
  };
  // Assigning the function to a Var 

  
  $MyArr_Filtered = $Filter_By_Hobby($array, "soccer");
    // Transferring the Value of the Function to a Var


?>



<?php foreach ( $MyArr_Filtered as $arr): ?>


  <div>

    <?php 
      echo "
      name:  {$arr['name']} | 
      age:   {$arr['age']} | 
      hobby: {$arr['hobby']}
      "; 
    ?>
      
  </div>

<?php endforeach; ?>

</body>
</html>