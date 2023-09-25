<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\RegisterSurvey; 
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $datas = User::orderBy('id', 'DESC')->where('role',0)->get();
        return view('backend.user.index',compact('datas'));
    }

    public function survey($id){
        $data = User::findOrFail($id);
        return view('backend.user.survey',compact('data'));
    }

    public function survey_result(){ 
        $data = User::findOrFail(Auth::user()->id);
        return view('backend.user.survey_result',compact('data'));
    }

    public function registerPage(): View
    {
        $destinations = Destination::orderBy('id', 'DESC')->where('status',1)->pluck('country', 'id');
        return view("frontend.user.register", compact("destinations"));
    }
    public function registerSubmit(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:50', 
            'address'   => 'required|string|max:100',
            'country'   => 'required|string|max:50',
            'phone'     => 'required|string|max:50',
            'email'     => 'required|email|unique:users',
            'password'  => 'required',
            'confirm_password' => 'required|same:password'
        ]); 

        $password = Hash::make($request->password);
        $data = $request->all();
        $data['password'] = $password;
        // $user = User::create($data);

        Session::put('user', $data);
        // return Session::get('user');
        $destinations = Destination::orderBy('id', 'DESC')->where('status',1)->pluck('country', 'id');
        return view("frontend.user.register_survey", compact('destinations'));

        // return back()->with("success", "Register Successfully");
    }

    public function registerSurveyStore(Request $request)
    {
        try{
            DB::beginTransaction();
            $user_information = Session::get('user');
            $user = User::create($user_information);
            $data = $request->all();
            $data['user_id'] = $user->id;
            RegisterSurvey::create($data);

            DB::commit();
          	Session::forget('user');
            return redirect()->route('user.register')->with("success", "Register Successfully");

        }catch(Exception $e){
            DB::rollBack();
            return redirect()->route('user.register')->with("success", "Register Failed, Please Try Again");
            
        }
        
    }
}
