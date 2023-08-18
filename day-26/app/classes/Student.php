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
                'moblie' => "01673676287"
            ],
            1 => [
                'name' => "Fahim",
                'email' => "fahim@gmail.com",
                'moblie' => "017735573626"
            ],
            2 => [
                'name' => "Tonni",
                'email' => "tonni@gmail.com",
                'moblie' => "01865656255"
            ],
        ];
    }

    public function getAllStudent()
    {
        return $this->students;
    }
}