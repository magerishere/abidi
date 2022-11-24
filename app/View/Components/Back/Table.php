<?php

namespace App\View\Components\Back;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public array $heads)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.back.table');
    }
}