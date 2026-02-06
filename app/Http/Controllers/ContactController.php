<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        // Normally save in DB ya send email
        return "Form submitted! Name: $name, Email: $email";
    }
}
