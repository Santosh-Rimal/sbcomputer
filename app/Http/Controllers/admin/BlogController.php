<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $blogs=Blog::paginate(10);
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $input=$request->all();
        $input['image']=$this->fileUpload($request,'image');
        $input['slug']=Str::slug($request->title);
        Blog::create($input);
        return redirect()->route('blogs.index')->with('success','Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.blog.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function fileUpload($request,$name)
    {
        $image='';
        if($image=$request->file($name)){
            $path=public_path().'/assets/admin/img/blog';
            $imageName=date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($path,$imageName);
            $image=$imageName;
        }
        return $imageName;
    }
}