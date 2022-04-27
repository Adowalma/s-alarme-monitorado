<?php

namespace App\Http\Controllers;

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
            // $products= ProductType::leftJoin('products_users','products_users.product_id','=','product_types.id')
            //             ->join('users','products_users.user_id','=','users.id')
            //             ->select('product_types.*','users.name');
            $products=ProductType::all();
            return view('produtos.index', compact('products'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $types = ProductType::orderBy('tipo','asc')->get();
        return view('produtos.create', compact('types'));
    
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
              'preco'=>['required'],
              'quantidade'=>['required']
            ]
          );
          $request['descricao']=nl2br($request['descricao']);
          $input = $request->all();
      
          if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $input['image'] = "$postImage";
          }
      
          ProductType::create($input);
      
          return redirect()->route('produto.index')->with('success','Produto adicionado com Sucesso');
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
        return redirect()->route('produtos.index')->with('success','Produto atualizado com sucesso!');    
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
        return redirect()->route('produto.index')       
                ->with('success','Produto apagado com sucesso!');
    }
    public function bloquear( $id )
    {
        ProductType::find($id )->update( ['estado'=>'Desativado'] );
           return redirect()->back();
    }
}
