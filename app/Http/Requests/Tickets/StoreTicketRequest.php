<?php

namespace App\Http\Requests\Tickets;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->user()->hasAnyRole('Customer'))
        {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'          => 'required|string|max:200',
            'description'   => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'         => 'Name is required',
            'name.string'           => 'Name must be string',
            'description.string'    => 'Description must be string',
        ];
    }
}
