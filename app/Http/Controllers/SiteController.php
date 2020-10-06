<?php

namespace App\Http\Controllers;
use App\Site;
use App\Type_site;
use App\Field;
use App\Localite;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = DB::table('sites')
                ->join('type_sites', 'sites.type_site_id', '=', 'type_sites.id')
                ->join('fields', 'sites.field_id', '=', 'fields.id')
                ->join('localites', 'sites.localite_id', '=', 'localites.id')
                ->join('regions', 'localites.region_id', '=', 'regions.id')
                ->select('sites.id','sites.nomSite','type_sites.typeSite','fields.nomField', 'sites.longitude', 'sites.latitude', 'localites.nomLocalite', 'regions.nomRegion')
                ->paginate(15);
                
        return view('site.index')->with('sites', $sites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::select('id', 'nomField')->get();
        $typesites = Type_site::select('id', 'typeSite')->get();
        $localites = Localite::select('id', 'nomLocalite')->get();
        return view('site.create', compact('localites','typesites','fields'));
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
            'nomSite'=> 'required',
            'type_site_id' => 'required',
            'field_id' => 'required',
            'localite_id'=> 'required',
            'longitude' =>'required',
            'latitude' => 'required'
        ]);

        $site = new Site;
        $site->nomSite = $request->input('nomSite');
        $site->type_site_id = $request->input('type_site_id');
        $site->field_id = $request->input('field_id');
        $site->localite_id = $request->input('localite_id');
        $site->longitude = $request->input('longitude');
        $site->latitude = $request->input('latitude');

        //Twilio SMS API
        // $sid = 'AC04bc22c67e320f1fd9b92bc9a637eede';
        // $token = 'e441d51a5fd08d0c43b68815e697a303'; 
        // $client = new Client($sid, $token);
        // $client->messages->create(
        //     '+22794000434',
        //     [
        //         'from'=> '+12564726375', 
        //         'body'=> 'Super le site '.$site->nomSite.' est créer'
        //     ]
        //     );
        $site->save();

        return redirect('/site');
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
        $site=Site::find($id);
        return view('site.edit')->with('site',$site);
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
            'nomSite'=> 'required',
            'type_site_id' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'field_id' => 'required',
            'localite_id'=> 'required'
        ]);

        $site = Site::find($id);
        $site->nomSite = $request->input('nomSite');
        $site->type_site_id = $request->input('type_site_id');
        $site->field_id = $request->input('field_id');
        $site->localite_id = $request->input('localite_id');
        $site->longitude = $request->input('longitude');
        $site->latitude = $request->input('latitude');
        $site->save();

        return redirect('/site');
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
