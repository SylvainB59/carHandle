<?php

class VehicleManager
{
	public function getBdd()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=carHandle;charset=utf8', 'root', '');
		return $bdd;
	}
}

?>
