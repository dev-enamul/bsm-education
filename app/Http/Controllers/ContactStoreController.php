<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class ContactStoreController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->except('store');
    }
    public function index()
    {
        $messages = Contact::all();
        return view('backend.contact_message.index', compact('messages'));
    }
    public function destroy(Request $request, $id)
    {
        Contact::find($id)->delete();
        return back()->withSuccess('Message Deleted Successfully');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Contact::create($data);
        return response()->json([
            'message' => "Thank You For Your Contact",
        ], 200);
    }
}
