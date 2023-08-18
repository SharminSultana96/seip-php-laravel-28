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
                'name' => 'Man Fashion'
            ],

            1 => [
                'id' => 2,
                'name' => 'Electronics'
            ],
            2 => [
                'id' => 3,
                'name' => 'Sports Item'
            ],
        ];
    }

    public function getAllCategory()
    {
        return $this->categories;
    }
}