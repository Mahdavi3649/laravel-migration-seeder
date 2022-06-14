<?php

namespace App\Http\Controllers;

use App\Viaggio;
use Illuminate\Http\Request;

class ViaggioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viaggi = Viaggio::all();
        //dd($viaggi);
        return view('viaggi.index', compact('viaggi'));
    }

  

    /**
     * Display the specified resource.
     *
     * @param  \App\Viaggio  $viaggio
     * @return \Illuminate\Http\Response
     */
    public function show(Viaggio $viaggio)
    {
        //dd($viaggio);
        return view('viaggi.show', compact('viaggio'));
    }
   
}
