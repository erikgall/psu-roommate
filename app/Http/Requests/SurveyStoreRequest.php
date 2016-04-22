<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SurveyStoreRequest extends Request
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
            'question_1' => 'required',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
            'question_6' => 'required',
            'question_7' => 'required',
            'question_8' => 'required',
            'question_9' => 'required',
            'question_10' => 'required',
            'question_11' => 'required',
            'question_12' => 'required',
            'question_13' => 'required',
            'question_14' => 'required',
            'question_15' => 'required',
            'question_16' => 'required',
            'question_17' => 'required',
            'question_18' => 'required',
        ];
    }
}
