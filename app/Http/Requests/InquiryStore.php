<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Recaptcha;

class InquiryStore extends FormRequest
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
            'name'=>['required', 'string', 'max:50', 'min:3'],
            'email' => ['nullable', 'string', 'email', 'max:191'],
            'mobile'=>['required', 'string', 'max:15'],
            'whatsapp'=>['nullable', 'string', 'max:15'],
            'college_type'=>['required', 'string', 'max:15'],
            'college'=>['required', 'string', 'max:191'],
            'city'=>['nullable', 'string', 'max:100'],
            'state'=>['nullable', 'string', 'max:100'],
            'zip'=>['nullable', 'string', 'max:100'],
            'passing_year'=>['required'],
            'neet_score'=>['required', 'numeric']
        ];
    }
}
