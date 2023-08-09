<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
class PlanController extends Controller
{
    public function planAll(){
        $plans = Plan::all();
        return view('base', compact('plans'));
        }
        public function getOne(Plan $plan){  
return view('plan',compact('plan'));
        } 

}
