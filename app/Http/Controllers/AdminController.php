<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use DB;
use Auth;
use App\User;
use Hash;
use App\Http\Requests\ChangePassword;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function change_password()
    {
        if (!empty(Auth::user()->provider_id)) {
            abort(404);
        } else {
            return view('admin.password.password');
        }
    }
    public function set_password()
    {
        if (empty(Auth::user()->provider_id)) {
            abort(404);
        } else {
            return view('admin.password.setpassword');
        }
    }
    public function set_password_done(Request $request)
    {
        $request -> validate([
          'new_pass' => 'required|string|min:6',
          'retype_pass' => 'required|same:new_pass',

        ], [

          'new_pass.required' => "Please Enter Your Password!",
          'new_pass.string' => "Invalid New Password!",
          'new_pass.min' => "Password should be minimum 6 characters!",
          'retype_pass.required' => "Please Enter Your Re-type Password!",
          'retype_pass.same' => "Password Doesn't Match!",
        ]);
        $new_pass = bcrypt($request->new_pass);
        User::where('id', Auth::user()->id)->update([
        'password' =>$new_pass,
        ]);
        return back()->with('hoise', "Password Set Successfully");
    }
    public function change_password_done(ChangePassword $request)
    {
        if (Hash::check($request->old_pass, Auth::user()->password)) {
            $new_pass = bcrypt($request->new_pass);
            if (Hash::check($request->old_pass, $new_pass)) {
                return back()->with('status', "Password must differ from old password!");
            } else {
                User::where('id', Auth::user()->id)->update([
                'password' =>$new_pass,
              ]);
                return back()->with('hoise', "Password Change Successfully");
            }
        } else {
            return back()->with('status', "Your Old Password Is Incorrect!");
        }
    }
}
