<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*je recupere les infos utiisateurs que je mets dans la
      variable $user*/
      $user = Auth::user();

      /*et j'envoie cette variable à la page home*/
      return view('users.dashboard', ['user' => $user]);
        //auparavant home
    }
}
