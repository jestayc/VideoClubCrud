<?php

namespace sysMovie\Http\Controllers;

use Illuminate\Http\Request;

use sysMovie\Movie;
use Illuminate\Support\Facades\Redirect;
use sysMovie\Http\Requests\CatalogRequest;
use DB;

class CatalogController extends Controller
{
    public function __constructor(){

    }

    public function index(Request $request){
        if ($request){
            $query=trim($request->get('searchText'));
            $catalogos=DB::table('tbl_movie')->where('title', 'LIKE', '%'.$query.'%')
            ->paginate(3);
            return view('videoclub.catalogo.index', ["catalogos"=>$catalogos, "searchText"=>$query]);
        }
    }

    public function create(){
        return view('videoclub.catalogo.create');
    }

    public function store(CatalogRequest $request){
        $catalogos=new Movie;
        $catalogos->title=$request->get('title');
        $catalogos->year=$request->get('year');
        $catalogos->director=$request->get('director');
        $catalogos->rented='1';
        $catalogos->synopsis=$request->get('synopsis');

        if ($request->hasFile('poster')){
            $file=$request->file('poster');
            $file->move(public_path().'/imagenes/catalogo/', $file->getClientOriginalName());
            $catalogos->poster=$file->getClientOriginalName();
        }
        $catalogos->save();
        return Redirect::to('videoclub/catalogo');

    }

    public function show($id){
        return view("videoclub.catalogo.show", ["catalogos"=>Movie::FindOrFail($id)]);
    }

    public function edit($id){
        return view("videoclub.catalogo.edit", ["catalogos"=>Movie::FindOrFail($id)]);
    }

    public function update(CatalogRequest $request,$id){
        $catalogos=Movie::FindOrFail($id);
        $catalogos->title=$request->get('title');
        $catalogos->year=$request->get('year');
        $catalogos->director=$request->get('director');
        $catalogos->synopsis=$request->get('synopsis');

        if ($request->hasFile('poster')){
            $file=$request->file('poster');
            $file->move(public_path().'/imagenes/catalogo/', $file->getClientOriginalName());
            $catalogos->poster=$file->getClientOriginalName();
        }
        $catalogos->save();
        return Redirect::to('videoclub/catalogo');
    }

    public function destroy($id){
        $catalogo=Movie::FindOrFail($id);
        $catalogo->delete();
        return Redirect::to('videoclub/catalogo');
    }

}
