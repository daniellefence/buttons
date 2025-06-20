<?php

namespace Daniellefence\Buttons\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public function render()
    {
        return view('df::components.button');
    }
}