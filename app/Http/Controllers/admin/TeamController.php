<?php

namespace App\Http\Controllers\admin;

use File;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams=Team::paginate(1);
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $input=$request->all();
        // dd($input);
        $input['image']=$this->fileUpload($request,'image');
        Team::create($input);
        return redirect()->route('teams.index')->with('success','Successfully Created');
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
    public function edit(Team $team)
    {
        return view('admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request,Team $team)
    {
    $old_image = $team->image;
        // dd($old_image);
        $input = $request->all();
        $image = $this->fileUpload($request, 'image');
        if ($image) {
            $this->removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        $team->update($input);
        return redirect()->route('teams.index')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $this->removeFile($team->icon);
        $team->delete();
        return redirect()->route('teams.index')->with('success','Deleted Successfuylly');
    }
   public function fileUpload($request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
        // if ($image = $request->$name) {
            $destinationPath = public_path() . '/assets/admin/img/team';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
            // dd($image);
        }
        return $imageName;
    }
    public function removeFile($file)
    {
        $path = public_path() . '/assets/admin/img/team/' . $file;
        //  dd($path);
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}