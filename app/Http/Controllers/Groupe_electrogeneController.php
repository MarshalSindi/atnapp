<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\Groupe_electrogene;
use Illuminate\Support\Facades\DB;
class Groupe_electrogeneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupes = DB::table('groupe_electrogenes')->paginate(10);
        return view('groupe_electrogene.index')->with('groupes', $groupes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groupe_electrogene.create');
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
            'marque'=> 'required',
            'capacite_cuve' => 'required',
            'puissance_groupe' => 'required'
        ]);

        $groupe = new Groupe_electrogene;
        $groupe->marque = $request->input('marque');
        $groupe->capacite_cuve = $request->input('capacite_cuve');
        $groupe->puissance_groupe = $request->input('puissance_groupe');
        $groupe->save();

        return redirect('/groupe_electrogene');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupe_electrogene =Groupe_electrogene::find($id);
        return view('groupe_electrogene.edit')->with('groupe_electrogene', $groupe_electrogene);
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
            'marque' => 'required',
            'capacite_cuve' => 'required',
            'puissance_groupe' => 'required'
        ]);

        $groupe_electrogene = Groupe_electrogene::find($id);
        $groupe_electrogene->marque = $request->input('marque');
        $groupe_electrogene->capacite_cuve = $request->input('capacite_cuve');
        $groupe_electrogene->puissance_groupe= $request->input('puissance_groupe');
        $groupe_electrogene->save();
        return redirect('/groupe_electrogene');
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
