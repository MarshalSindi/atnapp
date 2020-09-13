<?php

namespace App\Http\Controllers;
use App\Field;
use App\Localite;
use App\Region;
use App\Site;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = DB::table('fields')->paginate(10);
        return view('field.index')->with('fields', $fields);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('field.create');
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
            'telephone' => 'required'
        ]);

        $field = new Field;
        $field->nomField = $request->input('nomField');
        $field->telephone = $request->input('telephone');
        $field->save();
        return redirect('/field');
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
            'telephone' => 'required'
        ]);

        $field = Field::find($id);
        $field->nomField = $request->input('nomField');
        $field->telephone = $request->input('telephone');
        $field->save();
        return redirect('/field');
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
