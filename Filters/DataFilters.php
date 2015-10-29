<?php

/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 25/10/2015
 * Time: 10:03
 */

include_once("../Merge/employee_survey.php");
include_once("Results.php");

class DataFilters
{
    private $filter1;
    private $filter2;

    private function sortFilter( dtoEmployee_Survey $a, dtoEmployee_Survey $b)
    {
        return strcmp(call_user_func(array($a,'get'.$this->filter1)), call_user_func(array($b,'get'.$this->filter1)));
    }
    private function sortFilterDouble( dtoEmployee_Survey $a, dtoEmployee_Survey $b)
    {
        if(call_user_func(array($a,'get'.$this->filter1)) == call_user_func(array($b,'get'.$this->filter1))){
            return strcmp(call_user_func(array($a,'get'.$this->filter2)), call_user_func(array($b,'get'.$this->filter2)));
        }
        return strcmp(call_user_func(array($a,'get'.$this->filter1)), call_user_func(array($b,'get'.$this->filter1)));
    }

    public function applySimpleSort ($employeesSurveyArray, $filter){
        $this->filter1=$filter;
        usort($employeesSurveyArray, array('DataFilters', 'sortFilter'));
        return $employeesSurveyArray;
    }
    public function applyDoubleSort ($employeesSurveyArray, $filter1,$filter2){
        $this->filter1=$filter1;
        $this->filter2=$filter2;
        usort($employeesSurveyArray, array('DataFilters', 'sortFilterDouble'));
        return $employeesSurveyArray;
    }

    public function getAveragesByFilter($arrayEmployees, $filter1){
        $sumResults = new arrayResults();
        $sumAnsw1=0;
        $sumAnsw2=0;
        $cantAnsw=0;
        $id=1;
        $lastItem=-1;
        $i=0;
        do {
            if ($lastItem != call_user_func(array($arrayEmployees [$i], 'get' . $filter1)) and $cantAnsw != 0) {
                $newResult = new Results($sumAnsw1 / $cantAnsw, $sumAnsw2 / $cantAnsw, $lastItem, $id, $cantAnsw);
                $sumResults->addResults($newResult);
                $sumAnsw1 = 0;
                $sumAnsw2 = 0;
                $cantAnsw = 0;
                $id += 1;
            }
            $lastItem = call_user_func(array($arrayEmployees [$i], 'get' . $filter1));
            $sumAnsw1 += $arrayEmployees [$i]->getResp1();
            $sumAnsw2 += $arrayEmployees [$i]->getResp2();
            $cantAnsw += 1;
            $i++;
        } while ($arrayEmployees [$i]);
        $newResult = new Results($sumAnsw1 / $cantAnsw, $sumAnsw2 / $cantAnsw, $lastItem, $id, $cantAnsw);
        $sumResults->addResults($newResult);
        return $sumResults;
    }

    public function getAveragesByDoubleFilter($arrayEmployees, $filter1, $filter2){
        $sumResults = new arrayResults();
        $sumAnsw1=0;
        $sumAnsw2=0;
        $cantAnsw=0;
        $lastBigItem=-1;
        $lastSmallItem=-1;
        $i=0;
        do {
            if ($lastBigItem != call_user_func(array($arrayEmployees [$i], 'get' . $filter2)) and $cantAnsw != 0) {
                $newResult = new Results($sumAnsw1 / $cantAnsw, $sumAnsw2 / $cantAnsw, $lastSmallItem, $lastBigItem, $cantAnsw);
                $sumResults->addResults($newResult);
                $sumAnsw1 = 0;
                $sumAnsw2 = 0;
                $cantAnsw = 0;
            }
            else if ($lastSmallItem != call_user_func(array($arrayEmployees [$i], 'get' . $filter1)) and $cantAnsw != 0) {
                $newResult = new Results($sumAnsw1 / $cantAnsw, $sumAnsw2 / $cantAnsw, $lastSmallItem, $lastBigItem, $cantAnsw);
                $sumResults->addResults($newResult);
                $sumAnsw1 = 0;
                $sumAnsw2 = 0;
                $cantAnsw = 0;
            }
            $lastSmallItem = call_user_func(array($arrayEmployees [$i], 'get' . $filter1));
            $lastBigItem = call_user_func(array($arrayEmployees [$i], 'get' . $filter2));
            $sumAnsw1 += $arrayEmployees [$i]->getResp1();
            $sumAnsw2 += $arrayEmployees [$i]->getResp2();
            $cantAnsw += 1;
            $i++;
        } while ($arrayEmployees [$i]);
        $newResult = new Results($sumAnsw1 / $cantAnsw, $sumAnsw2 / $cantAnsw, $lastSmallItem, $lastBigItem, $cantAnsw);
        $sumResults->addResults($newResult);
        return $sumResults;
    }

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

    public function getFilteredResults1Filter($employeesSurveyArray, $filter1){
        $sortedArray = $this->applySimpleSort($employeesSurveyArray, $filter1);
        $filteredResults = $this->getAveragesByFilter($sortedArray, $filter1);
        return $filteredResults;

    }
    public function getFilteredResults2Filter($employeesSurveyArray, $filter1, $filter2){
        $sortedArray = $this->applyDoubleSort($employeesSurveyArray, $filter1, $filter2);
        $filteredResults = $this->getAveragesByDoubleFilter($sortedArray, $filter1, $filter2);
        return $filteredResults;

    }
}
