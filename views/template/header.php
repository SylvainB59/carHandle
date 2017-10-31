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
            <div class="formulaire">
                <form action="" method="POST" class="row formAdd">
                    <div class="col-12 row inputRadio">
                        <p class="col-12">Type :</p>
                        <div class="col-10 col-md-6 col-lg-4 mx-auto row">
                            <label for="type1" class=" mx-auto">Car</label>
                            <input type="radio" name="type" value="car" id="type1">
                            <label for="type2" class=" mx-auto">Truck</label>
                            <input type="radio" name="type" value="truck" id="type2">
                            <label for="type3" class=" mx-auto">Bike</label>
                            <input type="radio" name="type" value="bike" id="type3">
                        </div>
                    </div>
                    <p class="col-11 col-md-3 mx-auto">
                        <label for="model">Model : </label>
                        <input type="text" name="model" id="model" required>
                    </p>
                    <p class="col-11 col-md-3 mx-auto">
                        <label for="color">Color : </label>
                        <input type="text" name="color" id="color" required>
                    </p>
                    <p class="col-11 col-md-3 mx-auto">
                        <label for="color">Mileage : </label>
                        <input type="text" name="mileage" id="mileage" required>
                    </p>
                    <p class="col-11 col-md-3 mx-auto">
                        <label for="year">Year : </label>
                        <input type="text" name="year" id="year" required>
                    </p>
                    <div class="w-100"></div>
                    <input type="submit" value="OK" name="validNewVehicle" class="col-6 col-md-4 col-lg-3 mx-auto">

                </form>
                <form action="" method="POST" class="row">
                    <input type="submit" value="Cancel" name="cancelAddVehicle" class="col-6 col-md-4 col-lg-3 mx-auto">
                </form>
            </div>
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
