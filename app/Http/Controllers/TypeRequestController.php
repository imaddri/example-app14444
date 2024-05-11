<?php

namespace App\Http\Controllers;

use App\Models\type__requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TypeRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $TypeRequests = type__requests::all(); // تم تغيير اسم المتغير هنا
    return view('users.user')->with('TypeRequests',$TypeRequests);// تم تغيير اسم المتغير هنا أيضًا
    
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    dd('Creating a new resource');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(type__requests $typeRequest)
    {
        return view('user');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(type__requests $typeRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, type__requests $typeRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(type__requests $typeRequest)
    {
        //
    }
}
