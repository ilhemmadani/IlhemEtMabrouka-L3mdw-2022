@extends('products.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Details produit</h2></br</br>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('products.index') }}"> retour</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nomproduit:</strong>
{{ $product->nomproduit }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>designiation:</strong>
{{ $product->designiation }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>quantite:</strong>
{{ $product->quantite }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>pourcentage:</strong>
{{ $product->pourcentageprod }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>image:</strong>
<img class="img" src="{{asset ('/imagesproduit/'.$product->image)}}" alt="Avatar" width="80px" height="80px">

</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>prixUT:</strong>
{{ $product->prixUT }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>type:</strong>
{{ $product->type }}
</div>
</div>
</div>
@endsection
