<?php


namespace App\classes;


class HelloWorld
{
    public $message, $firstName, $lastName;

    public function __construct()
    {
//        echo 'Hello PHP';
//        exit();

        $this->message = "Hello, I am Sharmin";
    }

    public function index()
    {
        $this->firstNumber = 10;
        $this->secondNumber = 20;

        echo '<br/>';
        echo $this->firstNumber + $this->secondNumber;
        echo '<br/>';
        echo $this->firstNumber - $this->secondNumber;
        echo '<br/>';
        echo $this->firstNumber * $this->secondNumber;
        echo '<br/>';
        echo $this->firstNumber / $this->secondNumber;
        echo '<br/>';
        echo $this->firstNumber % $this->secondNumber;
    }
}

/*==========operator
         * Arithmetic operator: +, -, *, /, %, ++, --, ( - )
         * Assignment operator: =, +=, -=, *=, /=, %=, .=
         * Conditional operator: >, >=, <, <=, ==, !=, ===, !==
         *  Logical operator: &&, ||, !
         * /

statement build with 5 types:
-----------------------------
    1. syntax
    2. keyword
    3. value
        * fixed value
        * variable value
    4. operator
    5. expression

    //variable and data type:
    ---------------------------
       // $this->firstName = true;
        //$this->lastName= 'BITM';

       // echo gettype($this->firstName);
        //echo $this->firstName . ' ' . $this->lastName;



//        echo $this->message;

        //3 major rules:
//        -----------------
        //start with $ sign
        //a-z, A-Z, 0-9, _
        //no number in first

//       3 standard rules:
//        ---------------------
        //small letter
        //meaningful
        //readable, camelcase





