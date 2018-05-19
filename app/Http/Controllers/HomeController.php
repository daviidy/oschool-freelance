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

      /*je verifie si user est admin. si oui
      alors j'envoie le dashboard admin, sinon
      j'envoie le dashboard user par défaut*/

      /*et j'envoie cette variable à la page home*/

      if ($user->isAdmin()) {
        return view('admin.dashboard', ['user' => $user]);
      }

      else {
        return view('users.dashboard', ['user' => $user]);
        //auparavant home

      }

    }
}
