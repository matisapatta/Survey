<?php

/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 25/10/2015
 * Time: 10:03
 */

include_once("../Merge/employee_survey.php");
include_once("../Merge/Merge.php");
include_once("Results.php");

class dataFilters
{
    private $filter1;
    private $filter2;
    private $rawResults;
    private $arrayResults;


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

    public function applySimpleFilter ($filter){
        $this->filter1=$filter;
        usort($this->rawResults, array('dataFilters' , 'sortFilter'));
        return $this->rawResults;
    }
    public function applyDoubleFilter ($filter1,$filter2){
        $this->filter1=$filter1;
        $this->filter2=$filter2;
        usort($this->rawResults, array('dataFilters' , 'sortFilterDouble'));
        return $this->rawResults;
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
                $newResult = new Results();
                $newResult->setFilter1($lastItem);
                $newResult->setFilter2($id);
                $newResult->setAnsw1($sumAnsw1 / $cantAnsw);
                $newResult->setAnsw2($sumAnsw2 / $cantAnsw);
                $newResult->setQuantity($cantAnsw);
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
        $newResult = new Results();
        $newResult->setFilter1($lastItem);
        $newResult->setFilter2($id);
        $newResult->setAnsw1($sumAnsw1 / $cantAnsw);
        $newResult->setAnsw2($sumAnsw2 / $cantAnsw);
        $newResult->setQuantity($cantAnsw);
        $sumResults->addResults($newResult);

        $this->arrayResults = $sumResults;

        return $sumResults;
    }

    public function getAveragesByDoubleFilter($arrayEmployees, $filter1, $filter2){
        $sumResults = new arrayResults();
        $sumAnsw1=0;
        $sumAnsw2=0;
        $cantAnsw=0;
        $id=1;
        $lastBigItem=-1;
        $lastSmallItem=-1;
        $i=0;
        do {
            if ($lastBigItem != call_user_func(array($arrayEmployees [$i], 'get' . $filter1)) and $cantAnsw != 0) {
                $newResult = new Results();
                $newResult->setFilter1($lastSmallItem);
                $newResult->setFilter2($lastBigItem);
                $newResult->setAnsw1($sumAnsw1 / $cantAnsw);
                $newResult->setAnsw2($sumAnsw2 / $cantAnsw);
                $newResult->setQuantity($cantAnsw);
                $sumResults->addResults($newResult);
                $sumAnsw1 = 0;
                $sumAnsw2 = 0;
                $cantAnsw = 0;
                $id += 1;
            }
            else if ($lastSmallItem != call_user_func(array($arrayEmployees [$i], 'get' . $filter2)) and $cantAnsw != 0) {
                $newResult = new Results();
                $newResult->setFilter1($lastSmallItem);
                $newResult->setFilter2($lastBigItem);
                $newResult->setAnsw1($sumAnsw1 / $cantAnsw);
                $newResult->setAnsw2($sumAnsw2 / $cantAnsw);
                $newResult->setQuantity($cantAnsw);
                $sumResults->addResults($newResult);
                $sumAnsw1 = 0;
                $sumAnsw2 = 0;
                $cantAnsw = 0;
            }
            $lastSmallItem = call_user_func(array($arrayEmployees [$i], 'get' . $filter2));
            $lastBigItem = call_user_func(array($arrayEmployees [$i], 'get' . $filter1));
            $sumAnsw1 += $arrayEmployees [$i]->getResp1();
            $sumAnsw2 += $arrayEmployees [$i]->getResp2();
            $cantAnsw += 1;
            $i++;
        } while ($arrayEmployees [$i]);
        $newResult = new Results();
        $newResult->setFilter1($lastSmallItem);
        $newResult->setFilter2($lastBigItem);
        $newResult->setAnsw1($sumAnsw1 / $cantAnsw);
        $newResult->setAnsw2($sumAnsw2 / $cantAnsw);
        $newResult->setQuantity($cantAnsw);
        $sumResults->addResults($newResult);

        $this->arrayResults = $sumResults;

        return $sumResults;
    }

    public function getAllData(){
        $merge = new Merge();
        $employeesSurvey = $merge->Merge_Data();
        $this->rawResults = $employeesSurvey->getEmployees_Survey();
    }

    public function sendJson(){
        return $this->arrayResults->generate_Json();
    }

    public function getResultsByFilters($filter1, $filter2){


    }
}