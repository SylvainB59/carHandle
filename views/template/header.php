<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Car Handle</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="../assets/css/bootstrap.css"> -->
        <!-- <link rel="stylesheet" href="../assets/css/normalize.css"> -->
        <link rel="stylesheet" href="assets/css/main.css">
    
    </head>
    <body>
        <header>
            <h1>CAR HANDLE</h1>
        </header>
        <aside class="my-3">
            <?php
            if(isset($_POST['addNewVehicle']))
            {
            ?>
                <form action="" method="POST" class="row">
                    <p class="col">
                        <label for="model">Model : </label>
                        <input type="text" name="model" id="model" required>
                    </p>
                    <p class="col">
                        <label for="color">Color : </label>
                        <input type="text" name="color" id="color" required>
                    </p>
                    <p class="col">
                        Type :<br>
                        <input type="radio" name="type" value="car" id="type1">
                        <label for="type1">Car</label>
                        <input type="radio" name="type" value="truck" id="type2">
                        <label for="type2">Truck</label>
                        <input type="radio" name="type" value="bike" id="type3">
                        <label for="type3">Bike</label>
                    </p>
                    <p class="col">
                        <label for="color">Mileage : </label>
                        <input type="text" name="mileage" id="mileage" required>
                    </p>
                    <p class="col">
                        <label for="year">Year : </label>
                        <input type="text" name="year" id="year" required>
                    </p>
                    <input type="submit" value="OK" name="validNewVehicle" class="col-3 mx-auto">

                </form>
                <form action="" method="POST" class="row">
                    <input type="submit" value="Cancel" name="cancelAddVehicle" class="col-3 mx-auto">
                </form>
            <?php
            }
            elseif(isset($_POST['cancelAddVehicle']))
            {
                header('location:');
            }
            else
            {
            ?>
                <form action="" method="POST">
                    <input type="submit" value="Add a vehicle" name="addNewVehicle">
                </form>
            <?php
            }
            ?>
        </aside>
