<?php

namespace App\Http\Controllers\admin;

use App\Models\Sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Sliders::paginate(10);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Slider $slider)
    {
        $input = $request->all();
        $input['image'] = $this->FileUpload($request, 'image');

        // dd($input);
        $slider->create($input);
        return redirect()->route('admin.sliders.index')->with('message', 'Created Successfully');
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
    public function edit(Slider $slider)
    {
       return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $old_image = $slider->image;
        // dd($old_image);
        $input = $request->all();
        $image = $this->fileUpload($request, 'image');
        if ($image) {
            $this->removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        $slider->update($input);
        return redirect()->route('admin.sliders.index')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Slider $slider)
    {
        $this->removeFile($slider->image);
        $slider->delete();
        return redirect()->route('admin.sliders.index')->with('message', 'Delete Successfully');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/assets/admin/img/slider';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/assets/admin/img/slider' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}