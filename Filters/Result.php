<?php

/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 23/10/2015
 * Time: 11:46 PM
 */

//This class stores a result obtained from filtering employee_survey objects with a DataFilter object.
//It stores the average result of two answers, the filters considered and the quantity of people that is in those filter's scope

class Result
{
    public $answ1;
    public $answ2;
    public $filter1;
    public $filter2;
    public $quantity;

    function __construct($answ1, $answ2, $filter1, $filter2, $quantity)
    {
        $this->setAnsw1($answ1);
        $this->setAnsw2($answ2);
        $this->setFilter1($filter1);
        $this->setFilter2($filter2);
        $this->setQuantity($quantity);

    }
    public function getAnsw1()
    {
        return $this->answ1;
    }
    public function setAnsw1($answ1)
    {
        $this->answ1 = $answ1;
    }
    public function getAnsw2()
    {
        return $this->answ2;
    }
    public function setAnsw2($answ2)
    {
        $this->answ2 = $answ2;
    }
    public function getFilter1()
    {
        return $this->filter1;
    }
    public function setFilter1($filter1)
    {
        $this->filter1 = $filter1;
    }
    public function getFilter2()
    {
        return $this->filter2;
    }
    public function setFilter2($filter2)
    {
        $this->filter2 = $filter2;
    }
    public function getQuantity()
{
    return $this->quantity;
}
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}

//This class handles an array of Result objects.

class arrayResults
{
    public $Results = array();

    public function getResults()
    {
        return $this->Results;
    }

    //Function used by 'usort' inside sortDesc() to perform the sorting
    private function sortResultDesc(Result $a, Result $b)
    {
        return ($a->getQuantity() < $b->getQuantity());
    }

    //Sorts the array $Results descending by the $quantity parameter.
    public function sortDesc(){

        usort($this->Results, array('arrayResults', 'sortResultDesc'));
    }


    public function addResults(Result $result)
    {
        array_push($this->Results , $result);
    }

    //Generates a Json string with a line for each Result object in the Array.
    public function generate_Json(){

        $jsonString = "[ \n";
        $i = 0;
        $len = count($this->Results);
        foreach($this->Results as $result)
        {
            $jsonString = $jsonString . json_encode($result,JSON_UNESCAPED_UNICODE);
            if ($i != $len - 1) {
                // not the last line
                $jsonString = $jsonString . ",\n";
            }
            $i++;
        }
        $jsonString = $jsonString . "\n]";
        return $jsonString;

    }

}