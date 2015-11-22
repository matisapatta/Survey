<?php

/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 25/10/2015
 * Time: 10:03
 */
error_reporting(0);
include_once("../Merge/employee_survey.php");
include_once("./Result.php");

//This class can process an array of dtoEmployee_Survey objects applying filters to it and returning a Result objects array.

class DataFilter
{
    private $filter1;
    private $filter2;

    //Function used by 'usort' inside applySimpleSort to perform the sorting
    private function sortFilter( dtoEmployee_Survey $a, dtoEmployee_Survey $b)
    {
        return strcmp(call_user_func(array($a,'get'.$this->filter1)), call_user_func(array($b,'get'.$this->filter1)));
    }

    //Function used by 'usort' inside applyDoubleSort to perform the sorting
    private function sortFilterDouble( dtoEmployee_Survey $a, dtoEmployee_Survey $b)
    {
        if(call_user_func(array($a,'get'.$this->filter1)) == call_user_func(array($b,'get'.$this->filter1))){
            return strcmp(call_user_func(array($a,'get'.$this->filter2)), call_user_func(array($b,'get'.$this->filter2)));
        }
        return strcmp(call_user_func(array($a,'get'.$this->filter1)), call_user_func(array($b,'get'.$this->filter1)));
    }

    //Sorts an an array of dtoEmployee_Survey objects by one of its parameters.
    private function applySimpleSort ($employeesSurveyArray, $filter){
        $this->filter1=$filter;
        usort($employeesSurveyArray, array('DataFilter', 'sortFilter'));
        return $employeesSurveyArray;
    }
    //Sorts an an array of dtoEmployee_Survey objects by two of its parameters.
    private function applyDoubleSort ($employeesSurveyArray, $filter1,$filter2){
        $this->filter1=$filter1;
        $this->filter2=$filter2;
        usort($employeesSurveyArray, array('DataFilter', 'sortFilterDouble'));
        return $employeesSurveyArray;
    }

    //Given an ordered array of dtoEmployee_Survey objects and the filter applied to it, generate an array of Result objects
    private function getAveragesByFilter($arrayEmployeeSurvey, $filter1){
        //initialization
        $sumResults = new arrayResults();
        $sumAnsw1=0;
        $sumAnsw2=0;
        $cantAnsw=0;
        $id=1;
        $lastItem=-1;
        $i=0;

        //Algorithm beginning
        do {
            //if the last element is different from the actual one, a change of element has been reached and is processed.
            if ($lastItem != call_user_func(array($arrayEmployeeSurvey [$i], 'get' . $filter1)) and $cantAnsw != 0) {
                //Generates a new Result object with the average of both answers, the filter applied and the number of people.
                $newResult = new Result($sumAnsw1 / $cantAnsw, $sumAnsw2 / $cantAnsw, $lastItem, $id, $cantAnsw);
                $sumResults->addResults($newResult);
                $sumAnsw1 = 0;
                $sumAnsw2 = 0;
                $cantAnsw = 0;
                $id += 1;
            }
            $lastItem = call_user_func(array($arrayEmployeeSurvey [$i], 'get' . $filter1));
            //Adds the answers
            $sumAnsw1 += $arrayEmployeeSurvey [$i]->getResp1();
            $sumAnsw2 += $arrayEmployeeSurvey [$i]->getResp2();
            $cantAnsw += 1;
            $i++;
        } while ($arrayEmployeeSurvey [$i]);
        $newResult = new Result($sumAnsw1 / $cantAnsw, $sumAnsw2 / $cantAnsw, $lastItem, $id, $cantAnsw);
        $sumResults->addResults($newResult);
        return $sumResults;
    }

    //Given an ordered array of dtoEmployee_Survey objects and the filters applied to it, generate an array of Result objects
    private function getAveragesByDoubleFilter($arrayEmployeeSurvey, $filter1, $filter2){
        $sumResults = new arrayResults();
        $sumAnsw1=0;
        $sumAnsw2=0;
        $cantAnsw=0;
        $lastItem2=-1; //
        $lastItem1=-1;
        $i=0;

        //Algorithm beginning
        do {
            //if the last element is different from the actual one, by any of both filters, a change of element has been reached and is processed.
            if ($lastItem2 != call_user_func(array($arrayEmployeeSurvey [$i], 'get' . $filter2)) and $cantAnsw != 0) {
                $newResult = new Result($sumAnsw1 / $cantAnsw, $sumAnsw2 / $cantAnsw, $lastItem1, $lastItem2, $cantAnsw);
                $sumResults->addResults($newResult);
                $sumAnsw1 = 0;
                $sumAnsw2 = 0;
                $cantAnsw = 0;
            }
            else if ($lastItem1 != call_user_func(array($arrayEmployeeSurvey [$i], 'get' . $filter1)) and $cantAnsw != 0) {
                $newResult = new Result($sumAnsw1 / $cantAnsw, $sumAnsw2 / $cantAnsw, $lastItem1, $lastItem2, $cantAnsw);
                $sumResults->addResults($newResult);
                $sumAnsw1 = 0;
                $sumAnsw2 = 0;
                $cantAnsw = 0;
            }
            $lastItem1 = call_user_func(array($arrayEmployeeSurvey [$i], 'get' . $filter1));
            $lastItem2 = call_user_func(array($arrayEmployeeSurvey [$i], 'get' . $filter2));
            //Adds the answers
            $sumAnsw1 += $arrayEmployeeSurvey [$i]->getResp1();
            $sumAnsw2 += $arrayEmployeeSurvey [$i]->getResp2();
            $cantAnsw += 1;
            $i++;
        } while ($arrayEmployeeSurvey [$i]);
        $newResult = new Result($sumAnsw1 / $cantAnsw, $sumAnsw2 / $cantAnsw, $lastItem1, $lastItem2, $cantAnsw);
        $sumResults->addResults($newResult);
        return $sumResults;
    }

    //This handles a polymorphic call of getFilteredResults so it can be called with the same name with one or two filters.
    public function __call($method, $arguments) {
        if($method == 'getFilteredResults') {
            if(count($arguments) == 2) {
                return call_user_func_array(array($this,'getFilteredResults1Filter'), $arguments);
            }
            else if(count($arguments) == 3) {
                return call_user_func_array(array($this,'getFilteredResults2Filter'), $arguments);
            }
        }
    }

    //Given an ordered array of dtoEmployee_Survey objects, applies a filter to it and generates a sorted array of Result objects
    public function getFilteredResults1Filter($employeesSurveyArray, $filter1){
        $sortedArray = $this->applySimpleSort($employeesSurveyArray, $filter1); //dtoEmployee_Survey sorting
        $filteredResults = $this->getAveragesByFilter($sortedArray, $filter1); //application of filter and generation of Results objects array
        $filteredResults->sortDesc(); //Result objects array sorting
        return $filteredResults;

    }

    //Given an ordered array of dtoEmployee_Survey objects, applies two filters to it and generates a sorted array of Result objects
    public function getFilteredResults2Filter($employeesSurveyArray, $filter1, $filter2){
        $sortedArray = $this->applyDoubleSort($employeesSurveyArray, $filter1, $filter2); //dtoEmployee_Survey sorting
        $filteredResults = $this->getAveragesByDoubleFilter($sortedArray, $filter1, $filter2); //application of filters and generation of Results objects
        $filteredResults->sortDesc(); //Result objects array sorting
        return $filteredResults;

    }
}
