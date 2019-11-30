<?php

namespace Ghaff\Feedback\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function index()
    {
        return view('feedback::feedback');
    }

    public function send(Request $request) 
    {
        return $request->all();
    }
}
