<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    //
    // public function index(){
    //     return view('welcome');
    // }

    // to read the data

    public function index(){
        return view('product.index', ['product' => product::get()]);
    }

    // to insert the data

    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'img' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
            ]
        );


        //upload image
        $imagename = time().'.'.$request->img->extension();
        $request->img->move(public_path('product'), $imagename);
        // dd($request->all());
        $product = new product();
        $product->image = $imagename;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()->withSuccess('product created!!!');

    }

    // to end insert data

    // to modifiy the data

    public function edit($id){
        $product = product::where('id',$id)->first();
        return view('product.{id}.edit',['product'=> $product]);

    }
    public function update(Request $request, $id){
        dd($request->all());
    }
}
