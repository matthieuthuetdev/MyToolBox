<?php

namespace Matthieuthuetdev\Mytoolbox;

use Matthieuthuetdev\Mytoolbox\Controllers\HomeController;

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
            case  "":
                $home = new HomeController();
                $home->displayHome();

                break;
            case "home":
                $home = new HomeController();
                if ($this->action === "home" || empty($this->action)) {
                    $home->displayHome();
                } elseif ($this->action === "about") {
                    $home->displayAbout();
                } else {
                    echo "404 not found";
                }
                break;
            case "user":
                echo "page user ! ça marche ! YYYYYYYEEEEEEEEEESSSSSSSSSSS !!!!!!!!!!!!!!!!!!!!!";
                break;
            default:
                echo "404 not found";
                break;
        }
    }
}
