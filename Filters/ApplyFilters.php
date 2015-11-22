<?php
/**
 * Created by PhpStorm.
 * User: AlanNote
 * Date: 29/10/2015
 * Time: 13:59
 */

//This is the php which receives the request from the index.html.

include_once("../Merge/Merge.php");
include_once("./DataFilter.php");
error_reporting(0);
$filter1="";
$filter2="";

//If a filter is sent with the request and is not empty the code initiates.
if (isset($_GET['flt1']) and $_GET['flt1'] !=""){
    $filter1 = $_GET['flt1'];

    //Merge obtains and prepares the data before it is filtered.
    $merge = new Merge();
    $employeesSurvey = $merge->Merge_Data();
    $rawEmployeesSurveyArray = $employeesSurvey->getEmployees_Survey();

    //DataFilter uses the data and the filters to return a Result object that can be converted to a Json.
    $dataFilter = new DataFilter();

    //If a second filter is sent is also used. This cannot process more than two filters
    if (isset($_GET['flt2']) and $_GET['flt2'] !=""){
        $filter2 = $_GET['flt2'];

        //Processing with 2 filters.
        $results = $dataFilter->getFilteredResults($rawEmployeesSurveyArray, $filter1, $filter2);
    }else
        //Processing with 1 filter.
        $results = $dataFilter->getFilteredResults($rawEmployeesSurveyArray, $filter1);

    try{
        //With the data filtered, a Json string is returned to the HTML via response echoing it.
        echo $results->generate_Json();
    }
    catch(Exception $e){
        //if the Json cannot be generated an empty string is returned.
        echo "";
    }
}else
    echo "";
?>