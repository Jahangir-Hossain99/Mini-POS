<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittle'
    ];

    public function users()
    {
    	return $this->hasMany(User::class);
    }

    /**
    *Getting arra for select option
    **/

    public static  function arrayForSelect()
    {
    	$arr=[];
    	$groups = Group::all();
    	foreach ($groups as $group) {
    		$arr[$group->id] =$group->tittle;
    	}

    	return $arr;
    }

}
