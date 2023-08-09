<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Plan;



class MenuController extends Controller
{

    public function getAll(Request $request){
        $plans=Plan::all();
        $menus = Menu::all();
        return view('menu', compact('menus','plans'));
    }
    public function getOne(Menu $menu){
       // $plan=Plan::
        return view('menuone', compact('menu'));
    }
   }