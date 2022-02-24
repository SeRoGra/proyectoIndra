<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\UserProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $user_id = 0)
    {
        $data = "";
        $userProduct = "";

        if ($user_id == 0) {
            $data = ProductModel::select('products.id', 'products.nombre')->get();
        }else{
            $data = DB::table('products')
                        ->whereNotIn('products.id', DB::table('user_products')->where('user_products.user_id', $user_id)->pluck('product_id'))
                        ->select('products.id', 'products.nombre')
                        ->orderBy('products.id', 'ASC')->get();

            $userProduct = ProductModel::select('user_products.id as user_products_id', 'products.id', 'products.nombre')
            ->join('user_products', 'products.id', '=', 'user_products.product_id')
            ->where('user_products.user_id', $user_id)
            ->orderBy('user_products.id', 'DESC')->get();

            if (json_decode($data) == null) {
                $data = ProductModel::select('products.id', 'products.nombre')->get();
            }
        }

        return view('/usuario_x_producto.index', compact('data'), ['user_id' => $user_id])->with(compact('userProduct'));
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
    public function store()
    {

        request()->validate([
            'producto' => 'required'
        ]);

        UserProductModel::create([
            'user_id' => request()->user_id,
            'product_id' => request()->producto
        ]);

        return redirect()->route('asociados.index', request()->user_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$data = UserModel::findOrFail();
        return view('/usuario.index', compact('data'));

        $data = UserProduct::findOrFail($id);
        return view('usuario.show', compact('data'));*/
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
    public function destroy()
    {
        $data = UserProductModel::find(request()->id);
        $data->delete();
        return redirect()->route('asociados.index', request()->user_id);
    }
}
