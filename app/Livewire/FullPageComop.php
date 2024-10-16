<?php

namespace App\Livewire;

use Livewire\Component;

class FullPageComop extends Component
{
    public function render()
    {
        //to extend from custom layout
        return view('livewire.full-page-comop')->layout('layouts.custom');
        //you can user extend
        return view('livewire.full-page-comop')->extends('layouts.custom'); //but you will need to use @yield('slot') in layout

        //to change slot name
        return view('livewire.full-page-comop')->layout('layouts.custom')->slot('content');


        //to send param in to layout
        return view('livewire.full-page-comop')->layout('layouts.custom', ['title' => 'islam ahmed']);

        //

    }
}
