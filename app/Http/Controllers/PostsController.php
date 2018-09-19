<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Request;
use App\Http\Requests\EditPostRequest;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\Validator;
class PostsController extends Controller
{
   public function index(){
       //   $posts=Post::SearchByTitle('titlt2')->with('category')->get();
       // $posts=Post::Published()->with('category')->get();
        $posts=Post::get();   $posts->load('category');
      return view('posts.index',compact('posts'));
   }
   public function searchTitle(Request $request){
       $posts=Post::SearchByTitle($request->name)->with('category')->get();
    // $posts=Post::Published()->with('category')->get();
     //$posts=Post::get();   $posts->load('category');
   return view('posts.index',compact('posts'));
}
   
   public function create(){
       $post=new Post();
       
       $categories = Category::pluck('name','id');
     
          return view('posts.create',compact('post','categories'));
   }
   public function store(EditPostRequest $request){
    
        $post=Post::create($request->all());
      return redirect(route('news.index',$post));
   }
   public function show(Request $request,$id)
   {   
       $post = Post::find($id);
       $post->delete();
       return redirect(route('news.index'));
   }
   public function destroy($id){

   }


   public function edit($id){
       $post=Post::findOrFail($id);
       $categories = Category::pluck('name','id');
      // $categories=Category::lists('name','id');
       return view('posts.edit',compact('post','categories'));
   }


   public function update($id,EditPostRequest $request){
      
      
       $post=Post::findOrFail($id);
       $post->update($request->all());

       return redirect(route('news.index'));
   }
  
}
