<?php

namespace App\Http\Controllers;
use App\Localite;
use App\Region;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LocaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localites = DB::table('regions')
                    ->join('localites', 'localites.region_id', '=', 'regions.id')
                    ->paginate(10);
        return view('localite.index')->with('localites', $localites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::select('id', 'nomRegion')->get();
        return view('localite.create')->with('regions',$regions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nomLocalite'=> 'required',
            'region_id' => 'required'
        ]);
        $localite = new Localite;
        $localite->nomLocalite = $request->input('nomLocalite');
        $localite->region_id = $request->input('region_id');
        $localite->save();
        return redirect('/localite');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $localite =Localite::find($id);
        return view('localite.edit')->with('localite',$localite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nomLocalite'=> 'required',
            'region_id' => 'required'
        ]);
        $localite = Localite::find($id);
        $localite->nomLocalite = $request->input('nomLocalite');
        $localite->region_id = $request->input('region_id');
        $localite->save();
        return redirect('/localite');
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
