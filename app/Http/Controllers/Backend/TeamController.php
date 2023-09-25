<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $datas = Team::orderBy('id', 'DESC')->get();
        return view('backend.team.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([ 
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $input = $request->all();
        if($request ->hasFile('image')){ 
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->image->move(public_path('uploads/team'), $filename);
            $filename = 'uploads/team/'.$filename; 
            $input['image'] = $filename; 
        }  
            Team::create($input);
            return redirect()->route('team.index')->with('success', 'Team Member Created Successfully');
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
            
            $data = Team::find($id);
            return view('backend.team.edit', compact('data'));
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
        $input = $request->all();
        if($request ->hasFile('image')){ 
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->image->move(public_path('uploads/team'), $filename);
            $filename = 'uploads/team/'.$filename; 
            $input['image'] = $filename; 
        }  
            Team::find($id)->update($input);
            return redirect()->route('team.index')->with('success', 'Team Member Updated Successfully');                         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        Team::find($id)->delete();
        return redirect()->route('team.index')->with('success', 'Team Member Deleted Successfully');
    }
}
