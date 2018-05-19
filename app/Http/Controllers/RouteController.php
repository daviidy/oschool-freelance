<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\User;
use App\Proposal;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{



    public function mesJobs(){

      if (Auth::guest()) {
        return view('auth.login');
      }

      elseif (Auth::user()->isAdmin()) {
        $users = User::orderBy('id', 'asc')->get();
        $proposals = Proposal::orderBy('id', 'asc')->get();
        $jobs = Job::orderBy('id', 'asc')->get();
        return view('admin.jobs-list',
        [
          'users' => $users,
          'proposals' => $proposals,
          'jobs' => $jobs
        ]);
      }

      elseif (Auth::user()) {
        $user = Auth::user();
        $proposals = Auth::user()->proposals;
        return view('users.mes-jobs', ['user' => $user, 'proposals' => $proposals ]);
      }

    }

    public function notifications(){
      if (Auth::guest()) {
        return view('auth.login');
      }

      elseif (Auth::user()) {
        $user = Auth::user();
        return view('users.notifications', ['user' => $user]);
      }
    }







}
