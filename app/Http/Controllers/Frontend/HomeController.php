<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Achievement; 
use App\Models\Blog;
use App\Models\Destination;  
use App\Models\Partner;
 
use App\Models\StudyAbroad;
use App\Models\Team;

class HomeController extends Controller
{
    public function index()
    {
 
        $study_abroads = Destination::orderBy('id', 'DESC')->take(3)->get();
        $partners = Partner::orderBy('id', 'DESC')->take(3)->get();
        $destinations = Destination::orderBy('id', 'DESC')->where('status',1)->pluck('country', 'id');
        $achievements = Achievement::orderBy('id', 'DESC')->take(3)->get(); 
        return view('frontend.index', compact( 'study_abroads', 'partners', 'destinations', 'achievements'));
    }

    public function destination($country)
    {
       try{
        $destinations = Destination::orderBy('id', 'DESC')->where('status',1)->pluck('country', 'id');
        $data = Destination::where('country', $country)->first();
        if($data == null){
            return redirect()->back()->with('error', 'Something went wrong');
        }
        return view('frontend.pages.destination', compact('destinations', 'data'));
       }catch(\Exception $e){
        return redirect()->back()->with('error', 'Something went wrong');
       }
    }

    public function blogs()
    {
        $destinations = Destination::orderBy('id', 'DESC')->where('status',1)->pluck('country', 'id');
        $datas = Blog::orderBy('id', 'DESC')->where('status',1)->paginate(6);
        return view('frontend.blog.index', compact('destinations', 'datas'));
    }

    public function blog($slug)
    {
        $destinations = Destination::orderBy('id', 'DESC')->where('status',1)->pluck('country', 'id'); 
        $data = Blog::orderBy('id', 'DESC')->where('status',1)->where('slug',$slug )->first();
        return view('frontend.blog.details', compact('destinations','data'));
    }
 
    public function eb3(){ 
        $destinations = Destination::orderBy('id', 'DESC')->where('status',1)->pluck('country', 'id');
        return view('frontend.eb3.index', compact('destinations'));
    }

    public function contctUs(){ 
        $destinations = Destination::orderBy('id', 'DESC')->where('status',1)->pluck('country', 'id');
        return view('frontend.contact.index', compact('destinations'));
    }
    public function whoWeAre(){
        $teams  = Team::orderBy('id', 'DESC')->where('status',1)->get();
        $destinations = Destination::orderBy('id', 'DESC')->where('status',1)->pluck('country', 'id');
        return view('frontend.whoWeAre.index', compact('destinations','teams'));
    }

    public function visaProcessing(){
        $destinations = Destination::orderBy('id', 'DESC')->where('status',1)->pluck('country', 'id');
        return view('frontend.visaProcessing.index', compact('destinations'));
    }
}
