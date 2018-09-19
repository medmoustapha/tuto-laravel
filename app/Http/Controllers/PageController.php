<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function about(){
       $title="A propos";
       $numbers=[1,2,3,4,5,6];
       return view('pages/about',compact('title','numbers'));
   }
}
