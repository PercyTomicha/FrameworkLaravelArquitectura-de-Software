<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use App\Categoria;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::table('producto as p')
            ->join('categoria as c', 'c.id', '=', 'p.id_categoria')
            ->select('p.*','c.nombre as CN')->get();
        //->paginate(1);
        //return view('estudiante.index',['estudiantes'=>$estudiantes]);
        return view('software.producto.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('nombre','id');
        return view('software.producto.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre'=>'required|max:30',
            'precio'=>'required|numeric',
            'id_categoria'=>'required',
        ]);
        $producto= new Producto($request->all());
        $producto->save();
        \Flash::success("Se ha <strong>Registrado</strong> el Producto =><strong>".$producto->nombre."</strong> de forma exitosa!");
        return redirect('producto');
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
        $categorias = Categoria::pluck('nombre','id');
        $producto=Producto::find($id);
        return view('software.producto.edit',compact('categorias','producto'));
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
        $this->validate($request,[
            'nombre'=>'required|max:30',
            'precio'=>'required|numeric',
            'id_categoria'=>'required',
        ]);
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        \Flash::success("Se ha <strong>Actualizado</strong> el Producto =><strong>".$producto->nombre."</strong> de forma exitosa!");
        return redirect('producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        Producto::destroy($id);
        \Flash::success("Se ha <strong>Eliminado</strong> el Producto =><strong>".$producto->nombre."</strong> de forma exitosa!");
        return redirect('producto');
    }
}
