<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id','tittle'];
    public $timestamps = false;

    public function products()
    {
    	return $this->hasMany(Product::class) ;
    }

    public static  function arrayForSelect()
    {
    	$arr=[];
    	$categories = Category::all();
    	foreach ($categories as $category) {
    		$arr[$category->id] =$category->tittle;
    	}

    	return $arr;
    }

}
