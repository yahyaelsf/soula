<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMusicController extends BaseFormRequest
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
        $rules = [
            // 's_cover' => [
            //     'image',
            //     Rule::requiredIf(function () {
            //         return !$this->filled('pk_i_id');
            //     }),
            //     'max:' . $this->imageMaxSize
            // ],
            's_music' => [
                'file',
                Rule::requiredIf(function () {
                    return !$this->filled('pk_i_id');
                }),
            ],
            'fk_i_cource_id' => [
                Rule::exists('t_cources', 'pk_i_id'),
                'required'
            ],
            'fk_i_vedio_id' => [
                Rule::exists('t_vedios', 'pk_i_id'),
                'required'
            ]
        ];


        foreach (config('app.supported_languages') as $language) {
            $rules['localizable.' . $language . '.s_title'] = 'required|string';
            // $rules['localizable.' . $language . '.s_description'] = 'nullable|string';
        }

        return $rules;
    }
}
