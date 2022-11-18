<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Traits\LoggerError;
use Exception;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    use LoggerError;

    public function addReview(Request $request)
    {
        $data = $request->all();
        $data['VOL_ID'] = getAuthVolunteer()->VOL_ID;
        $data['FEED_DATE'] = now();
        try {
            Review::create($data);
            return redirect()->back()->with('success', 'thank you for your review');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}
