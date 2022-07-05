@extends('products.layout')
@section('content')
@extends('admin.dashboard')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"style="margin-left:6rem,margin-top:6rem;">
            <h1>LISTE PRODUITS</h2></br></br>
            </div>
<div class="pull-right"style="margin-top:6rem">
<a class="btn btn-success" href="{{ route('products.create') }}"> ajouter nouveau produit</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success"style="margin-left:6rem;">
<p>{{ $message }}</p>
</div>
@endif
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">                        
<table class="table table-bordered"width="1000px">
                                <tr>

                                    <th width="120px">nomproduit</th>
                                   
                                    <th>quantite</th>
                                  
                                    <th>image</th>
                                    <th>prixUt</th>
                                    <th>type</th>
                                    <th width="203px">Action</th>
                                </tr>
                                @foreach ($products as $product)
                                <tr>

                                    <td>{{ $product->nomproduit }}</td>
                                   
                                    <td>{{ $product->quantite }}</td>
                               
                                    <td><img  src="{{asset ('/imagesproduit/'.$product->image)}}" alt="Avatar"  width="80px" height="80px"></td>

                                    <td>{{ $product->prixUT }}</td>
                                    <td>{{ $product->type }}</td>
                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            <a class="btn btn-info"
                                                href="{{ route('products.show',$product->id) }}">Show</a>

                                            <a class="btn btn-primary"
                                                href="{{ route('products.edit',$product->id) }}">Edit</a>
                                   
                                        <form action="/delete/{{ $product->id }}" method="post">
                                            <button class="btn btn-danger"
                                                onclick="return confirm('voulez vous vraiment supprimer cette produit??');"
                                                type="submit">Delete</button>
                                            @csrf
                                            @method('delete')
                                        </form>
                                  


                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
</div>
</div>
                           
                            {!! $products->links() !!}
</div>

                           
                            @endsection
