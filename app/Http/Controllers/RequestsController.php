<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\type__requests;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = Requests::latest()->paginate(5);
        return view('requests.index', compact('requests'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $id)
    {   $registre = Auth::user()->Registration_number;
        $Info = new Product();
        $Info = Product::find($id->id);
        //dd($Info);
        $domande=new Requests();
        $domande->Registration_number = $registre;
        $domande->request_type = $Info->NameRequest;

        $domande->save();
        
        
        return redirect('card')->with('success','Request added successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Requests $requests)
    {
        return view('users.card');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requests $requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requests $requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
   
    $request = Requests::findOrFail($id);
    $request->delete();
    return redirect()->route('requests.index')->with('success', 'Request deleted successfully');
}

}
