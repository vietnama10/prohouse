<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewProductFormRequest extends FormRequest
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
            //
            'type_id' => 'required|exists:types,id',
            'project_id' => 'required|exists:projects,id',
            'sku' => 'required|unique:products,sku',
            'name' => 'required',
            'url_key' => 'required|unique:products,url_key',
            'price' => 'required',
            'description' => 'required|max:800',
            'size' => 'required|numeric',
            'level' => 'required|numeric',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'direction' => 'required',
            'location' => 'required',
            'address' => 'required'
        ];
    }
}
