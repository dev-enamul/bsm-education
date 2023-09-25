<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Exception;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Destination::latest()->get();
        return view('backend.destination.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view ('backend.destination.create');
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
            'country'=>'required',  
        ]);

       try{ 
        $input = $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move(public_path('uploads/destinations'),$fileName);
            $input['image'] = 'uploads/destinations/'.$fileName;
        } 
        
        Destination::create($input);
        return redirect()->route('destination.index')->with('success','Destination created successfully.');
       }catch(Exception $e){
        return redirect()->route('destination.index')->with('error',$e->getMessage());
       }
    }

 
    public function edit($id)
    {
        $data = Destination::find($id);
        return view('backend.destination.edit',compact('data'));
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
            'country'=>'required',  
        ]);

        try{ 
            $input = $request->all();
            if($request->hasFile('image')){
                $file = $request->file('image');
                $fileName = time().'-'.$file->getClientOriginalName();
                $file->move(public_path('uploads/destinations'),$fileName);
                $input['image'] = 'uploads/destinations/'.$fileName;
            } 
            
            $data =  Destination::find($id); 
            $data->update($input);
            return redirect()->route('destination.index')->with('success','Destination updated successfully.');
           }catch(Exception $e){
            return redirect()->route('destination.index')->with('error',$e->getMessage());
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
        try{
            $data = Destination::find($id);
            $data->delete();
            return redirect()->route('destination.index')->with('success','Destination deleted successfully.');
        }catch(Exception $e){
            return redirect()->route('destination.index')->with('error',$e->getMessage());
        }

    }
}
