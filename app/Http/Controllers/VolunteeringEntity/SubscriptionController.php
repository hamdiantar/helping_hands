<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Payment;
use App\Models\Subscription;
use App\Traits\LoggerError;
use Exception;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    use LoggerError;

    public function index()
    {
        $volEntity = getAuthVolEntity();
        return view('volunteering-entity.subscription.index', [
            'volEntity' => $volEntity
        ]);
    }


    public function create()
    {
        $packages = Package::all();
        return view('volunteering-entity.subscription.create', [
            'packages' => $packages
        ]);
    }

    public function store(Request $request)
    {

        try {
            date_default_timezone_set('Asia/Riyadh');
            $data = $request->all();
            $package = Package::find($request->PACKAGE_ID);
            $data['VOL_ENTITY_ID'] = getAuthVolEntity()->VOL_ENTITY_ID;
            $data['SUB_DATE'] = now();
            $subscription = Subscription::create($data);
            Payment::create([
                "PMT_DESCRPTION" => $package->PACKAGE_PRICE. ' | '. $package->PACKAGE_DURATION,
                "PMT_AMOUNT" => $package->PACKAGE_PRICE,
                "SUB_ID" => $subscription->SUB_ID,
                "PMT_DATE" => now(),
            ]);
            notify()->smiley('success', 'Subscription has been created successfully');
            return redirect()->route('volunteering-entity.subscription.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    public function paymentDetails(int $subID)
    {
        $sub = Subscription::with('payment')->find($subID);
        return view('volunteering-entity.subscription.payment_details', [
            'sub' => $sub
        ]);
    }
}
