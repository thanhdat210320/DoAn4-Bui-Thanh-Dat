<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Category;
use App\Model\Oder;
use Illuminate\Http\Request;
use App\Model\Slide;
use App\Model\Orderdetail;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function homepages()
    {
        $new_product = Product::where('new',2)->paginate(4);
        $hot_product = Product::where('new',1)->get();
        
        return view('pages.HomePage',compact('new_product','hot_product'));
    }
    public function getCategory($type)
    {
        $sp_theoloai = Product::where('cate_id',$type)->get();
        $sp_khac=Product::where('cate_id','<>',$type)->paginate(4);
        $loai=Category::all();
        return view('pages.category',compact('sp_theoloai','sp_khac','loai'));
        
    }
    public function getProductDetail($id)
    {
        $sanpham = Product::where('id',$id)->first();
        $sp_tuongtu = Product::where('cate_id',$sanpham->cate_id)->paginate(3);
        return view('pages.productdetail',compact('sanpham','sp_tuongtu'));
    }
    
    public function addToCart($id)
    {
         $product = Product::Where('id',$id)->first();
        $cart=session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity']=$cart[$id]['quantity']+1;

        }else{
            $cart[$id]=[
                'name'=>$product->tensanpham,
                'price'=>$product->giatien,
                'quantity'=>1,
                'image'=>$product->anh,
                'product_id'=>$id,
            ];
        }
        $count=count($cart);
        session()->put('cart',$cart);
        return response()->json([
            'code'=>200,
            'messega'=>'success',
            'count'=>$count

        ],200);
        
    }
    public function showCart(){
           $data['carts'] =session()->get('cart');
           return view('pages.cart',$data);
    
      }
      public function updateToCart(Request $request)
      {
          if($request->id && $request->quantity){
              $carts = session()-> get('cart');
              $carts[$request->id]['quantity'] = $request->quantity();
              session()->put('cart'.$carts);
              $carts = session()->get('cart');
              $cart_update = view('pages.cart',compact('carts'))->render();
              return response()->json(['cart'=>$cart_update,'code'=>200],200);              
          }
        
      }
      public function deleteCart(Request $request)
      {
          if($request->id){
              $carts = session()->get('cart');
              unset($carts[$request->id]);
              session()->put('cart',$carts);
              $data['carts']=session()->get('cart');
              $cart_delete = view('pages.cart',$data)->render();
              return response()->json([
                    'cart'=>$cart_delete,
                    'code'=>200
                    ],
                  200);
          }
        }
    public function GetLogin()
    {
        return view('login');
    }
    // public function PostLogin()
    // {
        
    // }
    public function checkout()
    {
        $data['carts'] =session()->get('cart');
        return view('pages.checkout',$data);
    }
    public function Post_Add_Oder(Request $request)
    {
        $oder = new Oder();
        $oder['tenkhachang'] = $request->tenkhachang;
        $oder['diachi'] = $request->diachi;
        $oder['email'] = $request->email;
        $oder['sdt'] = $request->sdt;
        $oder['ghichu'] = $request->ghichu;
        $oder->save();      
        $cart = session()->get('cart');
        foreach ($cart as $key => $item) {
            $Orderdetail = new Orderdetail();
            $Orderdetail->soluong = $item['quantity'];
            $Orderdetail->dongia = $item['price'];
            $Orderdetail->prod_id = $item['product_id'];
            $Orderdetail->oder_id = $oder->id;
            $Orderdetail->save();
            unset($cart['product_id']);
        }
        session()->flush();
        
        return Redirect::to('success');
    }
    public function Success()
    {
        return view('pages.Paymentsuccess');
    }
    public function ProductList()
    {
        return view ('pages.productlist');
    }
    public function Search(Request $request)
    {
        $search = $request->name;
        $data['prod'] = Product::where('tensanpham','like','%'.$search.'%')->get();
        return view('pages.productlist',$data);
        
    }
}
