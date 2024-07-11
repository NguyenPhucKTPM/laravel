<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ConfirmPassword;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'userName' => 'required|string|max:255|unique:users',
            'fullName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|',
            'rePassword' => ['required', 'string', 'min:8', new ConfirmPassword],
            'SDT' => 'required|numeric|digits:10',
            'address' => 'required|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'userName.required' => 'Tên người dùng không được để trống.',
            'userName.string' => 'Tên người dùng phải là chuỗi.',
            'userName.max' => 'Tên người dùng không được vượt quá 255 ký tự.',
            'userName.unique' => 'Tên người dùng đã tồn tại.',

            'fullName.required' => 'Họ và tên không được để trống.',
            'fullName.string' => 'Họ và tên phải là chuỗi.',
            'fullName.max' => 'Họ và tên không được vượt quá 255 ký tự.',

            'email.required' => 'Địa chỉ email không được để trống.',
            'email.string' => 'Địa chỉ email phải là chuỗi.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.max' => 'Địa chỉ email không được vượt quá 255 ký tự.',
            'email.unique' => 'Địa chỉ email đã tồn tại.',

            'password.required' => 'Mật khẩu không được để trống.',
            'password.string' => 'Mật khẩu phải là chuỗi.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',

            'rePassword.required' => 'Nhập lại mật khẩu không được để trống.',
            'rePassword.string' => 'Nhập lại mật khẩu phải là chuỗi.',
            'rePassword.min' => 'Nhập lại mật khẩu phải có ít nhất 8 ký tự.',
            'rePassword.same' => 'Mật khẩu nhập lại không khớp với mật khẩu đã nhập.',

            'SDT.required' => 'Số điện thoại không được để trống.',
            'SDT.numeric' => 'Số điện thoại phải là số.',
            'SDT.digits' => 'Số điện thoại phải có đúng 10 chữ số.',

            'address.required' => 'Địa chỉ không được để trống.',
            'address.string' => 'Địa chỉ phải là chuỗi.',
            'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
        ];
    }
}