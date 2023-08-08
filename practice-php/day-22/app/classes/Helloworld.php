<?php


namespace App\classes;


class Helloworld
{
    public $message;

    public function __construct()
    {
        $this->message = "Hello, I am Sharmin";
    }
    public function index()
    {
        echo $this->message;
    }
}