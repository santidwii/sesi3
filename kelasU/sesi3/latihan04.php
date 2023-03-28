<?php
    //model 1
    //$cars = array("Volvo","BMW","Toyota"); 

    //model2

    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";

    header('conten-type: application/json; charset=utf-8');
    echo json_encode($cars);