<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        
        $client= new Client();
        $url="http://localhost:8000/api/product"; 
        $response= $client->request('GET',$url);
        $produk= $response->getBody()->getContents();
        $produkArray= json_decode($produk,true);
        $data =$produkArray['data'];
        return view('produk.index',['data'=>$data,'footer'=>'Thomas Aquino']);
    }

    public function store(Request $request)
    {
        $parameter=[
            'Product_name'=> $request->Product_name,
            'Category'=> $request->Category,
            'Price'=> $request->Price,
            'Discount'=> $request->Discount,
        ];
        
        $client= new Client();
        $url="http://localhost:8000/api/product"; 
        $response= $client->request('POST',$url,[
            'headers'=>['Content-type'=>'application/json'],
            'body' =>json_encode($parameter)
        ]);
        $produk= $response->getBody()->getContents();
        $produkArray= json_decode($produk,true);
        if($produkArray['status']!=true){
            $error=$produkArray['data'];
            return redirect()->to('product')->withErrors($error)->withInput();
        }else{
           return redirect()->to('product')->with('success','Add Data Successfully');
        }
     

    }
    public function edit(string $id)
    {
        $client= new Client();
        $url="http://localhost:8000/api/product/$id"; 
        $response= $client->request('GET',$url);
        $produk= $response->getBody()->getContents();
        $produkArray= json_decode($produk,true);
        if($produkArray['status']!=true){
                $error=$produkArray['message'];
                return redirect()->to('product')->withErrors($error);
        }else{
            $data =$produkArray['data'];
            return view('produk.edit',['data'=>$data]);
        }
    }

    public function show(string $id)
    {
        $produk=Product::find($id);
        if(!$produk){
            return response()->json([
                'message'=>'Product Not Found'
            ],404);
        }
        return response()->json([
            'produk'=>$produk
        ],200);
    }

    public function update(Request $request, $id)
    {
        $parameter=[
            'Product_name'=> $request->Product_name,
            'Category'=> $request->Category,
            'Price'=> $request->Price,
            'Discount'=> $request->Discount,
        ];
        
        $client= new Client();
        $url="http://localhost:8000/api/product/$id"; 
        $response= $client->request('PUT',$url,[
            'headers'=>['Content-type'=>'application/json'],
            'body' =>json_encode($parameter)
        ]);
        $produk= $response->getBody()->getContents();
        $produkArray= json_decode($produk,true);
        if($produkArray['status']!=true){
            $error=$produkArray['data'];
            return redirect()->to('product')->withErrors($error)->withInput();
        }else{
           return redirect()->to('product')->with('success','Update Data Successfully');
        }
   
    }

    public function destroy(string $id)
    {
        $client= new Client();
        $url="http://localhost:8000/api/product/$id"; 
        $response= $client->request('DELETE',$url);
        $produk= $response->getBody()->getContents();
        $produkArray= json_decode($produk,true);
        if($produkArray['status']!=true){
            $error=$produkArray['data'];
            return redirect()->to('product')->withErrors($error)->withInput();
        }else{
           return redirect()->to('product')->with('success','Delete Data Successfully');
        }
    }
}
