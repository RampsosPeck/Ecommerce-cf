<?php

namespace Ecommerce\Http\Controllers;

use Illuminate\Http\Request;

use Ecommerce\Producto;

use Ecommerce\Http\Resources\ProductosCollection;

use Ecommerce\ShoppingCart;

class ProductosController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['except'=> ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        


        $productos = Producto::paginate(15);

        if($request->wantsJson()){
            return new ProductosCollection($productos);
        }

        return view('productos.index',['productos'=> $productos  ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto;
        return view('productos.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $options = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price
        ];

        if(Producto::create($options)){
            return redirect('/productos');
        }else{
            return view('produtos.create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Producto::find($id);

        return view('productos.show',['producto'=> $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Producto::find($id);
        return view('productos.edit',['producto' => $product]);
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
        $product = Producto::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;

        if($product->save()){
            return redirect('/');
        }else{
            return view('productos.edit',['producto' => $product]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect('/productos');
    }
}
