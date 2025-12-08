<?php

namespace Matthieuthuetdev\Mytoolbox\Controllers;

class HomeController
{
    public function __construct() {}
public function displayHome():void {
    require __DIR__."/../Views/home/home.php";
}
public function displayAbout():void {
    require __DIR__."/../Views/home/about.php";
}

}
