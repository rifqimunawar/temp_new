<?php

namespace Modules\Settings\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolesRequest extends FormRequest
{
  /**
   * Get the validation rules that apply to the request.
   */
  public function rules() : array
  {
    return [
      'role_name' => 'required|string|max:255',
    ];
  }

  public function messages() : array
  {
    return [
      'role_name.required' => 'Role Akses wajib diisi.',
    ];
  }

}
