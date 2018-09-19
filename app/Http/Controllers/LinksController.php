<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Link;
use \input;
class LinksController extends Controller
{
  public function show($id){
      $link=Link::findOrFail($id);
      return new redirect($link->url,301);
  }
  public function create(){
    
      return view('links.create');
  }
  public function store(){
      $url=Input::get('url');

      $link=Link::firstOrCreate(['url'=>$url]);
     
     return view('links.success',compact('link'));
  }
}
