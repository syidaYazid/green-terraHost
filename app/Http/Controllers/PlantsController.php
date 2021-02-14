<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plants;
use Illuminate\Support\Facades\DB;

class PlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plants::latest()->paginate(5);

        return view('seller.plants.index', compact('plants'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.plants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'plants_name' => 'required',
            'plants_price' => 'required',
            'plants_desc' => 'required',

        ]);


        Plants::create($request->all());


        return redirect()->route('plants.index')
                        ->with('success', 'Plants registered successfully.');
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

        return view('seller.plants.show', compact('plants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plants = Plants::find($id);
        
        return view('seller.plants.edit', compact('plants'));
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
            'plants_name' => 'required',
            'plants_price' => 'required',
            'plants_desc' => 'required',

        ]);
        
        $plants = Plants::find($request->id);
        $plants->plants_name=$request->plants_name;
        $plants->plants_price=$request->plants_price;
        $plants->plants_desc=$request->plants_desc;
        $plants->save();

        return redirect()->route('plants.index')
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
        $plants = Plants::find($id);
        $plants->delete();

        $plants = DB::table('plants')->where('id',$id)->get();

        return redirect()->route('plants.index')
                        ->with('success', 'Product deleted successfully');
    }
}
