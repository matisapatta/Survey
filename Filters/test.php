<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 25/10/2015
 * Time: 10:06
 */
    include_once("../Merge/employee_survey.php");
    include_once("../Merge/Merge.php");
    include_once("dataFilters.php");
    $data = new dataFilters();
    $filter1='Client';
    $filter2='Project';
    $data->getAllData();

    $array = $data->applySimpleSort($filter1);
    echo "Client    ";
    echo "Project ";
    echo "User ";
    echo "<br>";
    foreach ($array as $row){
        echo $row->getClient().' ';
        echo $row->getProject().' ';
        echo $row->getName().' ';
        echo "<br>";
    }

    $filteredData = $data->getAveragesByFilter($array, $filter1);
    $filteredArray = $filteredData->getResults();
    echo "Filtro 1    ";
    echo "Filtro 2 ";
    echo "Cantidad ";
    echo "Prom resp 1 ";
    echo "Prom resp 2 ";
    echo "<br>";
    foreach ($filteredArray as $row){
        echo $row->getFilter1().' ';
        echo $row->getFilter2().' ';
        echo $row->getQuantity().' ';
        echo $row->getAnsw1().' ';
        echo $row->getAnsw2().' ';
        echo "<br>";
    }
    echo "<br> JSON: <br>";
    echo $data->sendJson();
    echo "<br>"."<br>";


    $array = $data->applyDoubleSort($filter1,$filter2);
    echo "Client    ";
    echo "Project ";
    echo "User ";
    echo "<br>";
    foreach ($array as $row){
        echo $row->getClient().' ';
        echo $row->getProject().' ';
        echo $row->getName().' ';
        echo "<br>";
    }

    $filteredData = $data->getAveragesByDoubleFilter($array, $filter1, $filter2);
    $filteredArray = $filteredData->getResults();
    echo "Filtro 1    ";
    echo "Filtro 2 ";
    echo "Cantidad ";
    echo "Prom resp 1 ";
    echo "Prom resp 2 ";
    echo "<br>";
    foreach ($filteredArray as $row){
        echo $row->getFilter1().' ';
        echo $row->getFilter2().' ';
        echo $row->getQuantity().' ';
        echo $row->getAnsw1().' ';
        echo $row->getAnsw2().' ';
        echo "<br>";
    }

    echo "<br> JSON: <br>";
    echo $data->sendJson();
    echo "<br>";
?>