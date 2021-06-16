<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='sanpham';
    protected $guest=[];
    public function Category()
    {
        return $this->belongsTo('Model\Category','cate_id','id');
    }
}
