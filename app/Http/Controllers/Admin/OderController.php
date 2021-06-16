<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Oder;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OderController extends Controller
{
    public function all_oder()
    {
        $data['oder']=Oder::paginate(5);
        return view('backend.oder.viewoder',$data);
    }
}
