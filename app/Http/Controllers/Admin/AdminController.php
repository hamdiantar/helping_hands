<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateAdminRequest;
use App\Models\VolEntity;
use App\Traits\LoggerError;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    use LoggerError;

    private $view = 'admin.';

    public function dashboard()
    {
        $entities = VolEntity::withCount('opps')->where('VOL_ENTITY_STATUS', 1)->get();
        $labels = $entities->pluck('VOL_ENTITY_NAME');
        $datasets = $entities->pluck('opps_count');
        return view($this->view.'home', compact('labels', 'datasets'));
    }

    public function showLoginForm()
    {
        return view($this->view . 'login');
    }

    public function login(Request $request): string
    {
        $request->validate([
            'ADMIN_EMAIL' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('ADMIN_EMAIL', 'password');
        if ($this->guard()->attempt($credentials)) {
            return redirect()->intended('/admin');
        }
        return back()->with('error', 'Login details are not valid');
    }

    public function update(UpdateAdminRequest $request): RedirectResponse
    {
        try {
            $user = getAuthAdmin();
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
        Auth::guard('admin')->logout();
        return Redirect('/');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
