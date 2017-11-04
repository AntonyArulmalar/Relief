<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class projectController extends Controller
{
     public function submit(Request $request)
    {
        $this->validate($request, [
        'projectname' => 'required',
        //'projecttype' => 'required',
        'description' => 'required',
        'location' => 'required',
        'leadername' => 'required',
        'leaderemail' => 'required',
        'leadercontact' => 'required'
    ]);
        $project = new project;
        $project->projectname =             $request->input('projectname');
        $project->description =             $request->input('description');
        $project->projecttype =             $request->input('projecttype');
        $project->other_project_type =      $request->input('other_project_type');
        $project->location =                $request->input('location');
        $project->leadername =              $request->input('leadername');
        $project->leaderemail =             $request->input('leaderemail');
        $project->leadercontact =           $request->input('leadercontact');
        $project->save();

        return redirect('/forms/member/submit')->with('message', 'Project Details have added Successfully');
    }
    /**
     * Display a listing of the resource.
     *
     /* @return \Illuminate\Http\Response
     */
   /* public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   /* public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  /*  public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
