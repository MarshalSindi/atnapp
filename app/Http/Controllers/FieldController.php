<?php

namespace App\Http\Controllers;
use App\Field;
use App\Localite;
use App\Region;
use App\Site;
use App\Asp;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FieldController extends Controller
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
        $fields = DB::table('asps')
                    ->join('fields', 'fields.asp_id', '=', 'asps.id')
                     ->paginate(10);
        return view('field.index')->with('fields', $fields)->with('success', 'Cool');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asps= Asp::all(); 
        return view('field.create')->with('asps', $asps);
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
            'nomField' => 'required',
            'asp_id' => 'required',
            'telephone' => 'required|unique:fields'
        ]);

        $field = new Field;
        $field->nomField = $request->input('nomField');
        $field->asp_id = $request->input('asp_id');
        $field->telephone = $request->input('telephone');
        $field->save();
        return redirect('/field')->with('success', 'Cool');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sites = Field::with('sites')->find($id);           
        return view('field.show', compact('sites'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $field = Field::find($id);
        return view('field.edit')->with('field', $field);
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
            'nomField' => 'required',
            'asp_id' => 'required',
            'telephone' => 'required'
        ]);

        $field = Field::find($id);
        $field->nomField = $request->input('nomField');
        $field->telephone = $request->input('telephone');
        $field->asp_id = $request->input('asp_id');
        $field->save();
        return redirect('/field')->with('success', 'Modification réussis!');
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
