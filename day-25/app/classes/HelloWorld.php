<?php


namespace App\classes;


class HelloWorld
{
   public $i, $data = [];
//
//    public function __construct()
//    {
////        echo 'Hello PHP';
////        exit();
//
////        $this->message = "Hello, I am Sharmin";
//    }
//
//    public function index()
//    {

        /*
        *======Statement
         * Single Line statement

         * Conditional Statement
               1. if
               2. if else
               3.if else if
               4. switch

         * Repeated Statement
                1. For
                2. While
                3. Do While
                4. Foreach
        */

//        Repeated statement(for loop):
//========================================
////        for ($this->i = 50; $this->i <=100; $this->i++)
//        for ($this->i = 70; $this->i >=40; $this->i--)
//        {
////            echo "Hello World <br/>";
//            echo $this->i. " ";
//        }


        //Repeated statement(while loop):
//========================================
//        $this->i = 100;
//
//        while ($this->i >5)
//        {
//            echo "Hello PHP";
//            $this->i++;
//        }

        //Repeated statement(do while loop):
//========================================
//        $this->i = 100;
//        do
//        {
//            echo 'Hello World <br/>';
//            $this->i++;
//        }
//        while($this->i > 120);



//        Array:
//  ===================

//        $this->data = [100, 200, 300, 'BASIS', 'BITM', 100.200, true];
////        echo $this->data[7];
//
//        foreach ( $this->data as $key => $value)
//        {
////            echo $value.' ';
//            echo $key. ' ';
//        }
//    }

//*********************************************

    public $students = [];

    public function index()
    {
        $this->students = [
            0 => [
                'name'      =>  'Hasib',
                'email'     =>  'hasib@gmail.com',
                'mobile'    =>  [
                        'personal'  => '08153652367',
                        'guardian'  => '01765785399',
                ],
                'address'   =>  'Dhaka',
                'blood_group'   => 'A+'
            ],
            1 => [
                'name'      =>  'Somrat',
                'email'     =>  'somrat@gmail.com',
                'mobile'    =>  [
                    'personal'  => '08153652367',
                    'guardian'  => '01765785399',
                ],
                'address'   =>  'Gazipur',
                'blood_group'   => 'A-'
            ],
            2 => [
                'name'      =>  'Tonni',
                'email'     =>  'tonni@gmail.com',
                'mobile'    =>  [
                    'personal'  => '08153652367',
                    'guardian'  => '01765785399',
                ],
                'address'   =>  'Narayangonj',
                'blood_group'   => 'AB+'
            ]
        ];
//        echo $this->students[0]['name'];
        foreach ($this->students as $student)
        {
            foreach ($student as $value)
            {
                if(is_array($value))
                {
                    foreach ($value as $item)
                    {
                        echo $item.' ';
                    }
                }
                else
                    {
                        echo $value.' ';
                    }
            }
            echo '<br/>';
//            echo $student['name'].' '.$student['email'].' '.$student['mobile'].' '.$student['address'];
        }


//        ****************************************************
//        $this->student = ['name'=>'Hasib', 'email'=>'hasib@gmail.com', 'mobile'=>'5465642'];
//
//        foreach ($this->student as $key => $student)
//        {
////            echo $student. ' ';
//            echo $key. ' ';
//        }
    }



}









