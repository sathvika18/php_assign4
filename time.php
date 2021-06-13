<html>
    <head><title>time</title></head>
    <body style="background-color:black">
    <center>
     <h1 style="color:yellow">CURRENT TIME</h1> 
      <p style="color:white;font-size:50px">
      <?php    
      date_default_timezone_set("Asia/Kolkata");
        echo date('h:i:s A');
     ?>
     </p>
</center>
    </body>
    </html>