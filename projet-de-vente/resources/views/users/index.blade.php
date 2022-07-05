

@extends('users.layout')
@section('content')
@extends('admin.dashboard')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<body>
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"style="margin-left:8rem;">
            <h1>LISTE UTILISATEURS</h2></br></br>
            </div>
           
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success"style="margin-left:6rem;">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered"style="margin-left: 6rem;">
        <tr>
  
            <th width="200px">Nom et Prenom</th> 
            <th>email</th>
        
            <th>role</th>
       
          
           
            <th width="500px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            
            <td>{{ $user->name}}</td>
        
            <td>{{ $user->email}}</td>
        
            
            <td>{{ $user->role}}</td>
       
           
         
         
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">   
               
           
@if($user->status == 1)
                <a  href="{{ route('users.status.update' ,['user_id' => $user->id,'status_code' => 0]) }}"class="btn btn-success"><i class="fa fa-check"></i></a>
                 @else  
                 <a  href="{{ route('users.status.update' ,['user_id' => $user->id,'status_code' => 1]) }}"class="btn btn-danger"><i class="fa fa-ban"></i></a> 
                 @endif
                <form action="/delete/{{ $user->id }}" method="post">
                                            <button class="btn btn-danger"
                                                onclick="return confirm('voulez vous vraiment supprimer cette user??');"
                                                type="submit">Delete</button>
                                            @csrf
                                            @method('delete')
                                        </form>
                                    
                </form>
         
        </tr>
        @endforeach
    </table>  
   
        
    {!! $users->links() !!}  
    <div  style="margin-left:+12rem;" >
    <style>svg{width:5px;}</style>
  
@endsection
</body>  