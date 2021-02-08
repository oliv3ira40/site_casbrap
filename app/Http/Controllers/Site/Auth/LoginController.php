<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Str;

use App\Helpers\Site\HelpSite;
use App\Helpers\HelpAdmin;

use App\Http\Requests\Site\Auth\reqLogin;
use App\Http\Requests\Site\Auth\reqDefinitivePassword;
use App\Http\Requests\Site\Auth\reset\reqValidatePersonalData;
use App\Http\Requests\Site\Auth\reset\reqSaveNewPassword;

use App\Models\Admin\User;

class LoginController extends Controller
{
    function pageLogin(Request $req)
    {
        $data = $req->all();

        if (\Auth::user()) {
            return redirect()->route('site.index');
        }

        if (isset($data['old_route'])) {
            if ($data['type'] == 'evaluations') {
                session()->flash('info_old_route', 'Faça login para ter acesso a pesquisa');
            }
        }
        return view('Site.auth.login', compact('data'));
    }
    function login(reqLogin $req)
    {
        $data = $req->all();

        if (!HelpSite::verifyRecaptcha($data['g-recaptcha-response'])) {
            return redirect()->route('site.recaptcha');
        }
        
        $data['cpf_or_registration'] = str_replace(['-', '.'], '', $data['cpf_or_registration']);
        
        $user = User::where('cpf', $data['cpf_or_registration'])
            ->orWhere('registration', $data['cpf_or_registration'])
            ->orWhere('registration_for_login', $data['cpf_or_registration'])->first();

        if (!$user) {
            session()->flash('cpf_or_registration', 'Registro não encontrado');
            return redirect()->route('site.page_login');
        }

        if (Hash::check($data['password'], $user->password)) {
            Auth::attempt(['cpf' => $user->cpf, 'password' => $data['password']]);
            $req->session()->forget('temporary_user');

            if (isset($data['old_route'])) {
                return redirect($data['old_route']);
            }

            if (\Auth::user()->definitive_password == null) {
                if (HelpAdmin::IsUserRecipient()) {
                    return redirect()->route('site.definitive_password');
                } else {
                    return redirect()->route('adm.definitive_password');
                }
            }

            if (HelpAdmin::IsUserRecipient()) {
                return redirect()->route('site.recipient');
            } else {
                return redirect()->route('site.index');
            }
        } else {
            session()->flash('password', 'Senha incorreta');
            return redirect()->route('site.page_login');
        }
    }
    function logout(Request $req)
    {
        $req->session()->forget('temporary_user');
        Auth::logout();
        
        return redirect()->route('site.index');
    }

    function resetPassword()
    {
        // return view('Site.auth.reset.reset');
    }
    function validatePersonalData(reqValidatePersonalData $req) {
        // $data = $req->all();
        // $data['date_of_birth'] = str_replace('/', '-', $data['date_of_birth']);;
        // $data['date_of_birth'] = date_create($data['date_of_birth'])->format('Y-m-d');
        // $data['cpf'] = str_replace(['-', '.'], '', $data['cpf']);
        // $data['registration'] = str_replace(['-', '.'], '', $data['registration']);

        // if (!HelpSite::verifyRecaptcha($data['g-recaptcha-response'])) {
        //     return redirect()->route('site.recaptcha');
        // }

        // $user = User::where('cpf', $data['cpf'])
        //     ->where('registration', $data['registration'])
        //     ->orWhere('registration_for_login', $data['registration'])
        //     ->where('date_of_birth', $data['date_of_birth'])->first();

        // if ($user) {
        //     if (!$user->remember_token) {
        //         $data['remember_token'] = Str::random(60);
        //         $user->update($data);
        //     }
        
        //     return redirect()->route('site.new_password', $user->remember_token);
        // } else {
        //     session()->flash('info', 'Usuário não encontrado');
        //     return redirect()->route('site.reset_password');
        // }
    }
    function newPassword($remember_token) {
        // $user = User::where('remember_token', $remember_token)->first();

        // return view('Site.auth.reset.new_password', compact('user'));
    }
    function saveNewPassword(reqSaveNewPassword $req) {
        // $data = $req->all();

        // $user = User::where('remember_token', $data['remember_token'])->first();
        // $data['password'] = bcrypt($data['password']);
        // $data['definitive_password'] = date(now());

        // $user->update($data);

        // Auth::attempt(['cpf' => $user->cpf, 'password' => $data['password_confirmation']]);
        // if (HelpAdmin::IsUserRecipient()) {
        //     return redirect()->route('site.recipient');
        // } else {
        //     return redirect()->route('site.index');
        // }
    }

    function definitivePassword() {
        return view('Site.auth.definitive_password');
    }
    function definitivePasswordSave(reqDefinitivePassword $req) {
        $data = $req->all();
        $user = \Auth::user();

        $data['password'] = bcrypt($data['password']);
        $data['definitive_password'] = date(now());

        $user->update($data);
        
        if (HelpAdmin::IsUserRecipient()) {
            return redirect()->route('site.recipient');
        } else {
            return redirect()->route('site.index');
        }
    }
}