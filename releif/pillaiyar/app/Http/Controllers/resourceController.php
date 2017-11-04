<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\resource;
use \View as View; 
use Session;
//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class resourceController extends Controller
{
    private $resources;
 public function submit(Request $request)
    {
        $this->validate($request, [
        'itemname' => 'required',
        'itemtype' => 'required',
        'itemdescription' => 'required',
        'stock' => 'required',
        'level' => 'required',
        'quantity' => 'required',
        'collectby' => 'required',
        'deliverby' => 'required',
        'value' => 'required'
        

    ]);

        $resources = new resource;
            $resources->itemname = $request->input('itemname');
            $resources->itemtype = $request->input('itemtype');
            $resources->itemdescription = $request->input('itemdescription');
            $resources->stock = $request->input('stock');
            $resources->value = $request->input('value');
            $resources->quantity = $request->input('quantity');
            $resources->collectby = $request->input('collectby');
            $resources->deliverby = $request->input('deliverby');
        $resources->level = $request->input('level');   

            $resources->save();

        return redirect('/forms/transport/submit')->with('message', 'Resources Details have added Successfully');
      $this ->retrieve();
        }
      public function retrieve()
      {
         $resources = resource::all();
           $resources = DB::collection('resources')
                ->select('itemname','itemtype','itemdescription','stock','value','quantity','collectby','deliverby','level')
                ->offset(10)
                ->limit(5)
                ->get();
      return View::make('/details/resourcesdetail', ['resources' => $resources]);
    
      }
      public function delete($id){ 
     resource::find($id);
      DB::collection('resources')->delete();
      //DB::collection('resources')->where('_id', $id)->delete();
     
    // redirect
    Session::flash('message', 'Successfully deleted the resource!');
    return redirect('/details/resourcesdetail');
  }
    /**
     * Display a listing of the resource.
     *
   /  * @return \Illuminate\Http\Response
     */
  /*  public function index()
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
  /*  public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)
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
    /*public function destroy($id)
    {
        //
    }*/
}
