<?php

/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 24/10/2015
 * Time: 3:26 PM
 */
class dtoSurvey
{
    private $resp1;
    private $resp2;
    private $token;

    public function getResp1()
    {
        return $this->resp1;
    }
    public function setResp1($resp1)
    {
        $this->resp1 = $resp1;
    }
    public function getResp2()
    {
        return $this->resp2;
    }
    public function setResp2($resp2)
    {
        $this->resp2 = $resp2;
    }
    public function getToken()
    {
        return $this->token;
    }
    public function setToken($token)
    {
        $this->token = $token;
    }
    public function arraySurveyToDto( $row, SequenceSurvey $sequenceSurvey ){
        //$sequenceSurvey = new SequenceSurvey();
        for($x=0; $x < $sequenceSurvey->getMax(); $x++ )
        {
            switch($x){
                case $sequenceSurvey->getResp1():
                    $this->setResp1($row[$x]);
                    break;
                case $sequenceSurvey->getResp2():
                    $this->setResp2($row[$x]);
                    break;
                case $sequenceSurvey->getToken():
                    $this->setToken($row[$x]);
                    break;
            }
        }
    }
}

class SequenceSurvey
{
    public static $resp1;
    public static $resp2;
    public static $token;
    public static $Max;


    public function __construct($row)
    {
        $x = 0;
        do {
            switch ($row[$x]) {
                case "resp1";
                    $this->setResp1($x);
                    break;
                case "resp2";
                    $this->setResp2($x);
                    break;
                case "token";
                    $this->setToken($x);
                    break;
            }
            $x++;
        }while(isset($row[$x]));
        $this->setMax($x);
    }


    public static function getMax()
    {
        return self::$Max;
    }

    /**
     * @param int $Max
     */
    public static function setMax($Max)
    {
        self::$Max = $Max;
    }

    /**
     * @return int
     */
    public static function getResp1()
    {
        return self::$resp1;
    }

    /**
     * @param int $resp1
     */
    public static function setResp1($resp1)
    {
        self::$resp1 = $resp1;
    }

    /**
     * @return int
     */
    public static function getResp2()
    {
        return self::$resp2;
    }

    /**
     * @param int $resp2
     */
    public static function setResp2($resp2)
    {
        self::$resp2 = $resp2;
    }

    /**
     * @return int
     */
    public static function getToken()
    {
        return self::$token;
    }

    /**
     * @param int $token
     */
    public static function setToken($token)
    {
        self::$token = $token;
    }

}

class arraySurvey
{
    private $Surveys = array();

    public static function sort_token( dtoSurvey $a, dtoSurvey $b)
    {
        return strcmp($a->getToken(), $b->getToken());
    }
    public function saveObject()
    {
        array_push($this->Surveys , $this->newSurvey);
    }
    public function getSurveys()
    {
        return $this->Surveys;
    }
    public function add_Survey(dtoSurvey $Survey)
    {
        $this->newSurvey = $Survey;
        $this->saveObject();
    }
    public function Order_Token(){
        usort( $this->Surveys, array('arraySurvey' , 'sort_token'));
    }
}