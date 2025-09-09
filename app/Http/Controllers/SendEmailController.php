<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestOfferMail;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'first_name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:50',
            'message' => 'required|string',
        ]);

        Mail::to('vrerabek@gmail.com')->send(new RequestOfferMail($data));

        return response()->json(['status' => 'success']);
    }
}
