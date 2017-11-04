<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\transport;
use \View as View; 
use Session;
//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class transportController extends Controller
{
    private $transport;
    public function submit(Request $request)
    {
        $this->validate($request, [
        'ownername' => 'required',
        'ownercontact' => 'required',
        'center' => 'required',
        'transporttype' => 'required',
        
        'availability' => 'required',
        'vehicleno' => 'required',
        'vehiclelocation' => 'required',
        'date' => 'required',
        'capacity' => 'required',

    ]);
            $transport = new transport;
            $transport->ownername = $request->input('ownername');
            $transport->ownercontact = $request->input('ownercontact');
            $transport->center = $request->input('center');
            $transport->vehicleno = $request->input('vehicleno');
            $transport->vehiclelocation = $request->input('vehiclelocation');
            $transport->date = $request->input('date');
          $transport->transporttype = $request->input('transporttype');
            $transport->capacity = $request->input('capacity');
          $transport->licenceno = $request->input('licenceno');

            

            $transport->save();

            return redirect('/home')->with('message', 'Successfully added your details');
         $this ->retrieve();
}
public function retrieve()
      {
         $transports = transport::all();
           $transports = DB::Collection('transports')
                ->select('ownername','ownercontact','center','vehicleno','vehiclelocation','date','transporttype','capacity','licenceno')
                ->offset(10)
                ->limit(5)
                ->get();
      return View::make('/details/transportdetail', ['transports' => $transports]);
    
      }
      public function delete($id){ 
      transport::find($id);
      DB::Collection('transports')->delete();
     
    // redirect
    Session::flash('message', 'Successfully deleted the transport!');
    return redirect('/details/transportdetail');
  }
    /**
     * Display a listing of the resource.
     *
     /* @return \Illuminate\Http\Response
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
