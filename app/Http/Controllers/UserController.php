<?php

namespace App\Http\Controllers;

use App\User;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user()->all();
      return view('users.dashboard', ['user' => $user]);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('users.dashboard', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('users.dashboard', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

      $request->validate([
        'first_name' => 'nullable|bail|string|sometimes',
        'last_name' => 'nullable|bail|string|sometimes',
        'number_tel' => 'nullable|bail|sometimes',
        'job_title' => 'nullable|bail|string|sometimes',
        'linkedin' => 'nullable|bail|url|sometimes',
        'facebook' => 'nullable|bail|url|sometimes',
        'lien_cv' => 'nullable|bail|url|sometimes',
        'description' => 'nullable|bail|string|sometimes',
      ]);

      $user->update($request->all());
      return redirect('home')->with('status', 'Modifications enregistrées !' );

    }


  public function updateAvatar(Request $request){ 

    $this->validate($request, [
      'image' => 'image',
    ]);

    if($request->hasFile('image')){
      $image = $request->file('image');
      $filename = time() . '.' . $image->getClientOriginalExtension();
      Image::make($image)->save( public_path('/img/usersPhotos/' . $filename ) );
      $user = Auth::user();

      $user->image = $filename;
      $user->save();
      return redirect('home')->with('status', 'Modifications enregistrées !' );
  }

  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
