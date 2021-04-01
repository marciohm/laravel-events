<?php

namespace App\Http\Controllers;

use App\Products;
use App\StockOutputs;
use Illuminate\Http\Request;

class StockOutputsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = StockOutputs::all();
        return view('stock-outputs.index',compact('movements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Products::all()->pluck('name','id');
        return view('stock-outputs.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array_except($request->all(),'_token');
        StockOutputs::forceCreate($data);
        return redirect()->route('stock_outputs.index');
    }
}