<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|min:10|max:180',            
            'thumbnail'=>'required',
            'introtext'=>'required',
            'content'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Bạn chưa nhập Tiêu đề bài viết.',
            'title.min' => 'Tiêu đề phải có ít nhất 10 kí tự.',
            'title.max'=> 'Tiêu đề bài viết quá dài.',
            'thumbnail.required'=>'Bạn chưa chọn Hình minh họa.',
            'introtext.required'  => 'Bạn chưa nhập Giới thiệu bài viết ngắn gọn.',
            'content.required'  => 'Bạn chưa nhập Nội dung bài viết.'
        ];
    }
}
