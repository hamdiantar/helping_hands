<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolEntity\VolEntityRegisterRequest;
use App\Http\Requests\VolEntity\VolEntityUpdateRequest;
use App\Models\Opportunity;
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
        $items = Opportunity::withCount('applicants')->where('VOL_ENTITY_ID', getAuthVolEntity()->VOL_ENTITY_ID)->get();
        $labels = $items->pluck('OPP_NAME');
        $datasets = $items->pluck('applicants_count');
        return view($this->view.'home',[
            "labels" => $labels,
            "datasets" => $datasets,
        ]);
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
            return back()->with('success', 'you have register successfully,we will inbox you in your E-Mail After Accepting Your Request');
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
        $vol = VolEntity::where('VOL_ENTITY_EMAIL', $request->VOL_ENTITY_EMAIL)->first();
        if ($vol && ($vol->VOL_ENTITY_STATUS == 0 || $vol->VOL_ENTITY_STATUS == 2)) {
            notify()->smiley('error', 'please until admin accept your joining request');
            return back();
        }
        $credentials = $request->only('VOL_ENTITY_EMAIL', 'password');
        if ($this->guard()->attempt($credentials)) {
            return redirect()->intended('/volunteering-entity');
        }
        notify()->smiley('error', 'Login details are not valid');
        return back();
    }

    public function update(VolEntityUpdateRequest $request): RedirectResponse
    {
        try {
            $user = getAuthVolEntity();
            $data = $request->all();
            if ($request->hasFile('VOL_ENTITY_LOGO')) {
                $data['VOL_ENTITY_LOGO'] = $this->upload($request->VOL_ENTITY_LOGO);
            }
            $user->update($data);
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
