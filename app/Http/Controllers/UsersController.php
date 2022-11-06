<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.users.index')->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', ],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
 

       try{
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'password' => Hash::make('password'),
        ]);

        if($request->has('role')){
            $user->role = $request->input('role');
            $user->save();
        }
        
        Session::flash('success', 'Added successfully');
    
        return redirect(route('admin.users.index'));
        
                
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.users.create', compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['sometimes', 'string', 'max:255'],
            'email' => ['sometimes', 'string', 'email', 'max:255'],
        ]);

        try{

        $user = User::findorFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if($request->role) {
             $user->role = $request->input('role');
           }
        
        $user->save();

        Session::flash('success', 'Updated Successfully');
    
        return redirect(route('admin.users.index'));
         
    } catch (Exception $e) {
        return back()->withError($e->getMessage());
    }
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        Session::flash('success', 'Deleted Successfully');

        return redirect()->route('admin.users.index');
    }

    
    public function admin($id)
    {
        if (! Gate::allows('is_admin')) {
            return view('errors.403');
        }
        $user = User::find($id);

        //dd($id);

        $user->role = 1;

        $user->save();

        Session::flash('success', 'Updated Successfully');

        return redirect(route('admin.users.index'));
    }

    
    public function not_admin($id)
    {
        if (! Gate::allows('is_admin')) {
            return view('errors.403');
        }
        $user = User::find($id);

        //dd($id);

        $user->role = 0;

        $user->save();

        Session::flash('success', 'Updated Successfully');

        return redirect(route('admin.users.index'));
    }

    public function profile()
    {
        return view('backend.users.profile')->with('user', Auth::user());
    }

    public function updateProfile(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request, [
            'name' => 'string',
            'email' => 'required|email',
            'password' => 'string',
        ]);
        
        $user = User::findorFail($id);
        
        // Handle File Upload
        if($request->hasFile('photo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image

            $path = $request->file('photo')->move(public_path('/uploads/'), $fileNameToStore);
        }

        // Create user
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if($request->hasFile('photo')){

        $path = parse_url($user->photo);

        //dd($user->photo);

        $delete = File::delete(public_path('uploads/'.$user->photo));

        //if($delete) {return 123;}
            $user->photo = $fileNameToStore;
        }

        if($request->has('password'))
        {
            $user->password = Hash::make($request->password);
        }
        
        $user->save();

        Session::flash('success', 'Updated Successfully');

        return back();
    }

    public function trashed()
    {
        if (! Gate::allows('is_admin')) {
            return view('errors.403');
        }
        $users = User::onlyTrashed()->get();

        //$users->restore();

        // session()->flash('success', 'User Restored successfully');

        return view('backend.users.trashed', compact('users'));
        
    }

    public function kill($id)
    {
      if (! Gate::allows('is_admin')) {
        return view('errors.403');
    }
      $user = User::withTrashed()->where('id', $id)->firstOrFail();

      if($user->trashed()) {

          $path = parse_url($user->image);

          File::delete(public_path($path['path']));

          $user->forceDelete();

      } else {
          $user->delete();
      }
      session()->flash('success', 'User deleted successfully');

      return back();


    }

    public function restore($id)
    {

        $user = User::withTrashed()->where('id', $id)->firstOrFail();
        //$user = user::onlyTrashed()->firstOrFail();

        $user->restore();

        session()->flash('success', 'Post Restored successfully');

        return back();

    }

}
