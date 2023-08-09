<?php

namespace App\Http\Controllers;
use App\Models\Page;
use App\Models\Catalog;


use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    // public function getIndex(){
    //     $catalogs = Catalog::all();
    //     return view('index', compact('catalogs'));
    // }

    public function getText($url = null){
        // dd($url);
        $page=Page::where('url', $url)->first();
        return view('page', compact('page'));

    }
}
