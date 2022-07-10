<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Table extends Component
{
    public array $headerNameArray;
    public bool $showActions;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($headerNameArray, $showActions=true)
    {
        $this->headerNameArray = $headerNameArray;
        $this->showActions = $showActions;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.table');
    }
}
