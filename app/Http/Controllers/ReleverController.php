<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Site;
use App\Controle;
use App\Livraison;
use App\Relever;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReleverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relevers = DB::table('sites')
                    ->join('relevers', 'sites.id', '=', 'relevers.site_id')
                    ->paginate(10);
        return view('relever.index')->with('relevers', $relevers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $site = Site::select('id', 'nomSite')->get();
        return view('relever.create')->with('site',$site);
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
            'date_relever' => 'required',
            'qte_relever' => 'required',
            'compteur'=> 'required'
        ]);

        $relever = new Relever;
        $relever->site_id = $request->input('site_id');
        $relever->date_relever = $request->input('date_relever');
        $relever->qte_relever = $request->input('qte_relever');
        $relever->compteur = $request->input('compteur');
        $relever->observation = $request->input('observation');
        $site =DB::table('relevers')
                ->where('site_id', $relever->site_id)
                ->latest()
                ->first();
       
      //  dd($site->compteur);
        if($site){
            $date2=\Carbon\Carbon::parse($relever->date_relever);
            $date1= \Carbon\Carbon::parse($site->date_relever);
            $controle = new Controle;
            $controle->site_id = $relever->site_id;
            $controle->semaine1 = $date1;
         //   dd($controle->semaine1);
            $controle->semaine2 = $date2;
            if($relever->qte_relever > $site->qte_relever){
                $livraison = DB::table('livraisons')
                            ->where('site_id', $relever->site_id)
                            ->latest()
                            ->first();
                $controle->conso = ($site->qte_relever + $livraison->qte_livre) - $relever->qte_relever;
                $controle->duree_conso_jour = $date1->diffInDays($date2, false);
                $controle->duree_fonctionnement_ge = $relever->compteur - $site->compteur;
                $controle->conso_moyenne = $controle->conso / $controle->duree_fonctionnement_ge;
                $controle->duree_fonctionnement_ge_jour = $controle->duree_fonctionnement_ge / $controle->duree_conso_jour;
                $controle->conso_site_jour =$controle->conso / $controle->duree_conso_jour;
                $controle->dure_conso_restant = $site->qte_relever / $controle->conso_site_jour;  
                $controle->date_rupture = $date1->copy()->addDay($controle->dure_conso_restant) ;
            
                $controle->save();
                $relever->save();
            }
            else{
                $controle->conso = $site->qte_relever - $relever->qte_relever; 
                $controle->duree_conso_jour = $date1->diffInDays($date2, false);
                $controle->duree_fonctionnement_ge = $relever->compteur - $site->compteur;
                $controle->conso_moyenne = $controle->conso / $controle->duree_fonctionnement_ge;
                $controle->duree_fonctionnement_ge_jour = $controle->duree_fonctionnement_ge / $controle->duree_conso_jour;
                $controle->conso_site_jour =$controle->conso / $controle->duree_conso_jour;
                $controle->dure_conso_restant = $site->qte_relever / $controle->conso_site_jour;  
                $controle->date_rupture = $date1->copy()->addDay($controle->dure_conso_restant) ;
            
                $controle->save();
                $relever->save();
            }
                
        }
        else{
            $relever->save();
        }
         // $controle->conso =  $livraison->total - $relever->qte_relever;
        //     $controle->duree_conso_jour = $date1->diffInDays($date2, false);
            
        //     $controle->duree_fonctionnement_ge = $relever->compteur - $livraison->compteur;
        //     $controle->conso_moyenne = $controle->conso / $controle->duree_fonctionnement_ge;
        //     $controle->duree_fonctionnement_ge_jour = $controle->duree_fonctionnement_ge / $controle->duree_conso_jour;
        //     $controle->conso_site_jour = $controle->conso / $controle->duree_conso_jour;
      
        

        return redirect('/relever');
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
        $relever=Relever::find($id);
        return view('relever.edit')->with('relever',$relever);
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
            'date_relever' => 'required',
            'qte_relever' => 'required',
            'compteur'=> 'required'
        ]);

        $relever = Relever::find($id);
        $relever->site_id = $request->input('site_id');
        $relever->date_relever = $request->input('date_relever');
        $relever->qte_relever = $request->input('qte_relever');
        $relever->compteur = $request->input('compteur');
        $relever->save();

        return redirect('/relever');
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
