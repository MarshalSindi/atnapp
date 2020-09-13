<?php

namespace App\Http\Controllers;
use App\Site;
use App\Relever;
use App\Livraison;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $livraisons = DB::table('livraisons')
                    ->join('sites', 'livraisons.site_id', '=', 'sites.id')
                    ->paginate(15);
        return view('home')->with('livraisons', $livraisons);
    }
}
