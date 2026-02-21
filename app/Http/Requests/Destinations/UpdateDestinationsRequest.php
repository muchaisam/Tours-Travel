<?php

namespace App\Http\Requests\Destinations;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDestinationsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user() && $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category' => 'required',
            'pricing' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'group_size' => 'nullable|string|max:255',
            'tour_type' => 'nullable|string|max:255',
        ];
    }
}
