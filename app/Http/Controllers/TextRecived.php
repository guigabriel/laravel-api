<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextReceived extends Controller
{
    public function text(Request $request, String $textUser)
    {
        return response()->json([
            'valor' => $textUser
        ]);
    }
}
