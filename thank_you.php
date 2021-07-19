<?php 
  session_start();
?>

<html>
  <head>

  </head>
  <body>
    <h1>Thank you for booking a session with Leapfrog Learning</h1>
    <p>An email has been sent with your session confirmation (check your spam/junk folder)</p>

    <?php 
      echo "<p>" . $_SESSION["name"] . "</p>";
    ?>
    
    
  </body>
</html>
