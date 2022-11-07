<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Session;
use Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        $projects = Project::orderBy('created_at', 'DESC')->get();
        return view('backend.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        return view('backend.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        // dd($request->all());
        if ($request->hasFile('image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image

            $path = $request->file('image')->move(public_path('/uploads/projects'), $fileNameToStore);
        }
        $project = new project();

        $project->title = $request->input('title');
        $project->body = $request->input('body');
        $project->slug = make_slug($request->input('title'));
        $project->user_id = auth()->user()->id;

        $project->image = $fileNameToStore;
        $project->save();

        Session::flash('success', 'Added successfully');

        return redirect(route('admin.projects.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        return view('backend.projects.view', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        return view('backend.projects.create', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        // dd($request->all());
        //TODO: check validation and status button

        if ($request->hasFile('image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image

            $path = $request->file('image')->move(public_path('/uploads/projects'), $fileNameToStore);
        }


        $project->body = $request->input('body');
        $project->user_id = auth()->user()->id;

        if ($request->title) {
            $project->title = $request->input('title');
            $project->slug = make_slug($request->input('title'));
        }

        if ($request->hasFile('image')) {


            $path = parse_url($project->image);

            File::delete(public_path($path['path']));

            $project->image = $fileNameToStore;
        }
        $project->save();

        Session::flash('success', 'Updated Successfully');

        // redirect user
        return redirect(route('admin.projects.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        try {
            $project->delete();

            session()->flash('success', 'Deleted successfully');

            return redirect(route('admin.projects.index'));
        } catch (Exception $e) {

            return back()->withError($e->getMessage());
        }
    }
}
