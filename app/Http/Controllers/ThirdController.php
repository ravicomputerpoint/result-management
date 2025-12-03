<?php

namespace App\Http\Controllers;

use App\Models\Third;
use Illuminate\Http\Request;

class ThirdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thirds = Third::all();
        return view('thirds.index',compact('thirds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Third $third)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Third $third)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Third $third)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Third $third)
    {
        //
    }
}
