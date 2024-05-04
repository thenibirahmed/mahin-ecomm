<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public function removeFromCart($index)
    {
        $carts = session()->get('cart', []);
        unset($carts[$index]);
        session()->put('cart', $carts);
    }

    public function render()
    {
        return view('livewire.cart',[
            'carts' => session()->get('cart', [])
        ]);
    }
}
