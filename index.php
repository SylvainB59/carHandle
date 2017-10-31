<?php
// class automoad
function loadClass($class)
{
	require('entities/'.$class.'.php');
}

spl_autoload_register('loadClass');

require('model/VehicleManager.php');

$VehicleManager = new VehicleManager();
$vehicles = $VehicleManager->getAllVehicles();

function arrayToObj($array)
{
	// create obj function of class type
	if($array['type'] == 'car')
	{
		$newVehicle = new Car($array);
	}
	elseif($array['type'] == 'truck')
	{
		$newVehicle = new Truck($array);
	}
	elseif($array['type'] == 'bike')
	{
		$newVehicle = new Bike($array);
	}
	return $newVehicle;
}



//this can be something close to a routing system

if(isset($_POST['vehicleDetail']))
{
	// load the vehicle page
	include('controllers/vehicle.php');
}
elseif(isset($_POST['index']))
{
	// return to the index
	include('controllers/index.php');
}
else
{
	// initial load -> index
	include('controllers/index.php');
}

?>
