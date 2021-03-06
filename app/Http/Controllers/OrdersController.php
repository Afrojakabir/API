<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Order_Product;
use App\User;
use PDF;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //order details table
    
    public function index()
     {
       
     $datas =Order::with('users')->get();
//    return response()->json($datas);

   if (request()->ajax()){
       
               return response()->json($datas);
           }

        return view('order.index',compact('datas'));
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
         
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 

    }
     public function order_product()
    { 

        $datas =Order_Product::all();
        
          //dd( $datas);
       return view('order.order_product',compact('datas'));
    }

     public function downloadPDF(){

      $datas = Order_Product::all();

      $pdf = PDF::loadView('order.pdf', compact('datas'));
    
    return $pdf->download('ordered_product.pdf');
    }

    public function order_pdf(){

      $datas = Order::all();

      $pdf = PDF::loadView('order.pdf1', compact('datas'));
    
    return $pdf->download('order.pdf');
    }




/*public function index()
    {
        $person = Person::all();
        $user = User::all();
        //$user = User::where($person_id == $user_id);

        return View::make('users.index')
            ->with('user', $user)
            ->with('person', $person);

        return View::make('users.index');
    }*/
     public function userorder()
    { 
        $u_id = auth()->user()->id;
      $datas=  User::findorFail($u_id)->ordered_product()->get();

     
      
         return View('user.userorder',compact('datas'));
          /*  ->with('order', $order)
            ->with('order_product', $order_product);
        
        //dd( $datas);
       return View::make('user.userorder');*/
    }

       public function vieworder($id)
    {

        $datas =Order::findorFail($id)->order_products()->get();
       
        return view('order.vieworder',compact('datas'));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Order::findorFail($id);
        return view('order.edit',compact('data'));
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
         $data =Order::findorFail($id);
         $data->status=$request->input('status');
         $data->save();
         return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data= new Order();
       Order::findorFail($id)->delete();
       return redirect('/order');
    }
    
//for aapi
//view order
    public function orders(){
        $order = Order::with('users')->get();
        return response()->json($order);
    }
    //delete order
    public function destroyOrder($id)
    {
        $data= new Order();
        Order::findorFail($id)->delete();
          if ($data){
            return response()->json([
               
                'status'  => 'Deleted',
            ]);
  
          }
        }
        //order

        public function updateOrder(Request $request, $id)
        {   
           $data = Order::find($id);
           $data->status=$request->status;
           $data->save();
            return response()->json($data);
        }  

        //view ordered product

    public function productOrdered(){
        $data = Order_Product::all();
        return response()->json($data);
    }

    //delete ordered product

    public function destroyOrderedProduct($id)
    {
        $data= new Order_Product();
        Order_Product::findorFail($id)->delete();
          if ($data){
            return response()->json([
               
                'status'  => 'Deleted',
            ]);
  
          }
        }

    public function vieworderapi($id)
    {
        

        $datas =Order::findorFail($id)->order_products()->get();
       
         return response()->json($datas);
    }


    
}
