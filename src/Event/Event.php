<?php

/**
 * Created by PhpStorm.
 * User: saint
 * Date: 09/01/2017
 * Time: 11:09 AM
 */
namespace Saint\LaravelRedis\Event;

class Event
{
    public $command;
    public $parameters;
    public $result;

    public function __construct($command, $parameters, $result)
    {
        $this->command = $command;
        $this->parameters = $parameters;
        $this->result = $result;
    }
}