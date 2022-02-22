<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Repositories\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $producto;
    private $cargaProduct;

    public function __construct(Producto $producto){
        $this->producto = $producto;
    }

    public function index()
    {
        $data = ProductModel::get();
        return view('/Producto.index', compact('data'));
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
    public function store(String $title, String $description)
    {
        ProductModel::create([
            'nombre' => $title,
            'description' => $description
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ProductModel::findOrFail($id);
        return view('producto.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ProductModel::findOrFail($id);
        return view('producto.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $data = ProductModel::find(request()->id);
        $data->nombre = request()->nombre;
        $data->description = request()->description;
        $data->save();
        return redirect()->route('producto.show', request()->id);

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
