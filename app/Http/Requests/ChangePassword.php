<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassword extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'old_pass' => 'required',
          'new_pass' => 'required|string|min:6',
          'retype_pass' => 'required|same:new_pass',

        ];
    }
    public function messages()
    {
        return [
          'old_pass.required' => "Please Enter Your Old Password!",
          'new_pass.required' => "Please Enter Your New Password!",
          'new_pass.string' => "Invalid New Password!",
          'new_pass.min' => "New Password should be minimum 6 characters!",
          'retype_pass.required' => "Please Enter Your Re-type Password!",
          'retype_pass.same' => "Password Doesn't Match!",

        ];
    }
}
