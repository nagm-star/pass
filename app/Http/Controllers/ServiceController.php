<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreNewServiceRequest;
use App\Http\Requests\UpdateserviceRequest;
use Exception;
use Session;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.services.index')
             ->with('services', Service::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewServiceRequest $request)
    {
        // dd($request->all());
/*         $request->validate([
            'title' => ['required', 'string', 'max:255'],
            // 'description' => ['required', 'string', 'max:255'],
        ]);
  */

       try{
        $service = new service();

         $service->title = $request->input('title');
         $service->body = $request->input('body');
         $service->slug = make_slug($request->input('title'));
         $service->category = $request->category;

         $service->save();
        
        Session::flash('success', 'Added successfully');
    
        return redirect(route('admin.services.index'));
        
                
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        return view('backend.services.create',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateserviceRequest  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateserviceRequest $request, service $service)
    {
        try{
    
            $service->title = $request->input('title');
            $service->body = $request->input('body');
            if($request->title) {
                $service->slug = make_slug($request->input('title'));
            }
            if($request->category) {
                $service->category = $request->category;
            }
            

            $service->save();
    
            Session::flash('success', 'Updated Successfully');
        
            return redirect(route('admin.services.index'));
             
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        try{
            $service->delete();
            
            session()->flash('success', 'Deleted successfully');
    
            return redirect(route('admin.services.index'));
            
        } catch (Exception $e) {

            return back()->withError($e->getMessage());
        }
    }
}
