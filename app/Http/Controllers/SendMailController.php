<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;

class NameController extends Controller {
    public function mailSend(Request $request) {
        $details = [
            'products' => $request->products
        ];
    }
}