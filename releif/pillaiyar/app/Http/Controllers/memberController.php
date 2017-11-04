<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\member;
use \View as View; 
use Session;
//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
class memberController extends Controller
{
    private $members;
    public function submit(Request $request)
    {
        $this->validate($request, [
        'membername' => 'required',
        'membercontact' => 'required',
        'memberemail' => 'required',
        'skills' => 'required',
        'location' => 'required'
    ]);
            $members = new member;
            $members->membername = $request->input('membername');
            $members->membercontact = $request->input('membercontact');
            $members->memberemail = $request->input('memberemail');
            $members->skills = $request->input('skills');
            $members->location= $request->input('location');
            $members->save();

             return redirect('/forms/resource/submit')->with('message', 'Member Details have added Successfully');
        $this ->retrieve();
    }
 // private $data;
    public function retrieve()
    {
       
         $members = DB::collection('members')
              ->select('membername','membercontact','memberemail','skills','location')
              ->offset(10)
              ->limit(5)
              ->get();
    return view('/details/memberdetails', ['members' => $members]);
  
    }
    /* public function edit($id){
        $retrieve = members::find($id);
        //return view('/details/memberdetails/edit/{id}', ['members' => $retrieve]);
    }
    
    public function update($id, Request $request){
        $retrieve = $request->all();
        members::find($id)->update($retrieve);
        Session::flash('success_msg', 'Post updated successfully!');
        //return redirect()->route('/details/memberdetails/update/{id}');
      }
    */
    
    public function delete($id){ 
      member::find($id);
      DB::collection('members')->delete();
     
    // redirect
    Session::flash('message', 'Successfully deleted the member!');
    return redirect('/details/memberdetails');

    }
    /**
     * Display a listing of the resource.
     *
    / * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function create()
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
   /* public function edit($id)
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
   /* public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function destroy($id)
    {
        //
    }*/
}
