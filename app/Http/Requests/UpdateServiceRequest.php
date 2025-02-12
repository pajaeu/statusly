<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateServiceRequest extends FormRequest
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
			'name' => Rule::when(fn() => $this->name, 'required|string'),
			'url' => Rule::when(fn() => $this->url, 'required|string|url'),
			'status' => Rule::when(fn() => $this->status, 'required|string|in:operational,maintenance,down'),
		];
	}
}
