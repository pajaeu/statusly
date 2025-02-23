<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateIncidentRequest extends FormRequest
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
            'message' => Rule::when(fn() => $this->message, 'required|string|min:6|max:255'),
			'service_id' => Rule::when(fn() => $this->service_id, [
				'required',
				'integer',
				Rule::in($this->project->services()->pluck('id')->toArray()),
			])
        ];
    }
}
