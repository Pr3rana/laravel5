<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FusionCharts extends Controller
{
    public function home(){
    	return view('fusioncharts/index');
    }
}
