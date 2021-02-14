<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Plants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::latest()->paginate(5);

        return view('customer.orders.cart', compact('carts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plants = Plants::find($id);

        return view('customer.orders.show', compact('plants'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'quantity' => 'required',

        ]);
        
        $cart = Cart::find($request->id);
        $cart->quantity=$request->quantity;
        $cart->save();
        
        return redirect()->route('cart')
                        ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        $cart = DB::table('cart')->where('id',$id)->get();

        return redirect()->route('cart')
                        ->with('success', 'Product deleted successfully');
    }
}
