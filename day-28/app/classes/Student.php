<?php


namespace App\classes;


class Student
{
    public $students = [];

    public function __construct()
    {
        $this->students = [
            0 => [
                'name' => "Hasib",
                'email' => "hasib@gmail.com",
                'mobile' => "01673676287"
            ],
            1 => [
                'name' => "Fahim",
                'email' => "fahim@gmail.com",
                'mobile' => "01773557362"
            ],
            2 => [
                'name' => "Tonni",
                'email' => "tonni@gmail.com",
                'mobile' => "01865656255"
            ],
        ];
    }

    public function getAllStudent()
    {
        return $this->students;
    }
}