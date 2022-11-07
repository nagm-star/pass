<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Session;
use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class SettingController extends Controller
{
    public function index()
    {
        if (! Gate::allows('is_admin')) {
            abort(403);
        }
        return view('backend.settings.index')->with('settings', Setting::first());
    }

    public function update(UpdateSettingRequest $request, $id)
    {
        if (! Gate::allows('is_admin')) {
            abort(403);
        }
        // dd($request->all());
        $setting = Setting::findOrFail($id);
    

        $setting->name = request()->name;
        $setting->facebook = request()->facebook;
        $setting->key = request()->key;
        $setting->youtube = request()->youtube;
        $setting->address = request()->address;
        $setting->twitter = request()->twitter;
        $setting->description = request()->description;
        $setting->email = request()->email;
        $setting->contact_number = request()->contact_number;

        if($request->hasFile('image')) {

            $path = parse_url($setting->image);

           // dd($request->image);

            File::delete(public_path().'/uploads/', $setting->image); 


            $image       = $request->file('image');
            //$filename = time().'.'.$request->file->extension();  
    
            $filename    = $image->getClientOriginalName();
    
            //Fullsize
            $image->move(public_path().'/uploads/',$filename);
           

           $setting->image = $filename;
        }
        $setting->save();

        Session::flash('success', 'Update Successfully');

        return redirect()->back();
    }
}
