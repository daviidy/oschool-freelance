<?php

namespace App\Http\Controllers;

use App\Proposal;
use App\User;
use App\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proposal = Proposal::create($request->all());

        return view('proposals.thanks-for-your-proposal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(Proposal $proposal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposal $proposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposal $proposal)
    {
        //
    }

    public function acceptProposal($user, $accept){
      $proposal = Proposal::where(['user_id' => $user, 'id' => $accept])->update([
        'status' => 'Accepté !'
      ]);  
      return redirect('mes-jobs')->with('status', 'Modifications enregistrées !' );
    }

    public function rejectProposal($reject, $user){
      $proposal = Proposal::where(['user_id' => $user, 'job_id' => $reject])->update([
        'status' => 'Refusé'
      ]);
      return redirect('mes-jobs')->with('status', 'Modifications enregistrées !' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposal $proposal)
    {
        //
    }
}
