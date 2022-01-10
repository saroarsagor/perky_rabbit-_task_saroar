<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StorePackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*return Gate::allows('package-admin.store');*/
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
            'name' => 'required',
            'price' => 'required',
            'details' => 'required',
            'calender_name' => 'required',
            'countMonth' => 'required',
        ];
    }
}
