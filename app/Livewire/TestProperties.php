<?php

namespace App\Livewire;

use Livewire\Component;

class TestProperties extends Component
{
    //must be public
    public $first_name = 'islam ahmed';
    public $last_name;
    public $name1;
    public $name2;
    public $name3;

    public function mount()
    {
        $this->last_name = 'islam ahmed';
        
        $this->fill([
            'name1' => 'islam ahmed',
            'name2' => 'islam ahmed',
            'name3' => 'islam ahmed',
        ]);

        $this->reset(['name1', 'name2']); //if you want to reset only some properties
        $this->resetExcept(['name2']); //if you want to Except some properties
    }


    public function render()
    {
        return view('livewire.test-properties');
    }
}
