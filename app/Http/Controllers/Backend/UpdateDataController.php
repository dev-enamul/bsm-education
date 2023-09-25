<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebsiteData;
use Illuminate\Http\Request;

class UpdateDataController extends Controller
{
    public function getModalForm(Request $request)
    {
        $id = $request->id;
        $type = $request->type;
        $size = $request->size;
        $data = WebsiteData::where('id', $id)->first();
        $view =  view('frontend.modal.get_form', compact('data','type','size'))->render();
        return response()->json(['html'=>$view]);
        
    }

    public function updateData(Request $request)
    { 
        
        $id = $request->id; 
        $data = WebsiteData::where('id', $id)->first();
        if($request ->hasFile('val')){
            $request->validate([
                'val' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]); 
            $file = $request->file('val');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->val->move(public_path('uploads'), $filename);
            $filename = 'uploads/'.$filename;
            $data->val = $filename;
        }else{
            $request->validate([
                'val' => 'required',
            ]);
            $data->val = $request->val;
           
        }

       
 
        $data->save(); 
        return redirect()->back()->with('success', 'Data Updated Successfully');
    }
}
