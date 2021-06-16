<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='loaisanpham';
    protected $guest=[];
    public function product()
    {
        return $this->hasMany('Model\Product','cate_id','id');
    }
}
