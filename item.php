
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Store Item</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
	<div class="w3-container w3-half w3-margin-top">
				<form class="w3-container w3-card-4" method="POST">
					<center><h2>To store items</h2></center>
						<br>
					<label>Enter Items</label>
					<input class="w3-input" type="text" name="names" placeholder="Enter Item Names">
					<br>
					<label>Enter Price</label>
					<input class="w3-input" type="text" name="price" placeholder="Enter Price">	
					<br>
					<br>
					<input class="w3-button w3-red w3-right" type="submit" name="forms_submit">	
					<br>
					<br>
				</form>
	</div>
	<div class="w3-container w3-half w3-margin-top">
				<div class="w3-container w3-card-4">
					<center><h2>To Display items</center>
					<br>
					<table class="w3-table w3-stripped">
						<tr class="w3-red">
							<th>Item Name</th>
							<th>Item Price</th>
						</tr>
						<tr>
 <?php
     if($_POST)  
    {   
        $names = $_POST['names']; 
        $price = $_POST['price'];

        $nme = explode(',',$names);
        $x = count($nme);

        $prc = explode(',',$price);	
            for($i=0;$i<$x;$i++){
    echo "<tr>";
        echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
    }
    echo "<tr>";
echo "</table>";

        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }

        echo '<h4>Total Amount Is: <b>'.$total. '</b>';

        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo '<br>';
        echo 'Costliest item Is:<b> '.$nme[$ky]. '</b>';

        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest item Is:<b> '.$nme[$key]. '</b>';
}     
?>
							<td></td>
							
							<td></td>
						</tr>
					</table>
					<br>
					<br>

				</div>
	</div>
</body>
</html>