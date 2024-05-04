<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class ShopPage extends Component
{

    public function addToCart( $productId )
    {
        $product = Product::find($productId);

        $cartItems = session()->get('cart', []);

        $newCartItem = [
            'product_id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
        ];

        $itemIsPresent = false;
        foreach($cartItems as $oldCartItem){
            if($oldCartItem['product_id'] == $product->id){
                $itemIsPresent = true;
            }
        }

        if(!$itemIsPresent){
            $cartItems[] = $newCartItem;
        }else{
            foreach($cartItems as $key => $oldCartItem){
                if($oldCartItem['product_id'] == $product->id){
                    $cartItems[$key]['quantity'] += 1;
                }
            }
        }

        session()->put('cart', $cartItems);
        // dd(session()->get('cart'));

        session()->flash('message', "Product <b>{$product->name}</b> added to cart");
    }

    public function render()
    {
        return view('livewire.shop-page',[
            'products' => \App\Models\Product::all()
        ]);
    }
}
