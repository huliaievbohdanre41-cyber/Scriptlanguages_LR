<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeacherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        $teacherId = $this->route('teacher')?->id;
        return [
            'full_name' => ['required', 'string', 'max:150'],
            'department' => ['required', 'string', 'max:120'],
            'academic_title' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150',
                Rule::unique('teachers', 'email')->ignore($teacherId),
            ],
            'experience_years' => ['required', 'integer', 'min:0', 'max:50'],
        ];
    }
}
