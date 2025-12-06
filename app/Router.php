<?php

namespace Matthieuthuetdev\Mytoolbox;

class Router
{
    private string $pageController;
    private string $action;
    public function __construct($pageController, $action)
    {
        $this->pageController = $pageController;
        $this->action = $action;
    }
    public function route(): void
    {
        switch ($this->pageController) {
            case  "";
            case "home":
                echo "ceci est un teste si ça marche je suis très contant ! ça affiche la page d'accueil !";
                break;
            case "User":
                echo "page user ! ça marche ! YYYYYYYEEEEEEEEEESSSSSSSSSSS !!!!!!!!!!!!!!!!!!!!!";
            default:
                echo "404 not found";
                break;
        }
    }
}
