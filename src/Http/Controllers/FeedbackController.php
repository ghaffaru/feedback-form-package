<?php

namespace Ghaff\Feedback\Http\Controllers;

use App\Http\Controllers\Controller;
use Ghaff\Feedback\Mail\FeedbackMailable;
use Ghaff\Feedback\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class FeedbackController extends Controller
{
    //
    public function index()
    {
        return view('feedback::feedback');
    }

    public function send(Request $request) 
    {
        Mail::to(config('feedback.send_email_to'))->queue(
            new FeedbackMailable($request->subject, $request->message, $request->name));
        Feedback::create($request->all());

        return redirect(route('feedback'));
    }
}
