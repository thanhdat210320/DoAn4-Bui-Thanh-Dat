<?php

namespace App\Http\Controllers\Admin;
use App\Model\Product;
use App\Model\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function all_product()
    {
        $data['prod']=Product::paginate(5);
        return view('backend.product.all_product',$data);
    }
    public function add_product()
    {
        $data['prod']=Product::all();
        $data['cates'] = Category::all();
        return view('backend.product.add_product',$data);
    }
    public function post_add_product(Request $request)
    {
        $filename = $request->anh->getClientOriginalName();
        $prod = new Product();
        $prod['tensanpham'] = $request->tensanpham;
        $prod['giatien'] = $request->giatien;
        $prod['gianhap'] = $request->gianhap;
        $prod['soluong'] = $request->soluong;
        $prod['anh'] = $filename;
        $prod['nhacungcap'] = $request->nhacungcap;
        $prod['mota'] = $request->mota;
        $prod['cate_id'] = $request->cate_id;
        $prod['new'] = $request->new;
        $prod['mausac'] = $request->mausac;
        $prod->save();
        $request->anh->storeAs('upload',$filename);
        return Redirect::to('admin/product');
    }
    public function getEditProduct($id)
    {
        $data['prod'] = Product::find($id);
        $data['cates'] = Category::all();
        return view('backend.product.edit_product',$data);
    }
    public function postEditProduct(Request $request,$id)
    {
        $prod = new Product();
        $prod['tensanpham'] = $request->tensanpham;
        $prod['giatien'] = $request->giatien;
        $prod['gianhap'] = $request->gianhap;
        $prod['soluong'] = $request->soluong;
        $prod['anh'] = $request->anh;
        $prod['nhacungcap'] = $request->nhacungcap;
        $prod['mota'] = $request->mota;
        $prod['cate_id'] = $request->cate_id;
        $prod['new'] = $request->new;
        $prod['mausac'] = $request->mausac;
        $prod->save();
        return Redirect::to('admin/product');
    }
    public function delete($id)
    {
        Product::destroy($id);
        return Redirect::to('admin/product');
    }
    
}

