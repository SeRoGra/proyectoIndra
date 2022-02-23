<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserModel::get();
        return view('/usuario.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
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
            'nombre' => 'required',
            'dni' => 'required|integer|unique:user,dni,'.request()->id,
            'direccion' => 'required',
            'telefono' => 'required|integer',
            'email' => 'required|email|unique:user,email,'.request()->id
        ]);

        UserModel::create([
            'nombre' => request()->nombre,
            'apellidos' => request()->apellidos,
            'dni' => request()->dni,
            'direccion' => request()->direccion,
            'telefono' => request()->telefono,
            'email' => request()->email
        ]);

        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = UserModel::findOrFail($id);
        return view('usuario.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = UserModel::findOrFail($id);
        return view('usuario.edit', compact('data'));
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
        request()->validate([
            'nombre' => 'required',
            'dni' => 'required|integer|unique:user,dni,'.request()->id,
            'direccion' => 'required',
            'telefono' => 'required|integer',
            'email' => 'required|email|unique:user,email,'.request()->id
        ]);

        $data = UserModel::find(request()->id);
        $data->nombre = request()->nombre;
        $data->apellidos = request()->apellidos;
        $data->dni = request()->dni;
        $data->direccion = request()->direccion;
        $data->telefono = request()->telefono;
        $data->email = request()->email;
        $data->save();
        return redirect()->route('usuario.show', request()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $data = UserModel::find(request()->id);
        $data->delete();
        return redirect()->route('usuario.index');
    }
}
