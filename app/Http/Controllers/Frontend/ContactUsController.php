<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request)
    { 
        $data = $request->all();
        Contact::create($data); 
        return response()->json(['success' => 'Thanks for messaging us, We will contact you shortly!']);
    }
}
