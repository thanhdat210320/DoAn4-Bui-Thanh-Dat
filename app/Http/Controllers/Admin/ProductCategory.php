<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductCategory extends Controller
{
    
    public function all_category()
    {
        $data['cate']=Category::paginate(5);
        return view('backend.category.all_category',$data);
    }
    public function add_category()
    {
        $data['cate']=Category::all();
        return view('backend.category.add_category',$data);
    }
    public function post_add_category(Request $request)
    {
        $cate = new Category();
        $cate['tenloai'] = $request->tenloai;
        $cate['xuatxu'] = $request->xuatxu;
        $cate['parentid'] = $request->parentid;
        $cate->save();
        return Redirect::to('admin/category');
    }
    public function getEditCategory($id)
    {
        $data['cate'] = Category::find($id);
        return view('backend.category.edit_category',$data);
    }
    public function postEditCategory(Request $request,$id)
    {
        $cate = Category::find($id);
        $cate['tenloai'] = $request->tenloai;
        $cate['xuatxu'] = $request->xuatxu;
        $cate->save();
        return Redirect::to('admin/category');
    }
    public function delete($id)
    {
        Category::destroy($id);
        return Redirect::to('admin/category');
    }
}
