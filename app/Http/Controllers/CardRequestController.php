<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\type__requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CardRequestController extends Controller
{
    /**
     *
     */
    public function index()
    {  $regitre = Auth::user()->Registration_number;
        $input = Product::all();
        return view('users.card')->with('input', $input);
    }


    /**

     */
    public function create()
    {
        return view('user');
    }

    /**

     */
    public function store(Request $request)
    {   $registre = Auth::user()->Registration_number;
        $data = type__requests::find($request->id);
        //dd($data);
        $product = new Product;
        $product->Registration_number = $registre;
        $product->NameRequest = $data->NameRequest;
        $product->save();

        return redirect('Request')->with('success','Request added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $cardRequest)
    {
        return view('users.card');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $cardRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $cardRequest)
    {
        //
    }

    /**
     *
     */
    public function destroy($id)
    {

        Product::destroy($id);
        return redirect()->to('card')->with('flash_message', 'Student deleted!');
    }
}
