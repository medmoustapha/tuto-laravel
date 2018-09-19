<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    public function index(){
        $cats=Category::get();
        return view('categories.index',compact('cats'));
    }
    public function create(){
             $cat=new Category();
       
           return view('categories.create',compact('cat'));
    }
    public function store(Request $request){

        $cat=Category::create($request->all());
        return redirect(route('cat.index',$cat));
     }
     public function edit($id){
        $cat=Category::findOrFail($id);
       
        return view('categories.edit',compact('cat'));
    }
 
 
    public function update($id,Request $request){
        $cat=Category::findOrFail($id);
        $cat->update($request->all());
        return redirect(route('cat.index',$id));
    }
}
