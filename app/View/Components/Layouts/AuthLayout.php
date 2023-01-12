<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class AuthLayout extends Component
{

    public $page_title;
    public $page_name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(String $pageTitle = "Forum Ensak Entreprise", String $pageName = "Dashboard")
    {
        $this->page_name = $pageName;
        $this->page_title = $pageTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.auth-layout');
    }
}
