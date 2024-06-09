<?php

namespace App\Http\Controllers\admin;

use File;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts=About::paginate(10);
        return view('admin.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        $input=$request->toArray();

        $input['image']=$this->FileUpload($request,'image');
        About::create($input);
        return redirect()->route('abouts.index')->with('success','Created Successfully');

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
    public function edit(About $about)
    {
        return view('admin.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $old_image = $about->image;
        // dd($old_image);
        $input = $request->all();
        $image = $this->fileUpload($request, 'image');
        if ($image) {
            $this->removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        $about->update($input);
        return redirect()->route('abouts.index')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $this->removeFile($about->image);
        $about->delete();
         return redirect()->route('abouts.index')->with('success', 'Deleted Successfully');
    }

   public function FileUpload($request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
        // if ($image = $request->$name) {
            $destinationPath = public_path() . '/assets/admin/img/about';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }
    public function removeFile($file)
    {
        $path = public_path() . '/assets/admin/img/about/' . $file;
        //  dd($path);
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}