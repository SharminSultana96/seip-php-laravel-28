<?php


namespace App\classes;
use App\classes\Student;
use App\classes\Product;


class Home
{
    public $message, $student, $students, $products, $product;

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

        //echo '<pre>';
        //var_dump($this->students);
       //print_r($this->students);


        return view('home', ['a' => $this->message, 'students' => $this->students]);
    }

    public function about()
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProducts();
        return view('about',  ['p' => $this->product, 'products' => $this->products]);

    }

    public function fullName()
    {
        return view('full-name');
    }

    public function contact()
    {
        return view('contact');
    }
}

