<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreNewServiceRequest;
use App\Http\Requests\UpdateserviceRequest;
use Exception;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                if (! Gate::allows('is_admin')) {
            abort(403);
        }
        return view('backend.services.index')
             ->with('services', Service::all());
    }

    public function sudan()
    {
                if (! Gate::allows('is_admin')) {
            abort(403);
        }
        return view('backend.services.index')
             ->with('services', Service::where('category', 1)->get());
    }

    public function foreign()
    {
                if (! Gate::allows('is_admin')) {
            abort(403);
        }
        return view('backend.services.index')
              ->with('services', Service::where('category', 0)->get());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                if (! Gate::allows('is_admin')) {
            abort(403);
        }
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
                if (! Gate::allows('is_admin')) {
            abort(403);
        }

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
                if (! Gate::allows('is_admin')) {
            abort(403);
        }
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
                if (! Gate::allows('is_admin')) {
            abort(403);
        }
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
        // dd($request->all());
       if (! Gate::allows('is_admin')) {
            abort(403);
        }
        try{
    
            $service->title = $request->input('title');
            $service->body = $request->input('body');
            $service->category = $request->input('category');
            if($request->title) {
                $service->slug = make_slug($request->input('title'));
            }
/*             if($request->category) {
                $service->category = $request->input('category');
            } */
            

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
                if (! Gate::allows('is_admin')) {
            abort(403);
        }
        try{
            $service->delete();
            
            session()->flash('success', 'Deleted successfully');
    
            return redirect(route('admin.services.index'));
            
        } catch (Exception $e) {

            return back()->withError($e->getMessage());
        }
    }
}
