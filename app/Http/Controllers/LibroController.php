<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Http\Resources\Libro as LibroResource;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libro = Libro::all();
        return LibroResource::collection($libro);
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
    public function store(Request $request)
    {
        //
        $libro = $request->isMethod('put') ? Libro::findOrFail($request->id): new Libro;
        $libro-> id = $request->input('id'); 
        $libro-> cod_libro = $request->input('cod_libro'); 
        $libro-> isbn = $request->input('isbn');
        $libro-> titulo = $request->input('titulo');
        $libro-> annio_publicacion = $request->input('annio_publicacion');
        $libro-> precio_venta = $request->input('precio_venta');
        $libro-> descripcion = $request->input('descripcion');
        
        if($libro->save()){
            return new LibroResource($libro);
    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $libro = Libro::findOrFail($id);
        return new LibroResource($libro);






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
        $libro = Libro::findOrFail($id);
        if ($libro->delete()){
            return new LibroResource($libro);
        
        }
    
    }

}


