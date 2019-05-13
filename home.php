<?php
session_start();

// 1. Create an array, an associative array and an object in home.php.
    //Array
    $states = array("Alabama", "Mississipi", "Tennessee", "Louisiana");

    //Associative array
    $citiesStates = array(
        "Alabama" => array("Birmingham","Huntsville"),
        "Mississipi" => array("Jackson", "Tupelo"),
        "Tennessee" => array("Nashville", "Memphis"),
        "Louisiana" => array("New Orleans", "Baton Rouge")
    );

    //Object
    class stateAlabama {
        var $cities = array("Decatur", "Tuscaloosa", "Montgomery");
        var $counties = array("Cherokee", "Talladega", "Fayette");

    };

    $stateInfo = new stateAlabama;

// 2. Write a for-loop that adds an item to all of the above.

    for($i = 0; $i <= 3; $i++){

        if($i === 1){
            array_push($states, "Georgia");
        }

        else if($i === 2){
            array_push($citiesStates["Alabama"], "Florence", "Mobile");
            array_push($citiesStates["Mississipi"], "Columbus", "Meridian");
            array_push($citiesStates["Tennessee"], "Knoxville", "Chattanooga");
            array_push($citiesStates["Louisiana"], "Lafayette", "Shreveport");
        }

        else if($i === 3){
            $stateInfo->americanIndianTribes = array("Poarch Band of Creek Indians", "MOWA Band of Choctaw Indians");
        }
    }

    $_SESSION['Array'] = $states;
    $_SESSION['Associative array '] = $citiesStates;
    $_SESSION['Object'] = $stateInfo;

// 3. Write an if-statement that has a 20% chance to edit a random item of all of the above.

    if (rand(1, 100<=20))

?>
