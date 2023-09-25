<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
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
            'heading'       => 'required|string|max:100',
            'description'   => 'required|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif', 
            'details_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'tags'          => 'nullable',
        ]);

        $blog = new Blog(); 
        if($request ->hasFile('image')){ 
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->image->move(public_path('uploads/blogs'), $filename);
            $filename = 'uploads/blogs/'.$filename;
            $blog->image = $filename;
        }
        if($request ->hasFile('details_image')){ 
            $file = $request->file('details_image');
            $filename = time().'2.'.$file->getClientOriginalExtension();
            $request->details_image->move(public_path('uploads/blogs'), $filename);
            $filename = 'uploads/blogs/'.$filename;
            $blog->details_image = $filename;
        } 

        $blog->heading = $request->heading;
        $blog->slug = strtolower(str_replace(' ', '-', $request->heading));
        $blog->description = $request->description; 
        $blog->tags = $request->tags; 
        $blog->status = $request->status;
        $blog->save();
        return redirect()->route('blog.index')->with('success', 'Blog Added Successfully');

 
    }

 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            return view('backend.blog.edit', compact('blog'));
        } else {
            return back()->with('error', 'Something Went Wrong!');
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
            'heading'       => 'required|string|max:100',
            'description'   => 'required|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif', 
            'details_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'tags'          => 'nullable',
        ]);

        $blog = Blog::find($id); 
        if($request ->hasFile('image')){ 
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->image->move(public_path('uploads/blogs'), $filename);
            $filename = 'uploads/blogs/'.$filename;
            $blog->image = $filename;
        }
        if($request ->hasFile('details_image')){ 
            $file = $request->file('details_image');
            $filename = time().'2.'.$file->getClientOriginalExtension();
            $request->details_image->move(public_path('uploads/blogs'), $filename);
            $filename = 'uploads/blogs/'.$filename;
            $blog->details_image = $filename;
        } 

        $blog->heading = $request->heading;
        $blog->slug = strtolower(str_replace(' ', '-', $request->heading));
        $blog->description = $request->description; 
        $blog->tags = $request->tags; 
        $blog->status = $request->status;
        $blog->save();
        return redirect()->route('blog.index')->with('success', 'Blog Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            $blog->delete();
            return redirect()->route('blog.index')->with('success', 'Blog Updated Successfully');
        } else {
            return back()->with('error', 'Something Went Wrong!');
        }
    }
}
