<?php

/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 18/10/2015
 * Time: 11:57 PM
 */
class dtoEncuesta
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
    public function arrayPollToDto( $row ){
        $sequencePoll = new SequencePoll();
        for($x=0; $x < $sequencePoll->getMax(); $x++ )
        {
            switch($x){
                case $sequencePoll->getResp1():
                    $this->setResp1($row[$x]);
                    break;
                case $sequencePoll->getResp2():
                    $this->setResp2($row[$x]);
                    break;
                case $sequencePoll->getToken():
                    $this->setToken($row[$x]);
                    break;
            }
        }
    }
}

class SequencePoll
{
    public static $resp1 = 2;
    public static $resp2 = 0;
    public static $token = 1;
    public static $Max = 3;

    /**
     * @return int
     */
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

class arrayPoll
{
    private $Polls = array();

    public static function sort_token( dtoEncuesta $a, dtoEncuesta $b)
    {
        return strcmp($a->getToken(), $b->getToken());
    }
    public function guardarObjeto()
    {
        array_push($this->Polls , $this->newPoll);
    }

    public function getPolls()
    {
        return $this->Polls;
    }
    public function agregar_poll(dtoEncuesta $poll)
    {
        $this->newPoll = $poll;
    }
    public function Order_Token(){
        usort( $this->Polls, array('arrayPoll' , 'sort_token'));
    }
}