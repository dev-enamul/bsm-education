<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Partner::orderBy('id','DESC')->get();
        return view('backend.partner.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countrys = Destination::where('status', 1)->get();
        return view('backend.partner.create',compact('countrys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'destination_id' => 'required',
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);

       try{
        $input = $request->all(); 
     
        if($request ->hasFile('image')){ 
            $file = $request->file('image');
            $filename = time().'2.'.$file->getClientOriginalExtension();
            $request->image->move(public_path('uploads/institutes'), $filename);
            $filename = 'uploads/institutes/'.$filename; 
            $input['image'] = $filename; 
        }  
            Partner::create($input);
            return redirect()->route('partners.index')->with('success', 'Partner Institute Created Successfully');  
       }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $data = Partner::find($id);
            $countrys = Destination::where('status', 1)->get(); 
            return view('backend.partner.edit', compact('data','countrys'));
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'destination_id' => 'required',
            'name' => 'required'
        ]);

       try{
        $input = $request->all(); 
     
        if($request ->hasFile('image')){ 
            $file = $request->file('image');
            $filename = time().'2.'.$file->getClientOriginalExtension();
            $request->image->move(public_path('uploads/institutes'), $filename);
            $filename = 'uploads/institutes/'.$filename; 
            $input['image'] = $filename; 
        }  
            Partner::find($id)->update($input); 
            return redirect()->route('partners.index')->with('success', 'Partner Institute Updated Successfully');
       }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Partner::find($id);
        if ($status) {
            Partner::find($id)->delete();
            return redirect()->route('partners.index')->with('success', 'Partner Institute Deleted Successfully');
        } else {
            return back()->with('error', 'Something Went Wrong!');
        }
    }
}
