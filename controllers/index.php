<?php

if(isset($_POST['validNewVehicle']))
{
	if($_POST['type'] == 'car')
	{
		$newVehicle = new Car($_POST);
	}
	elseif($_POST['type'] == 'truck')
	{
		$newVehicle = new Truck($_POST);
	}
	elseif($_POST['type'] == 'bike')
	{
		$newVehicle = new Bike($_POST);
	}
}


include "views/indexView.php";

	var_dump($newVehicle);
// var_dump($_POST);


?>
