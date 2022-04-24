<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\ProductType;
use Illuminate\Support\Facades\Gate;



class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('isAdmin')||Gate::allows('isFuncionario')) {
        $products= ProductType::all()->toJson(JSON_PRETTY_PRINT);
        return response($products,200);
       }
       else {
           return response()->json([
           "message" => "Unauthorized"
           ], 401);
       }
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
        $request->validate(
            [
              'tipo'=>['required','string','min:5'],
              'descricao'=>['required'],
              'image' => 'image|mimes:jpeg,png,jpg,svg',
              'preco'=>['required']
            ]
          );
      
          $input = $request->all();
      
          if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $input['image'] = "$postImage";
          }
      
          ProductType::create($input);
          return response()->json([
            "message" => "funcionario record created"."<br>".$input
        ], 201);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $request->validate(
            [
              'tipo'=>['required','string','min:5'],
              'descricao'=>['required'],
              'preco'=>['required']
            ]
          );
    
          if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $input['image'] = "$postImage";
        }else{
            unset($input['image']);
        }
        $post->update($input);
        return redirect()->route('produtos.productType.index')->with('success','Product Type updated successfully');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductType::find($id)->delete();
        return redirect()->route('produtoType.index');
    }
}
