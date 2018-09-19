<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class Post extends Model
{
 protected $fillable=['title','slug','content','online','category_id','tags_list','user_id'];
 public function getTagsListAttributte(){
     if($this->id){
        return $this->tags->pulck('id');
     }
     return $this->tags->pulck('id');
 }
 public function setTagsListAttributte($value){
    return $this->tags->sync($value);

 }
 
 public function category(){
     return $this->belongsTo('App\Category');
 }
 public function tags(){
    return $this->belongsToMany('App\Tag');
}
 public function scopePublished($query){
     return $query->where('online',true)->where('created_at', '<', DB::raw('getdate()'));
     //ou ->whereRaw('created_at < getdate()');
 }
 public function scopeSearchByTitle($query,$p){
       return $query->where('title','LIKE','%'. $p . '%');
 }
//  public function setSlugAttribute($value){
//      if(empty($value)){
//     $this->attribute['slug']=str::slug($this->title);
//      }
//  }
}
