<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServicesController extends Controller
{    public function service(){
    $services = Service::orderBy('id', 'desc')->paginate(4);
    return view('listeservices')->with('services',$services);}
    //
}
