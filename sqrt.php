<html>
<head><title>Random</title></head>
<body style="background-color: blue;color: white;">
<center>
<h1 style="color:yellow" >Random number and its Square root</h1>
<br><br>
<h2><p>Number generated randomly is  <?php
    $choice = rand(1, 50);
    echo $choice;
?></p><p> And its square root is <?php
    echo round(sqrt($choice),3);
?></p></h2>
</center>
</body>
</html>