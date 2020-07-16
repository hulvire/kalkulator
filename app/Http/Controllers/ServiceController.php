<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ServiceController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $Sluzby=Service::all();
            return view('sluzby', ['sluzby' => $Sluzby]);
        }else{
            return redirect('login');
        }
    }
}
