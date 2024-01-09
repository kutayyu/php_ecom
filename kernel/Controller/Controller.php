<?php

namespace App\Kernel\Controller;

use App\Kernel\View\View;

abstract class Controller
{

    private View $view;

    /**
     * @param  View  $view
     */
    public function setView(View $view): void
    {
        $this->view = $view;
    }

    public function view(string $name): void
    {
        $this->view->page($name);
    }

}