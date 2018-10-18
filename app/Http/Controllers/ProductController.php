<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use PDF;
use Auth;
use App\Product;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function product()
    {
        $all_pro =  Product::all();

        return view('admin.product.product', compact('all_pro'));
    }


    public function productsub(Request $request)
    {
        $product_id =  Product::insertGetId([
        'product_name'=>$_POST['product_name'],
        'product_price'=>$_POST['product_price'],
        'product_quantity'=>$_POST['product_quantity'],
        'product_description'=>$_POST['product_description'],
        'created_at'=>Carbon::now(),
      ]);
        if ($request->hasFile('product_photo')) {
            $path = $request->file('product_photo')->storeAs(
                'product',
                "user-".  rand(10000, 200000).".jpeg"
          );
            Product::where('id', $product_id)->update([
            'product_photo' => $path,
          ]);
            return back()->with('status', 'Product Add Successfully!');
        } else {
            return back()->with('status', 'Product Add Successfully!');
        }
        //
    }
    public function product_edit($product_id)
    {
        $pro_edit = Product::findOrFail($product_id);
        return view('admin.product.editproduct', compact('pro_edit'));
    }
    public function productadd()
    {
        return view('admin.product.addproduct');
    }
    public function product_delete($product_id)
    {
        Product::where('id', $product_id)->delete();
        return back()->with('delete', 'Product Deleted Successfully!');
    }
    public function product_update(Request $request)
    {
        Product::where('id', $request->product_id)->update([
          'product_name' => $request->product_name,
          'product_price' => $request->product_price,
          'product_quantity' => $request->product_quantity,
          'product_description' => $request->product_description,
        ]);

        echo "done";
        // return back()->with('edit', 'Product Updated!');




        // if ($request->hasFile('product_photo')) {
            // echo "aje";



        //
            //a
            // return back()->with('edit', 'Product Updated!');
        // } else {
            // echo "aj nae";
            //   Product::where('id', $_POST['product_id'])->update([
          //   'product_name' => $_POST['product_name'],
          //   'product_price' => $_POST['product_price'],
          //   'product_quantity' => $_POST['product_quantity'],
          // ]);
          //   return back()->with('edit', 'Product Updated!');
        // }
        //
    }
    public function export()
    {
        return Excel::download(new ProductExport, 'products_list.xlsx');
    }
    public function downloadpdf()
    {
        $all_pro =  Product::all();
        $pdf = PDF::loadView('pdf.invoice', compact('all_pro'));
        return $pdf->stream('invoice.pdf');
        // return view('pdf.invoice', compact('all_pro'));
        //download pdf
        // $pdf = PDF::loadView('pdf.invoice', compact('all_pro'));
        // return $pdf->download('invoice.pdf');
        //Show pdf
    }
    public function product_download($id)
    {
        $product_img = Product::where('id', $id)->first();
        $product_img = $product_img->product_photo;
        return Storage::download($product_img);
    }
}
