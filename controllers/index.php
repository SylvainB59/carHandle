<?php

$VehicleManager = new VehicleManager();
$vehicles = $VehicleManager->getAllVehicles();

if(isset($_POST['validNewVehicle']))
{
	// create obj function of class type
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

	if(!empty($newVehicle))
	{
		$VehicleManager->addVehicle($newVehicle);
		header('refresh: 0');
	}
}


include "views/indexView.php";



?>
