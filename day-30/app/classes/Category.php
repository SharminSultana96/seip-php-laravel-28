<?php


namespace App\classes;


class Category
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = [
            0 => [
                'id' => 1,
                'name' => "Man Fashion",
                'image' => 'assets/img/p2.jpg',

            ],
            1 => [
                'id' => 2,
                'name' => "Women Fashion",
                'image' => 'assets/img/p3.jpg',
            ],
            2 => [
                'id' => 3,
                'name' => "Electronics",
                'image' => 'assets/img/p1.jpg',
            ],
            3 => [
                'id' => 4,
                'name' => "Sports Item",
                'image' => 'assets/img/p5.jpg',
            ],
        ];
    }

    public function getAllCategory()
    {
        return $this->categories;
    }
}