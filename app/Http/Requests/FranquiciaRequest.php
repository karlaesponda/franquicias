<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FranquiciaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        $slug = request()->isMethod('put') ? 'required|unique:franquicias,slug,'.$this->id : 'required|unique:franquicias';
        //$logotipo = request()->isMethod('put') ? 'nullable|mimes:jpeg,png,jpg,gif,svg|max:8000' : 'required|logotipo';
        //$menu = request()->isMethod('put') ? 'nullable|mimes:jpeg,png,jpg,gif,svg|max:8000' : 'required|logotipo';
        //$inf_financiera = request()->isMethod('put') ? 'nullable|mimes:jpeg,png,jpg,gif,svg|max:8000' : 'required|logotipo';
        
        return [
            //
            'title' => 'required',
            'nombre_restaurante' => 'required',
            'slug' => $slug,
            'razon_social' => 'required',
            'rfc' => 'required',
            'anios_operacion' => 'required|integer',
            'num_sucursales' => 'required|integer',
            'marca_registrada' => 'required|boolean',
            'costo_marca' => 'required|integer',
            'logotipo' => request()->isMethod('put') ? 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8000' : 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8000',
            'tipo_restaurante' => 'required',
            'website' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'descripcion' => 'required',
            'historia' => 'required',
            'mision' => 'required',
            'vision' => 'required',
            'estandar_calidad' => 'required',
            'mercado_meta' => 'required',
            'menu' => request()->isMethod('put') ? 'nullable|file|mimetypes:application/pdf,application/msword|max:2048' : 'required|file|mimetypes:application/pdf,application/msword|max:2048',
            'inf_financiera' => request()->isMethod('put') ? 'nullable|file|mimetypes:application/pdf,application/msword|max:2048' : 'required|file|mimetypes:application/pdf,application/msword|max:2048',
            'soporte' => 'required',
            'entrenamiento' => 'required',
        ];
    }
}
