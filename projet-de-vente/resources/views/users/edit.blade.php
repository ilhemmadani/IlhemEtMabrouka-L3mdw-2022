@extends('users.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier Utilisateur</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> retour</a>
            </div>
        </div>
    </div>
   
  
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
          
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom et Prenom:</strong>
                    <input type="text" value="{{ $user->name }}" name="name"class="form-control"  placeholder="nom" disabled>
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email:</strong>
                    <input type="text" value="{{ $user->email }}" name="email"class="form-control"  placeholder="email"disabled>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>role:</strong>
                    <input type="text" value="{{ $user->role }}" name="role"class="form-control"  placeholder="role"disabled>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>password:</strong>
                    <input type="password" name="password" class="form-control" placeholder="password"value="{{ $user->password }}"disabled>
                </div>
            </div>
          
                    

                    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>etat:</strong>
                    
                    <select name="etat" id="pet-select" class="form-control">
           
    <option value="actif">actif</option>
    <option value="inactif">inactif</option>
  
</select>
                </div>
            </div>
               
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">envoyer</button>
            </div>
        </div>
   
    </form>
@endsection
