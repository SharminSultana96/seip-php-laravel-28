<?php


namespace App\classes;


class Home
{
    public $category, $categories, $menu, $menus, $singleMenu, $categoryMenus;

    public function __construct()
    {

    }

    public function index()
    {
        return view('home');
    }

}