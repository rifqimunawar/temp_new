<?php

namespace Modules\Settings\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
{
  /**
   * Get the validation rules that apply to the request.
   */
  public function rules() : array
  {
    return [
      'name' => 'required|string|max:255',
      'alamat' => 'required|string|max:255',
      'email' => 'nullable|email|max:255',
      'phone' => 'required|string|max:50',
      'base_url' => 'required|url|max:255',
      'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
      'background' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
      'description' => 'nullable|string',
      'social_facebook' => 'nullable|url|max:255',
      'social_twitter' => 'nullable|url|max:255',
      'social_instagram' => 'nullable|url|max:255',
    ];
  }

  public function messages() : array
  {
    return [
      'name.required' => 'Nama wajib diisi.',
      'alamat.required' => 'Alamat wajib diisi.',
      'email.email' => 'Email tidak valid.',
      'phone.required' => 'Nomor telepon wajib diisi.',
      'base_url.required' => 'Base URL wajib diisi.',
      'base_url.url' => 'Base URL harus berupa tautan yang valid.',
      'logo.image' => 'Logo harus berupa gambar.',
      'logo.mimes' => 'Logo hanya boleh JPG, PNG, atau WEBP.',
      'background.image' => 'Background harus berupa gambar.',
      'background.mimes' => 'Background hanya boleh JPG, PNG, atau WEBP.',
      'social_facebook.url' => 'URL Facebook tidak valid.',
      'social_twitter.url' => 'URL Twitter tidak valid.',
      'social_instagram.url' => 'URL Instagram tidak valid.',
    ];
  }
}
