<?php

namespace App\Http\Controllers;

use App\productDetails;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('productdetails.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function show(productDetails $productDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(productDetails $productDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productDetails $productDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(productDetails $productDetails)
    {
        //
    }
}
