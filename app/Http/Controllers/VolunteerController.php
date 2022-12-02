<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Support\Facades\Session;
use Exception;
use App\Models\User;
use App\Traits\LoggerError;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Website\VolunteerRegisterRequest;

class VolunteerController extends Controller
{
    use LoggerError;

    private $view = 'website.volunteer.';

    public function profile(Request $request)
    {
        $volunteer = getAuthVolunteer();
        if ($request->filled('success')) {
            return view($this->view . 'profile', compact('volunteer'));
        }
        return view($this->view . 'final', compact('volunteer'));
    }
    public function showRegisterForm()
    {
        return view($this->view . 'register');
    }

    public function register(VolunteerRegisterRequest $request): RedirectResponse
    {
        try {
             User::create($request->all());
             return back()->with('success', 'you have register successfully, you can login now');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            return back()->with('error', 'something went wrong');
        }
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'VOL_EMAIL' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('VOL_EMAIL', 'password');
        if (Auth::guard('volunteer')->attempt($credentials)) {
            return redirect()->intended();
        }
        return back()->with( 'errorLogin','Login details are not valid');
    }

    public function update(VolunteerRegisterRequest $request): RedirectResponse
    {
        try {
            $user = getAuthVolunteer();
            $user->update($request->all());
            return back()->with('success', 'you have update your profile successfully');

        } catch (Exception $exception) {
            $this->logErrors($exception);
            return back()->with('error', 'something went wrong');
        }
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return back()->with( 'errorLogin','Login details are not valid');
    }

    public function signOut() {
        Session::flush();
        Auth::guard('volunteer')->logout();
        return Redirect('/');
    }

    public function verification(Request $request)
    {
        if ($request->filled('id')) {
            $cert = Certification::find($request->id);
            if ($cert) {
                return view('website.verification', compact('cert'));
            }
        }
       return view('website.verification');
    }
}
