
<!DOCTYPE html>
<html>
	<head>
	<title>PHP - Calculate Electricity Bill</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
   </head>
   <body>


<?php
$result_str=$result='';
if(isset($_POST['unit-submit']))
{
	$units=$_POST['units'];

  if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}

function calculate_bill($units)
{
	$unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if($units<=50)
    {
     $bill=$units*$unit_cost_first;
    }
    else if($units>50 && $units<=100){
     $temp=$units*$unit_cost_first;
     $remaing=$units-50;
     $bill=$temp+($remaing*$unit_cost_second);
    }
else if($units>100 && $units<=300)
{
	$temp=$units*$unit_cost_first+$units*$unit_cost_second;
	$remaing=$units-150;
	$bill=$temp+($remaing*$unit_cost_third);
}
else
{
	$temp=$units*$unit_cost_first+$units*$unit_cost_second+$units*$unit_cost_third;
	$remaing=$units-250;
	$bill=$temp+($remaing*$unit_cost_fourth);
}
     return number_format((float)$bill, 2, '.', '');
} 



?>   <div class="start">


   	<h1 id="heading"> Electricity Bill Calculator </h1>
   		<form action="" method="post" id="quiz-form">
            	<input type="number"  name="units" id="units" placeholder="Please enter no. of Units"  />
            	<br>
            	<br>
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>   
		
		<h2 id="end">
		    <?php echo '<br />' . $result_str; ?>
		</h2>

</div>
	</body>


</html>