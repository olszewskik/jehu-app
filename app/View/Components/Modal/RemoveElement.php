<?php

namespace App\View\Components\Modal;

use Illuminate\View\Component;

class RemoveElement extends Component
{

    public $idItemToRemove;
    public $nameItemToRemove;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($idItemToRemove, $nameItemToRemove)
    {
        $this->idItemToRemove = $idItemToRemove;
        $this->nameItemToRemove = $nameItemToRemove;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal.remove-element');
    }
}
