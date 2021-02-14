<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Models\Plants;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class ShopController extends Controller
{
    public function addToCart($id)
    {
        $plants = Plants::find($id);

        if(!$plants) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart) {

            $cart = [
                $id => [
                    "plants_name" => $plants->plants_name,
                    "quantity" => 1,
                    "plants_price" => $plants->plants_price,
                    "plants_desc" => $plants->plants_desc
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->route('shop')->with('success', 'Product added to cart successfully.');
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->route('shop')->with('success', 'Product added to cart successfully!');
 
        }

        $cart[$id] = [
            "plants_name" => $plants->plants_name,
            "quantity" => 1,
            "plants_price" => $plants->plants_price,
            "plants_desc" => $plants->plants_desc
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function show($id)
    {
        $plants = Plants::find($id);

        return view('customer.orders.show', compact('plants'));
    }


    use WithPagination;

    public function index()
    {
        $plants = Plants::latest()->paginate(5);

        return view('customer.orders.index', compact('plants'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
}
