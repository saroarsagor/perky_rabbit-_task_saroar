<?php


namespace App\Helper\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;

class packageRequest
{

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'price' => [
                'required',
            ],
            'details' => [
                'required',
            ],
            'Available_time' => [
                'required',
            ],
            'calender_name' => [
                'required',
            ],
        ];
    }

}
