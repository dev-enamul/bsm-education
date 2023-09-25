<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Destination;
use App\Models\Feature;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_user = User::where('role',0)->count();
        $total_destination = Destination::count();  
        $total_contact_message = Contact::count();
        $total_partner = Partner::count();
        $data = User::findOrFail(Auth::user()->id);
        return view('backend.index',compact('total_user','total_destination','total_contact_message','total_partner','data'));  
    }
}
