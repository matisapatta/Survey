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
    $filter2='Name';
    $data->getAllData();

    $array = $data->applySimpleFilter($filter1);
    echo "Cliente";
    echo "Name";
    echo "<br>";
    foreach ($array as $row){
        echo $row->getClient();
        echo $row->getName();
        echo $row->getProject();
        echo "<br>";
    }

    $filteredData = $data->getAveragesByFilter($array, $filter1);
    $filteredArray = $filteredData->getResults();
    foreach ($filteredArray as $row){
        echo $row->getFilter1();
        echo $row->getFilter2();
        echo $row->getQuantity();
        echo $row->getAnsw1();
        echo $row->getAnsw2();
        echo "<br>";
    }

    $array = $data->applyDoubleFilter($filter1,$filter2);
    echo "Cliente";
    echo "Name";
    echo "<br>";
    foreach ($array as $row){
        echo $row->getClient();
        echo $row->getName();
        echo $row->getProject();
        echo "<br>";
    }

    $filteredData = $data->getAveragesByDoubleFilter($array, $filter1, $filter2);
    $filteredArray = $filteredData->getResults();
    foreach ($filteredArray as $row){
        echo $row->getFilter1();
        echo $row->getFilter2();
        echo $row->getQuantity();
        echo $row->getAnsw1();
        echo $row->getAnsw2();
        echo "<br>";
    }


    $data->arrayResults->generate_Json();

?>