<?php


namespace App\Helper\Constants;
use Illuminate\Support\Facades\Validator;

class inputValidate
{
     public function Packagevalidator($data)
        {

         return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'price'=> 'required',
                'details'=> 'required',
                'Available_time'=> 'required',
                'calender_name'=> 'required',
                
            ]);

        }
}
