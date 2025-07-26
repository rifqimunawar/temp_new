<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\User\Models\LogActvities;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    if (Auth::check()) {
      return redirect('/');
    }
    $intendedUrl = url()->previous();
    session(['url.intended' => $intendedUrl]);
    return view('auth::login/index');
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->only('username', 'password');
    if (Auth::attempt($credentials)) {
      $userLogin = Auth::user();
      LogActvities::create([
        'user_id' => $userLogin->id,
        'username' => $userLogin->username,
        'activity' => 'login',
        'ip_address' => $request->ip(),
        'user_agent' => $request->userAgent(),
      ]);

      Alert::success('Success', 'Selamat datang!!');
      return redirect()->intended('/');
    } else {
      return redirect()->back()->with('error', 'Username atau Password Salah');
    }
  }

  public function logout(Request $request)
  {
    if (Auth::check()) {
      $userLogin = Auth::user();
      LogActvities::create([
        'user_id' => $userLogin->id,
        'username' => $userLogin->username,
        'activity' => 'logout',
        'ip_address' => $request->ip(),
        'user_agent' => $request->userAgent(),
      ]);
    }

    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
  }
}
