<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('id','email','name','role','status')->paginate(2);
    
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' ,
  
            'email' ,
            'role' ,
            'etat' => 'required|string',
            'telephone'=>$request['phone_number'],
            'adresse'=>$request['adresse'],
         
            'password' =>bcrypt($request['password'])

        ]);
    
        User::create($request->all());
     
        return redirect()->route('users.index')
                        ->with('success','user created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' ,
           
            'email' ,
            'role' ,
            'etat' => 'required|string',
            'telephone',
            'adresse',
            'password' ,
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')
                        ->with('success','user deleted successfully');
    }
    public function updatestatus($user_id,$status_code){
        try{
$update_user = User::whereId($user_id)->update([
    'status'=>$status_code
]);
if($update_user){
return redirect()->route('users.index')
->with('success','user  status modifié avec success ');
}
return redirect()->route('users.index')
->with('error',' fail to update user  status');
        }
        catch (\Throwable $th){
throw $th;
        }

    }
}
