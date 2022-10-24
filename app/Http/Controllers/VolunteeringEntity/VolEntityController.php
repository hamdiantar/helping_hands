<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolEntity\VolEntityRegisterRequest;
use App\Models\VolEntity;
use App\Traits\LoggerError;
use App\Traits\UploadFile;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VolEntityController extends Controller
{
    use LoggerError, UploadFile;

    private $view = 'volunteering-entity.';

    public function dashboard()
    {
        return view($this->view.'home');
    }

    public function showLoginForm()
    {
        return view($this->view . 'login');
    }

    public function register(VolEntityRegisterRequest $request): RedirectResponse
    {
        try {
            $data = $request->all();
            $data['VOL_ENTITY_LOGO'] = $this->upload($request->VOL_ENTITY_LOGO);
            VolEntity::create($data);
            return back()->with('success', 'you have register successfully, admin will review your request');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            return back()->with('error', 'something went wrong');
        }
    }

    public function login(Request $request): string
    {
        $request->validate([
            'VOL_ENTITY_EMAIL' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('VOL_ENTITY_EMAIL', 'password');
        if ($this->guard()->attempt($credentials)) {
            return redirect()->intended('/volunteering-entity');
        }
        return back()->with('error', 'Login details are not valid');
    }

    public function update(Request $request): RedirectResponse
    {
        try {
            $user = getAuthVolEntity();
            $user->update($request->all());
            notify()->smiley('success', 'You have update your profile successfully');
            return back();

        } catch (Exception $exception) {
            $this->logErrors($exception);
            return back()->with('error', 'something went wrong');
        }
    }

    public function signOut()
    {
        Session::flush();
        Auth::guard('volEntity')->logout();
        return Redirect('/');
    }

    protected function guard()
    {
        return Auth::guard('volEntity');
    }
}
