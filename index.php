<?php
    echo "Hello World!!!\n";
    $date = "7-12-2021T14:35";
    $input= "Hello World";

    

    $result = explode("T", $date);

  
   foreach($result as $input) {
       echo "$input ";
   }
?>