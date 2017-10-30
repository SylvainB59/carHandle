<?php
// class automoad
function loadClass($class)
{
	require('entities/'.$class.'.php');
}

spl_autoload_register('loadClass');



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
