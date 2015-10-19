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
}

class ordenEncuesta
{
    public static $resp1 = 0;
    public static $resp2 = 1;
    public static $token = 2;
}