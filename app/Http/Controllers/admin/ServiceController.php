<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services=Service::paginate(10);
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $input=$request->all();
        $input['slug']=Str::slug($request->title);
        $input['icon']=$this->FileUpload($request,'icon');
        Service::create($input);
        return redirect()->route('services.index')->with('success','Created Successfully');
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
    public function edit(Service $service)
    {
        return view('admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Service $service,UpdateServiceRequest $request)
    {
        $old_image = $service->icon;
        // dd($old_image);
        $input = $request->all();
        $input['slug']=Str::slug($request->title);
        $icon = $this->fileUpload($request, 'icon');
        if ($icon) {
            $this->removeFile($old_image);
            $input['icon'] = $icon;
        } else {
            unset($input['icon']);
        }
        $service->update($input);
        return redirect()->route('services.index')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
         $this->removeFile($service->icon);
        $service->delete();
        return redirect()->route('services.index')->with('success','Deleted Successfuylly');
    }
   public function FileUpload($request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
        // if ($image = $request->$name) {
            $destinationPath = public_path() . '/assets/admin/img/service';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/assets/admin/img/service/' . $file;
        //  dd($path);
        if (File::exists($path)) {
            File::delete($path);
        }
    }

}