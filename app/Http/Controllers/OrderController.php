<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Plants;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.orders.index');
    //    $order = Order::latest()->paginate(3);

    //    return view('customer.orders.cart', compact('order'))
    //             ->with('i', (request()->input('page', 1) - 1) * 3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('customer.order.shop');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Plants::find();

        // $request->validate([
        //     'plants_name' => 'required',
        //     'plants_price' => 'required',
        //     'quantity' => 'required|min:1',
        //     'total_price' => 'required|',
        // ]);

        // Order::create($request->all());

        // return redirect()->route('customer.orders.index')
        //                 ->with('success', 'Order was added to the cart.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $order = Plants::find($id);

        // return view('customer.order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $order = Order::find($id);

        // return view('customer.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'plants_name' => 'required',
        //     'quantity' => 'required',
        //     'total_price' => 'required',
        // ]);

        // $order = Order::find($request->id);
        // $order->plants_name=$request->plants_name;
        // $order->plants_price=$request->plants_price;
        // $order->plants_desc=$request->plants_desc;
        // $order->save();
        
        // return redirect()->route('customer.order.cart')
        //                 ->with('success', 'Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $order = Order::find($id);
        // $order->delete();

        // $order = DB::table('orders')->where('id',$id)->get();

        // return redirect()->route('plants.index')
        //                 ->with('success', 'Product deleted successfully');
    }
}
