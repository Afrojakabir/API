<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;
use App\Product;
use App\User;
use App\Cart;
use App\Checkout;
use Session;

class CheckoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


  
    public function index()
    {
        /*
    if (!Session::has('cart')) {
            return view('cart.index');
         }
           $oldCart  = Session::get('cart');
           $cart = new Cart($oldCart);
           $total = $cart->totalPrice;
            $datas =User::all();
          
      return view('checkout.index',compact('datas'), ['total'=>$total]);*/
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
/*
 if (!Session::has('cart')) {
            return view('cart.index');
         }
           $oldCart  = Session::get('cart');
           $cart = new Cart($oldCart);
           $total = $cart->totalPrice;
        $data =User::findorFail($id);
          
       return view('checkout.index',compact('data'), ['total'=>$total]);*/
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
