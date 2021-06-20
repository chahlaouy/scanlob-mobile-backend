<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  int  $page
     *@param  int  $per_page
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( $request['keyword']){

            // [strtolower('%'.$district . '%')] turn the word into lower case
            // $products= Product::where('name', 'like', "%{$request['keyword']}%")->select('id', 'name')->take(5)->get();
            $products= Product::where('name', 'like', "%{$request['keyword']}%")->get();
            if( $products->count() === 0 ){
                return [];
            }
            return $products;
        }
        if( $request['popular']){
            return Product::orderBy('replies_count', 'desc')->take(2)->get();
        }

        return Product::paginate(15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
