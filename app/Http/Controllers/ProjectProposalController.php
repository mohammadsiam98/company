<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\ProjectProposal;
class ProjectProposalController extends Controller
{
     //
     public function projectProposal()
     {
         return view('pages.project_proposal.projectProposal');
     }

     public function list()
     {
         //
         $ProjectProposalDetails = ProjectProposal::all();
         return view ('pages.project_proposal.list',compact('ProjectProposalDetails'));
     }
 
 
     public function store(Request $request)
     {
         $request->validate([
             'name'=>'required',
             'email'=>'required',
             'refSite'=>'required',
             'message'=>'required',
         ]);
         $ProjectProposalDetails = new ProjectProposal;
         $ProjectProposalDetails->name = $request->name;
         $ProjectProposalDetails->email = $request->email;
         $ProjectProposalDetails->refSite = $request->refSite;
         $ProjectProposalDetails->message = $request->message;
         $ProjectProposalDetails->save();
         return redirect()->route('project-proposal','/#contact')->with('success', 'Message has been sent successfully');
     }
 
 
}
