<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Viaggio;

class PageController extends Controller
{
    public function index()
    {
        $viaggi = Viaggio::all();
        //dd($viaggi);
        return view('welcome', compact('viaggi'));
    }
}
