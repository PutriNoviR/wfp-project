<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Block\Element\ListData;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Query RAW
        $listData = DB::select(DB::raw('SELECT * FROM medicines'));
        //dd($listData);

        //Query Builder
        $listData = DB::table('medicines')->get();
        //dd($listData);

        //Eloquent Model
        $listData = Medicine::all();
        //dd($listData);

        return view('medicine.index', compact('listData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

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
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show($medicine)
    {
        $res = Medicine::find($medicine);
        $message = '';
        if ($res) {
            // dd($res);
            $message = $res;
        } else {
            $message = NULL;
        }
        return view('medicine.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }

    public function listMedicines()
    {
        //DBQuery
        //$data = DB::table('medicines')->select('generic_name', 'form', 'price')->get();

        //Eloquent Model
        $data = Medicine::select('generic_name', 'form', 'price')->get();

        //dd($data);

        return view('', compact('data'));
    }

    public function listMedicinesCategories()
    {
        //DBQuery
        // $data = DB::table('medicines')
        // ->join('categories', 'medicines.category_id', '=', 'categories.id')
        // ->select('medicines.generic_name', 'medicines.form', 'categories.name')
        // ->get();

        //Eloquent Model
        $data = Medicine::join('categories', 'medicines.category_id', '=', 'categories.id')
            ->select('medicines.generic_name', 'medicines.form', 'categories.name')
            ->get();

        //dd($data);

        return view('', compact('data'));
    }

    public function averagePrice()
    {
        //DBQuery
        // $data = DB::table('medicines')
        // ->leftjoin('categories', 'medicines.category_id', '=', 'categories.id')
        // ->groupby('categories.id')
        // ->select(DB::raw('IFNULL(AVG(medicines.price), 0)'))
        // ->get();

        //Eloquent Model
        $data = Medicine::leftjoin('categories', 'medicines.category_id', '=', 'categories.id')
            ->groupby('categories.id')
            ->select(DB::raw('IFNULL(AVG(medicines.price), 0)'))
            ->get();

        //dd($data);

        return view('', compact('data'));
    }

    public function medOneForm()
    {
        //DBQuery
        // $data = DB::table('medicines')
        // ->groupby('generic_name')
        // ->having(DB::raw('count(form)'), 1)
        // ->select('generic_name', DB::raw('count(form)'))
        // ->get();

        //Eloquent Model
        $data = Medicine::groupby('generic_name')
            ->having(DB::raw('count(form)'), 1)
            ->select('generic_name', DB::raw('count(form)'))
            ->get();

        //dd($data);

        return view('', compact('data'));
    }

    public function highestPrice()
    {
        //DBQuery
        // $data = DB::table('medicines')
        // ->join('categories', 'medicines.category_id', '=', 'categories.id')
        // ->where('medicines.price', function($query){
        //     $query->select(DB::raw('max(price)'))->from('medicines');
        // })
        // ->select('medicines.generic_name', 'categories.name', 'medicines.price')
        // ->get();

        //Eloquent Model
        $data = Medicine::join('categories', 'medicines.category_id', '=', 'categories.id')
            ->where('medicines.price', function ($query) {
                $query->select(DB::raw('max(price)'))->from('medicines');
            })
            ->select('medicines.generic_name', 'categories.name', 'medicines.price')
            ->get();

        dd($data);

        return view('', compact('data'));
    }

    public function showInfo()
    {
        $result = Medicine::orderBy('price', 'DESC')->first();
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
    Did you know? <br>The most expensive product is " . 
    $result->generic_name . "</div>"
        ), 200);
    }

    public function front_index(){
        $products= Product::all();
        return view('frontend.product', compact('products'));
    }

    public function addToCart($id)
    {
        $p=Medicine::find($id);
        $cart=session()->get('cart');
        //if cart not empty then check if this product exist thhen increment quantity
        if(!isset($cart[$id]))
        {
            //if item not exist in cart then add to cart with quantity= 1
            $cart[$id]=[
                "name"=>$p->nama_produk,
                "quantity"=>1,
                "price"=>$p->harga_jual,
                "photo"=>$p->image
            ];
        }else{
            $cart[$id]['quantity']++;

        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product added to cart successfully!');
    }
    public function cart()
    {
        return view('frontend.cart');
    }
}
