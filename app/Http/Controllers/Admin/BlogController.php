<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blogs.list')->with(compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs',
            'main_image' => 'required',
            'description' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'status' => 'required',
            'conclusion' => 'required',
        ]);

        $blog = new blog;
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->conclusion = $request->conclusion;
        if ($request->hasFile('main_image')) {
            $request->validate([
                'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('main_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('main_image')->store('blogs', 'public');
            $blog->main_image = asset('storage/'.$image_path);
        }

        if ($request->hasFile('image1')) {
            $request->validate([
                'image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file1= $request->file('image1');
            $filename1= date('YmdHi').$file1->getClientOriginalName();
            $image1_path = $request->file('image1')->store('blogs', 'public');
            $blog->image1 = asset('storage/'.$image1_path);
        }

        if ($request->hasFile('image2')) {
            $request->validate([
                'image2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file2= $request->file('image2');
            $filename2= date('YmdHi').$file2->getClientOriginalName();
            $image2_path = $request->file('image2')->store('blogs', 'public');
            $blog->image2 = asset('storage/'.$image2_path);
        }
        $blog->status = $request->status;
        $blog->save();
        return redirect()->route('blogs.index')->with('message', 'Blog has been added successfully');
    }

    public function changeBlogStatus(Request $request)
    {
        
        $blog_status = Blog::where('id', $request->blog_id)->first();
        $blog_status->status = $request->status;
        $blog_status->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit')->with(compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        //
    }

    public function blogUpdate(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'status' => 'required',
            'conclusion' => 'required',
        ]);

        $blog = Blog::findOrFail($request->blog_id);
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->conclusion = $request->conclusion;
        if ($request->hasFile('main_image')) {
            $request->validate([
                'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('main_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('main_image')->store('blogs', 'public');
            $blog->main_image = asset('storage/'.$image_path);
        }

        if ($request->hasFile('image1')) {
            $request->validate([
                'image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file1= $request->file('image1');
            $filename1= date('YmdHi').$file1->getClientOriginalName();
            $image1_path = $request->file('image1')->store('blogs', 'public');
            $blog->image1 = asset('storage/'.$image1_path);
        }

        if ($request->hasFile('image2')) {
            $request->validate([
                'image2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file2= $request->file('image2');
            $filename2= date('YmdHi').$file2->getClientOriginalName();
            $image2_path = $request->file('image2')->store('blogs', 'public');
            $blog->image2 = asset('storage/'.$image2_path);
        }
        $blog->status = $request->status;
        $blog->update();

        return redirect()->route('blogs.index')->with('message', 'Blog has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteBlog($id)
    {
        Blog::findOrFail($id)->delete();
        return back()->with('error', 'Blog has been deleted!');
    }
 
}
