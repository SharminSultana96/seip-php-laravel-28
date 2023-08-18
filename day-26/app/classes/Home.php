<?php


namespace App\classes;
use App\classes\Student;


class Home
{
    public $message, $student, $students;

    public function __construct()
    {
        $this->message = "Hello PHP";
    }

    public function index()
    {
//        echo $this->message;
//        include "views/home.php";
//        test();
        $this->student = new Student();
        $this->students = $this->student->getAllStudent();
        return view('home', ['a' => $this->message, 'students' => $this->students]);
    }
}

