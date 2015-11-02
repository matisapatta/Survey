<?php
/**
 * Created by PhpStorm.
 * User: AlanNote
 * Date: 29/10/2015
 * Time: 13:59
 */

include_once("../Merge/Merge.php");
include_once("dataFilters.php");
error_reporting(0);
$filter1="";
$filter2="";

if (isset($_GET['flt1']) and $_GET['flt1'] !=""){
    $filter1 = $_GET['flt1'];
    $merge = new Merge();
    $employeesSurvey = $merge->Merge_Data();
    $rawEmployeesSurveyArray = $employeesSurvey->getEmployees_Survey();
    $dataFilter = new DataFilters();

    if (isset($_GET['flt2']) and $_GET['flt2'] !=""){
        $filter2 = $_GET['flt2'];
        $results = $dataFilter->getFilteredResults($rawEmployeesSurveyArray, $filter1, $filter2);
    }else
        $results = $dataFilter->getFilteredResults($rawEmployeesSurveyArray, $filter1);

    try{
        $results->generate_Json();
        echo "0";
    }
    catch(Exception $e){
        echo "1";
    }
}else
    echo "2";
?>