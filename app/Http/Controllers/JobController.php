<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\Proposal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = Job::orderBy('title', 'asc')->paginate(9);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jobs.create');
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
        $job = Job::create($request->all());

        /*if($request->hasFile('image')){
      		$image = $request->file('image');
      		$filename = time() . '.' . $image->getClientOriginalExtension();
      		Image::make($image)->save( public_path('/img/jobs/' . $filename ) );

      		$job->image = $filename;
          $job->save();

        }  */

          return redirect('jobs')->with('status', 'Le job a bien été posté' );



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */





    public function show(Job $job)
    {

      if (Auth::user()) {

        $test = -1;


        $proposals = Proposal::get();
          foreach (Auth::user()->proposals as $proposal) {
            if ($proposal->job_id == $job->id) {
              $test = $proposal->job_id;
              return view('jobs.show', ['job' => $job, 'test' => $test]);
            }
            else {

              $test = -1;
              return view('jobs.show', ['job' => $job, 'test' => $test]);

            }
          }


          return view('jobs.show', ['job' => $job, 'test' => $test]);


      }

      else {
        return view('jobs.show', ['job' => $job]);
      }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
        $job->update($request->all());
        return redirect('jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
        $job->delete();
        return redirect('jobs');
    }
}
