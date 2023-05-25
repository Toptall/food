<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{
    public function getUsers(){
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.users', compact('users'));
    }
    public function getCharts(){
        return view('admin.charts');
    }
}
