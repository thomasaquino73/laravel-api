<?php

namespace App\Http\Controllers\api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $produk = Product::all();
            return response()->json([
                'status'=>true,
                'message'=>'Data Exist',
                'data'=>$produk
            ],200);
   
    }

    public function store(Request $request)
    {
        $rules=[
                'Product_name' => 'required',
                'Category' => 'required',
                'Price' => 'required',
                'Discount' => 'required',
        ];
        $validasi = Validator::make($request->all(), $rules);
        if ($validasi->fails()) {
            return response()->json([
                'status'=>false,
                'message'=>'Something Wrong',
                'data'=>$validasi->errors()

            ]);
        } 
            $produk = Product::create($request->all());
            return response()->json([
                'status'=>true,
                'message'=>'Product Successfully Created',
                'data'=>$produk
            ],200);
           
    }

    public function show(string $id)
    {
        $produk=Product::find($id);
        if(!$produk){
            return response()->json([
                'status'=>false,
                'message'=>'Product Not Found',
                'data'=>$produk
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'Data Product Found',
            'data'=>$produk
        ],200);
    }

    public function update(Request $request, $id)
    {
            $produk=Product::findOrFail($id);
            if(!$produk){
                return response()->json([
                    'status'=>false,
                    'message'=>'Product Not Found'
                ]);
            }
            $rules=[
                'Product_name' => 'required',
                'Category' => 'required',
                'Price' => 'required',
                'Discount' => 'required',
        ];
        $validasi = Validator::make($request->all(), $rules);
        if ($validasi->fails()) {
            return response()->json([
                'status'=>false,
                'message'=>'Something Wrong',
                'data'=>$validasi->errors()
            ]);
        } 
            $produk->Product_name=$request->Product_name;
            $produk->Category=$request->Category;
            $produk->Price=$request->Price;
            $produk->Discount=$request->Discount;
            $produk->save();

            return response()->json([
                'status'=>true,
                'message'=>'Product Successfully Updated',
                'data'=>$produk
            ]);

        
   
    }

    public function destroy(string $id)
    {
        $produk=Product::find($id);
        if(!$produk){
            return response()->json([
                'message'=>'Product Not Found'
            ],404);
        }
        $produk->delete();
        return response()->json([
            'status'=>true,
            'message'=>'Product Successfully Deleted'
        ]);
    }
}
