<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
    $services = Service::paginate(2);
    return view('services.index',compact('services'));
    }
    public function create()
    {
    return view('services.create');
    }

    
    public function store(Request $request)
    {
    $request->validate([
    'nomservice' => 'required',
    'image' => 'required',
    ]);

    if ($request->hasFile('image')){
        $destination_path='/imagesservice/';
        $image=$request->file('image');
        $image_name=$image->getClientOriginalName();
        $path =$request->file('image')->storeAs($destination_path,$image_name);
        $input['image'] = $image_name;
    }

    Service::create($request->all());
    return redirect()->route('services.index')
    ->with('success','Service crèe  aves success.');
    }

    public function show(Service $service)
    {
    return view('services.show',compact('service'));
    }

    public function edit(Service $service)
    {
    return view('services.edit',compact('service'));
    }


    public function update(Request $request, Service $service)
    {
    $request->validate([
        'nomservice' => 'required',
        'image' => 'required',
    ]);
    $service->update($request->all());
    return redirect()->route('services.index')
    ->with('success','Service modifiè avec sucess');
    }


    public function destroy(Service $service)
    {
    $service->delete();
    return redirect()->route('services.index')
    ->with('success','Service supprimè avec sucess');
    }
    }
