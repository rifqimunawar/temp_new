<?php

namespace Modules\Settings\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{
  public function rules() : array
  {
    return [
      'title' => 'required|string|max:255',
      'url' => 'required|string|max:255',
      'icon' => 'nullable',
      'caret' => 'nullable',
      'is_aktif' => 'nullable',
      'parent_id' => 'nullable',
    ];
  }

  public function messages() : array
  {
    return [
      'title.required' => 'Judul menu wajib diisi.',
      'url.required' => 'URL menu wajib diisi.',
    ];
  }


}
