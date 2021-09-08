<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LichTuanRequest extends FormRequest
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
            'title'=>'required|min:10',
            'content'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Bạn chưa nhập Tiêu đề lịch công tác.',
            'title.min' => 'Tiêu đề lịch phải có ít nhất 10 kí tự.',
            'content.required'  => 'Bạn chưa nhập Nội dung lịch công tác.'
        ];
    }
}
