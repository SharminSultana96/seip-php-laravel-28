<?php


namespace App\classes;
use App\classes\Category;
use App\classes\Product;


class Home
{
    public $category, $categories, $product, $products, $singleProduct, $categoryProducts;

    public function __construct()
    {
        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();
    }

    public function index()
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        return view('home', [
            'categories' => $this->categories,
            'products' => $this->products
        ]);
    }

    public function category($id)
    {
        $this->product = new Product();
        $this->products = $this->product->getProductBycategoryId($id);
        return view('category', [
            'categories' => $this->categories,
            'products' => $this->products]);

    }

    public function detail($id)
    {
        $this->product = new Product();
        $this->singleProduct = $this->product->getProductById($id);

        return view('detail', [
            'categories' => $this->categories,
            'product' => $this->singleProduct]);
    }

}