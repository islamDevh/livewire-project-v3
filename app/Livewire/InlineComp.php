<?php

namespace App\Livewire;

use Livewire\Component;

class InlineComp extends Component
{
    //to render html without blade
    public function render()
    {
        return <<<'HTML'
        <div>
            hello from livewireinline component
        </div>
        HTML;
    }
}
