<?php

namespace App\Http\Controllers;

use App\Site;
use App\Livraison;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LivraisonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livraisons = DB::table('livraisons')
                    ->join('sites', 'livraisons.site_id', '=', 'sites.id')
                    ->paginate(15);
        return view('livraison.index')->with('livraisons', $livraisons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $site = Site::select('id', 'nomSite')->get();
        return view('livraison.create')->with('site',$site);
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
            'site_id'=> 'required',
            'date_livraison' => 'required',
            'qte_avant' => 'required',
            'qte_livre' => 'required',
            'compteur'=> 'required'
        ]);

        $livraison = new Livraison;
        $livraison->site_id = $request->input('site_id');
        $livraison->date_livraison = $request->input('date_livraison');
        $livraison->qte_avant = $request->input('qte_avant');
        $livraison->qte_livre = $request->input('qte_livre');
        $livraison->total = $livraison->qte_avant + $livraison->qte_livre;
        $livraison->compteur = $request->input('compteur');
        $livraison->observation = $request->input('observation');
        $livraison->save();

        return redirect('/livraison');
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
        $livraison=Livraison::find($id);
        return view('livraison.edit')->with('livraison', $livraison);
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
            'site_id'=> 'required',
            'date_livraison' => 'required',
            'qte_avant' => 'required',
            'qte_livre' => 'required',
            'compteur'=> 'required'
        ]);

        $livraison =Livraison::find($id);
        $livraison->site_id = $request->input('site_id');
        $livraison->date_livraison = $request->input('date_livraison');
        $livraison->qte_avant = $request->input('qte_avant');
        $livraison->qte_livre = $request->input('qte_livre');
        $livraison->total = $livraison->qte_avant + $livraison->qte_livre;
        $livraison->compteur = $request->input('compteur');
        $livraison->observation = $request->input('observation');
        $livraison->save();

        return redirect('/livraison');
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
