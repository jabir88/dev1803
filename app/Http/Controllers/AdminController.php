<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use DB;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function product()
    {
        $all_pro =  Product::simplePaginate(5);

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
    public function change_password()
    {
        return view('admin.password.password');
    }
    public function change_password_done(Request $request)
    {
        $request->validate([
        'old_pass' => 'required',
        'new_pass' => 'required|string|min:6',
        'retype_pass' => 'required|same:new_pass',

      ], [
        'old_pass.required' => "Please Enter Your Old Password!",
        'new_pass.required' => "Please Enter Your New Password!",
        'new_pass.string' => "Invalid New Password!",
        'new_pass.min' => "New Password should be minimum 6 characters!",
        'retype_pass.required' => "Please Enter Your Re-type Password!",
        'retype_pass.same' => "Password Doesn't Match!",

      ]);
        return back();
    }
}
