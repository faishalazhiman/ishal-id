<?php

namespace App\Http\Controllers;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        if($agent->isMobile()){
            return redirect('/profile');
        }else{
            return view('welcome');
        }
    }
}