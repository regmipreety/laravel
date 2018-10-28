<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shopping;

class myProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $shares = Shopping::all();

        return view('myProducts.index', compact('shares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('myProducts.create');
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
        'name'=>'required',
        'price'=> 'required|integer',
        'stock' => 'required|integer',
        'detail'=>'required'
      ]);
      $share = new Shopping([
        'name' => $request->get('name'),
        'price'=> $request->get('price'),
        'stock'=> $request->get('stock'),
        'detail'=>$request->get('detail'),
        'discount'=>$request->get('discount')

      ]);
      $share->save();
      return redirect('myProducts/')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $share = Shopping::find($id);

        return view('myProducts.edit', compact('share'));
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
        $request->validate([
        'share_name'=>'required',
        'share_price'=> 'required|integer',
        'share_detail' => 'required',
        'share_stock'=>'required|integer'
      ]);

      $share = Shopping::find($id);
      $share->name = $request->get('share_name');
      $share->price = $request->get('share_price');
      $share->detail = $request->get('share_detail');
      $share->stock=$request->get('share_stock');
      $share->discount=$request->get('share_discount');
      $share->save();

      return redirect('/myProducts')->with('success', $share->name.' has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $share = Shopping::find($id);
        $share->delete();

        return redirect('/myProducts')->with('success', $share->name.' has been deleted Successfully');
    }
}
