<?php


namespace App\classes;


class HelloWorld
{
    public $message, $firstName, $lastName, $firstNumber, $secondNumber, $thirdNumber;

    public function __construct()
    {
//        echo 'Hello PHP';
//        exit();

        $this->message = "Hello, I am Sharmin";
    }

    public function index()
    {

        /*
        *======Statement
         * Single Line statement
         * Conditional Statement
               1. if
               2. if else
               3.

         * Repeated Statement
                1. For
                2. While
                3. Do While
                4. Foreach
        */


//        $this->firstNumber = 10;
//        $this->secondNumber = 20;
//        $this->thirdNumber = $this->firstNumber + $this->secondNumber;

//        if($this->firstNumber > $this->secondNumber)
//        {
//            echo $this->thirdNumber;
//        }
//        else
//        {
//            echo 'Hello World';
//        }
//        *********************************


//        $this->firstNumber = 10;
//        $this->secondNumber = 20;
//        $this->thirdNumber = $this->firstNumber + $this->secondNumber;
//
//        if($this->firstNumber > $this->secondNumber)
//        {
//            echo $this->thirdNumber;
//        }
//        elseif($this->secondNumber > $this->thirdNumber)
//        {
//            echo 'Hello World';
//        }
//        elseif($this->thirdNumber > $this->firstNumber)
//        {
//            echo 'Hello Bangladesh';
//        }
//        else
//        {
//            echo "Hello BITM";
//        }

//**********************************

        $this->firstNumber = 10;
        $this->secondNumber = 20;
        $this->thirdNumber = $this->firstNumber + $this->secondNumber;

        switch ($this->firstNumber)
        {
            case 10:
                echo 'Hello World';
                break;
            case 20:
                echo 'Hello Bangladesh';
                break;
            case 30:
                echo 'Hello PHP';
                break;
            default:
                echo 'Hello Laravel';

        }


//    ***********************************




//        Arithmetic operator:
        //========================
        //$this->firstNumber = 10;
        //$this->secondNumber = 20;

//        echo '<br/>';
//        echo ++$this->firstNumber;
//        echo '<br/>';
//        echo $this->firstNumber;
//        echo '<br/>';
//        echo $this->firstNumber;
//        echo '<br/>';
//        echo $this->firstNumber;
//
//        echo '<br/>';
//        echo $this->firstNumber + $this->secondNumber;
//        echo '<br/>';
//        echo $this->firstNumber - $this->secondNumber;
//        echo '<br/>';
//        echo $this->firstNumber * $this->secondNumber;
//        echo '<br/>';
//        echo $this->firstNumber / $this->secondNumber;
//        echo '<br/>';
//        echo $this->firstNumber % $this->secondNumber;

        //Assignment Operator:
        //========================

//        $this->firstNumber = 10;
//        $this->secondNumber = 20;
//
//        echo '<br/>';
//        echo $this->firstNumber += $this->secondNumber; //$this->firstNumber = $this->firstNumber + $this->secondNumber;
//        echo '<br/>';
//        echo $this->firstNumber -= $this->secondNumber;
//        echo '<br/>';
//        echo $this->firstNumber *= $this->secondNumber;
//        echo '<br/>';
//        echo $this->firstNumber /= $this->secondNumber;
//        echo '<br/>';
//        echo $this->firstNumber %= $this->secondNumber;
//        echo '<br/>';
//        echo $this->firstNumber .= $this->secondNumber;


//        Conditional Operator:
        //===========================

//        $this->firstNumber = 10;
//        $this->secondNumber = 20;
//
//        echo $this->firstNumber > $this->secondNumber;


//        Logical Operrator:
    //===========================

//        $this->firstNumber = 10;
//        $this->secondNumber = 20;
//        $this->thirdNumber = 30;

//        echo '<br/>';
//        echo ($this->firstNumber > $this->secondNumber) && ($this->secondNumber > $this->thirdNumber);
//        echo '<br/>';
//        echo ($this->firstNumber < $this->secondNumber) && ($this->secondNumber < $this->thirdNumber);
//        echo '<br/>';
//        echo ($this->firstNumber > $this->secondNumber) && ($this->secondNumber < $this->thirdNumber);
//        echo '<br/>';
//        echo ($this->firstNumber < $this->secondNumber) && ($this->secondNumber > $this->thirdNumber);


//        $this->firstNumber = 10;
//        $this->secondNumber = 20;
//        $this->thirdNumber = 30;
//        echo '<br/>';
//        echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber > $this->thirdNumber);
//        echo '<br/>';
//        echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber < $this->thirdNumber);
//        echo '<br/>';
//        echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber < $this->thirdNumber);
//        echo '<br/>';
//        echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber > $this->thirdNumber);


//        $this->firstNumber = 10;
//        $this->secondNumber = 20;
//        $this->thirdNumber = true;
//        echo '<br/>';
//        echo !$this->thirdNumber;
    }
}


///*==========operator
//         * Arithmetic operator: +, -, *, /, %, ++, --, ( - )
//         * Assignment operator: =, +=, -=, *=, /=, %=, .=
//         * Conditional operator: >, >=, <, <=, ==, !=, ===, !==
//         *  Logical operator: &&, ||, !
//         * /
//
//statement build with 5 types:
//-----------------------------
//    1. syntax
//    2. keyword
//    3. value
//        * fixed value
//        * variable value
//    4. operator
//    5. expression
//
//    //variable and data type:
//    ---------------------------
//       // $this->firstName = true;
//        //$this->lastName= 'BITM';
//
//       // echo gettype($this->firstName);
//        //echo $this->firstName . ' ' . $this->lastName;
//
//
//
////        echo $this->message;
//
//        //3 major rules:
////        -----------------
//        //start with $ sign
//        //a-z, A-Z, 0-9, _
//        //no number in first
//
////       3 standard rules:
////        ---------------------
//        //small letter
//        //meaningful
//        //readable, camelcase





