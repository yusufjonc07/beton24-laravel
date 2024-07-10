<?php

namespace App\Http\Requests;

use App\Rules\PassportNumber;
use Illuminate\Foundation\Http\FormRequest;

class UserPostRequest extends FormRequest
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
            'username'=>'required|max:20|min:5|unique:users',
            'firstname'=>'required|max:20|min:2',
            'password'=>'required|max:20|min:5',
            'lastname'=>'required|max:20|min:2',
            'position'=>'required|max:100|min:5',
            'profileImage'=>'file',
            'passportNumber'=>['required', 'unique:users', new PassportNumber()],
            'salary'=>'required|integer',
            'role'=>'nullable',
            'workplaceId'=>'exists:App\Models\Workplace,id',
            'departmentId'=>'exists:App\Models\Department,id',
            'shiftId'=>'exists:App\Models\Shift,id',
        ];
    }
}
