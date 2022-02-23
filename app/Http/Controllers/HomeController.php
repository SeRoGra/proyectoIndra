<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Repositories\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $producto;

    public function __construct(Producto $producto){
        $this->producto = $producto;
    }

    public function index()
    {

        $producto = $this->producto->all();

        for ($i=0; $i <count($producto) ; $i++) {
            HomeController::store($producto[$i]->title, $producto[$i]->description);
        }

        return redirect()->route('producto.index', ['cargaProduct' => 1]);
        //$data = ProductModel::get();
        //return view('/Producto.index', compact('cargaProduct'), compact('data'));
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