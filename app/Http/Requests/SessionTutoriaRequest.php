<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionTutoriaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'tutor_id' => 'required',
			'estudiante_id' => 'required',
			'materia' => 'required|string',
			'fecha' => 'required',
			'hora' => 'required',
			'estado' => 'required',
        ];
    }
}
