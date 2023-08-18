<?php


namespace App\classes;
use App\classes\Student;
use App\classes\Product;
use App\classes\Category;


class Home
{
    public $message, $student, $students, $products, $product, $singleProduct, $category, $categories;

    public function __construct()
    {
        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();

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


        return view('home', [
            'a' => $this->message,
            'students' => $this->students,
            'categories' => $this->categories
        ]);
    }

    public function about()
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProducts();
        return view('about',  ['products' => $this->products, 'categories' => $this->categories]);

    }

    public function details($id)
    {
        $this->product = new Product();
        $this->singleProduct = $this->product->getProductById($id);
        return view('details', ['products' => $this->singleProduct, 'categories' => $this->categories]);
    }


    public function fullName()
    {
        return view('full-name',['categories' => $this->categories]);
    }

    public function contact()
    {
        return view('contact', ['categories' => $this->categories]);
    }
}

