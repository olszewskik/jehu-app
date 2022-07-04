<?php

namespace App\View\Components\Navbar;

use Illuminate\View\Component;

class Navitem extends Component
{
    public $name;

    public $routeName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $routeName)
    {
        $this->name = $name;
        $this->routeName = $routeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar.navitem');
    }
}
