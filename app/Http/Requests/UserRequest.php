<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $userId = $this->route('user')?->id;
    
        $rules = [
            'name'     => 'required|string|max:255',
            'email'    => ['required', 'email', Rule::unique('users', 'email')->ignore($userId)],
            'type'     => ['required', Rule::in(['super_admin','admin','employee','customer'])],
            'role_id'  => 'nullable|integer',
            'avatar'   => 'nullable|image|max:2048',
        ];
    
        if ($this->isMethod('post')) {
            $rules['password'] = 'required|string|min:6|confirmed';
        }
    
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            if ($this->filled('password')) {
                $rules['password'] = 'nullable|string|min:6|confirmed';
            }
        }
    
        return $rules;
    }
    
}
