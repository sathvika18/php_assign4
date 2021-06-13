<html>
<head><title>Reverse</title></head>
<body style="background-color: black;color: white; font-size:30px;">
<center>
<h3 style="color: yellow">To find reverse, sum of digit and check given number is palindrome or not</h3>
    <form method="post">        
Enter a Number: <input type="text" name="num"/><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $ori_num = $num;
        $rev_num = 0;
        $sum = 0;
        $rem = 0;
        while($num > 1)
        {
            $rem = $num % 10;
            $sum += $rem;
            $rev_num = $rev_num * 10 + $rem;
            $num = (int)$num / 10;
        }
        echo "The sum of the digits of $ori_num is $sum"; 
        echo "</br>";
        if($ori_num == $rev_num){  
            echo "The number $ori_num is Palindrome";     
        }else{  
            echo "The number $ori_num is not a Palindrome";   
        }  
}     
      ?> 
</center>
</body>
</html>


