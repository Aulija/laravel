<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categories;
use Barryvdh\DomPDF\Facade\Pdf;

class CategoriesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function categories(){
        $categories=Categories::all();
        return view('categories',compact('categories'));
    }
    public function categoriesStore(Request $request){
        $data=Categories::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        return redirect('categories');
    }
    public function categories_entry(){

        return view('categories-entry');
    }
    public function categories_edit($id){
        $data=Categories::findOrFail($id);

        return view('categories-edit',compact('data'));
    }

    public function delete($id){
        $data=Categories::findOrFail($id);
        $data->delete();
        return redirect('categories');
    }
    public function update(Request $request,$id){
        $data=Categories::findOrFail($id);
        $data->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        $data->save();
        return redirect('categories');
    }


public function cetak(){
        $categories = Categories::all();
        $pdf=Pdf::loadview('cetak-categories',compact('categories'));
        return $pdf->download('laporan.pdf');
    }


}
