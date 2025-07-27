<?php

namespace Modules\Profile\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
{
  public function rules() : array
  {
    $id = $this->input('id');

    return [
      'username' => [
        'required',
        'string',
        'max:255',
        Rule::unique('users', 'username')->ignore($id),
      ],
      'email' => [
        'required',
        'email',
        'max:255',
        Rule::unique('users', 'email')->ignore($id),
      ],
      'role_id' => ['required', 'integer', 'exists:roles,id'],
      'password' => ['nullable', 'string', 'min:5'],
      'konfirmasi' => ['same:password'],
      'img' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
    ];
  }

  public function messages() : array
  {
    return [
      'username.required' => 'Username wajib diisi.',
      'username.unique' => 'Username sudah digunakan.',
      'konfirmasi.required' => 'Konfirmasi password wajib diisi.',
      'konfirmasi.same' => 'Konfirmasi password tidak sama.',
      'email.required' => 'Email wajib diisi.',
      'email.email' => 'Format email tidak valid.',
      'email.unique' => 'Email sudah digunakan.',
      'role_id.required' => 'Role wajib dipilih.',
      'role_id.exists' => 'Role tidak ditemukan.',
      'password.required' => 'Password wajib diisi saat membuat akun.',
      'password.min' => 'Password minimal 5 karakter.',
      'img.image' => 'File harus berupa gambar.',
      'img.mimes' => 'Gambar harus berformat JPG, JPEG, PNG, atau WEBP.',
      'img.max' => 'Ukuran gambar maksimal 2MB.',
    ];
  }
}
