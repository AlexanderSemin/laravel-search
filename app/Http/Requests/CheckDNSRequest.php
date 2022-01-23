<?php

namespace App\Http\Requests;

use App\Rules\CheckDNS;
use Illuminate\Foundation\Http\FormRequest;



class CheckDNSRequest extends FormRequest
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

//        todo: add custom validate dns name
        return [
            'domain_name' => 'sometimes|required',
        ];
    }
}
