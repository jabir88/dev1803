<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function product()
    {
        $all_pro =  Product::paginate(5);

        return view('admin.product.product', compact('all_pro'));
    }


    public function productsub()
    {
        Product::insert([
        'product_name'=>$_POST['product_name'],
        'product_price'=>$_POST['product_price'],
        'product_quantity'=>$_POST['product_quantity'],
        'created_at'=>Carbon::now(),
      ]);
        return back()->with('status', 'Product Add Successfully!');
    }
    public function product_edit($product_id)
    {
        $pro_edit = Product::findOrFail($product_id);
        return view('admin.product.editproduct', compact('pro_edit'));
    }
    public function product_delete($product_id)
    {
        Product::where('id', $product_id)->delete();
        return back()->with('delete', 'Product Deleted Successfully!');
    }
    public function product_update()
    {
        Product::where('id', $_POST['product_id'])->update([
        'product_name' => $_POST['product_name'],
        'product_price' => $_POST['product_price'],
        'product_quantity' => $_POST['product_quantity'],
      ]);
        return back()->with('edit', 'Product Updated!');
    }
}
