<?php

/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 23/10/2015
 * Time: 11:46 PM
 */


class Results
{
    public $answ1;
    public $answ2;
    public $filter1;
    public $filter2;
    public $quantity;


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

class arrayResults
{
    public $Results = array();


    public function saveObject()
    {
        array_push($this->Results , $this->newResult);
    }

    public function getResults()
    {
        return $this->Results;
    }
    public function addResults(Results $result)
    {
        $this->newResult = $result;
        $this->saveObject();
    }
/*
    public function generate_Json(){
        $fh = fopen("data_out.json", 'w')  or die("Error al abrir fichero de salida");
        // PARA GENERAR JSON BIEN LAS PROPIEDADES DEBEN SER PUBLICAS!!!
        foreach($this->Results as $result)
        {
            fwrite($fh, json_encode($result,JSON_UNESCAPED_UNICODE));
        }
        fclose($fh);
    }*/
    public function generate_Json(){
    $fh = "";
    // PARA GENERAR JSON BIEN LAS PROPIEDADES DEBEN SER PUBLICAS!!!
    foreach($this->Results as $result)
    {
        $fh = $fh . json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    return $fh;
}
}